<?php  
ob_start();
require_once '../include/config.php';  

    
    class MockExamFunction {  
        public $con;     
        function __construct() {  
              
            // connecting to database  
            $db = new DbConnect(); 
            $this->con = $db->connect();
               
        }  
        // destructor  
        function __destruct() {  
              
        }  


///////////////////////////Exam Question START///////////////////////////////////

public function getQuestionPaper($qpaper_ID){
    // echo $data;exit;
    // $qpaper_ID=$data['qpaer_id'];
    $query = "SELECT * FROM question_paper where qpaper_ID=$qpaper_ID AND qpaper_status=1";
    $res = mysqli_query($this->con,$query);  
    $data = []; 
    // while($row = mysqli_fetch_array($res)) {
    //     $data[] = $row;
    // }
    $row = mysqli_fetch_assoc($res);
    return $row;          
}

public function getExamQuestions($question_id){
    $query = "SELECT * FROM questions where q_id=$question_id";
    $res = mysqli_query($this->con,$query); 
    $row = mysqli_fetch_assoc($res);
    return $row;         
}
public function getAllQuestions($qpaper_ID){
    $query = "SELECT * FROM questions where qpaper_id=$qpaper_ID";
    $res = mysqli_query($this->con,$query); 
    // $row = mysqli_fetch_assoc($res);
    while($row = mysqli_fetch_assoc($res)) {
        $result[] = $row;
    }
    return $result;         
}

public function submitMark($data){
    //variable initialization
    // echo "session print";
        // print_r($_SESSION);exit;
    $right_answers = array();
    $skipped_answers = array();
    $wrong_answers = array();
    $right_answers_time = array();
    $answer_time= array();
    $skipped_answers_time = array();
    $wrong_answers_time = array();
    $attended_datetime=date("Y-m-d H:i:s");
    $studid=$_SESSION['uid'];

    // echo $data;
    $mark=json_decode($data);
    // print_r($mark);exit;
    $qHistoryID=$mark->qpaper_history;
    $qpaper_id=$mark->qpaper_id;
    $qpaper_Details=$this->getQuestionPaper($qpaper_id);
    $get_questions=$this->getAllQuestions($qpaper_id);
    $qids=$qpaper_Details['question_ids'];
    $max_score=$qpaper_Details['qpaper_total_weightage'];
    $max_time=$qpaper_Details['total_time_of_exam'];
    // print_r($mark->answersArray);exit;
    // echo count($mark->answersArray);exit;
    // for($i=0;$i<count($mark->answersArray);$i++){
    //     echo "i: ".$i;
    // }
    $i=0;
    // print_r($mark->answersArray);exit;
    foreach($mark->answersArray as $qDetails => $value){
        // echo "i: $i <br>";
        // $i++;
        // print_r($qDetails);
        // echo "$qDetails[0]-----</n>";
        $answersArray[$qDetails]["attendedOption"]=$value[0];
        $answersArray[$qDetails]["timetaken"]=$value[1];
        $answersArray[$qDetails]["status"]=$value[2];
        $answersArray[$qDetails]["qid"]=$qDetails[0];
    }
    
    // print_r($answersArray);exit;
    foreach($get_questions as $qDetails){
        // print_r($qDetails);exit;
        $questionDetails[$qDetails['q_id']]["rightOption"]=$qDetails['answer'];
        $questionDetails[$qDetails['q_id']]["q_mark"]=$qDetails['mark'];
        $questionDetails[$qDetails['q_id']]["neg_mark"]=$qDetails['negative_score'];
    }
    $query = "INSERT INTO answers(qpaper_id,qpaperhistory_id,studid,qids,max_score,max_time,attended_datetime) VALUES('$qpaper_id','$qHistoryID','$studid','$qids','$max_score','$max_time','$attended_datetime')";
    mysqli_query($this->con,$query); 
    $answer_id = mysqli_insert_id($this->con);
    // echo $last_id;exit;
    $answer_detailsQuery="INSERT INTO answer_details(`qid`,`answerid`,`answer`,`correctans`,`score`,`neg_score`,`time_spent`,`status`) VALUES ";
    // echo $answer_detailsQuery;exit;
    $totwrongmark=0;
    $totrightmark=0;
    foreach($mark->getqidArray as $qID){
        array_push($answer_time, $answersArray[$qID]['timetaken']);
        if($answersArray[$qID]['status']==1){
            if($answersArray[$qID]['attendedOption']==$questionDetails[$qID]['rightOption']){
                array_push($right_answers, $qID);
                array_push($right_answers_time, $answersArray[$qID]['timetaken']);
                $score=$questionDetails[$qID]['q_mark'];
                $neg_score=0;
                $status=1;
                $totrightmark+=$score;
            }else{
                array_push($wrong_answers, $qID);
                array_push($wrong_answers_time, $answersArray[$qID]['timetaken']);
                $score=0;
                $neg_score=$questionDetails[$qID]['neg_mark'];
                $status=0;
                $totwrongmark+=$neg_score;
            }
        }else{
            array_push($skipped_answers, $qID);
            array_push($skipped_answers_time, $answersArray[$qID]['timetaken']);
            $score=0;
            $neg_score=0;
            $status=-1;
        }
        $answer_detailsQuery.="('$qID','$answer_id','".$answersArray[$qID]['attendedOption']."','".$questionDetails[$qID]['rightOption']."','$score','$neg_score','".$answersArray[$qID]['timetaken']."','$status'),";
        
    }
    $totalmark=$totrightmark-$totwrongmark;
    $percentage=($totalmark/$max_score)*100;
    $answer_detailsQuery=rtrim($answer_detailsQuery,",");
    $tot_right_ans_time=array_sum($right_answers_time);
    $tot_wrong_answers_time=array_sum($wrong_answers_time);
    $tot_skipped_answers_time=array_sum($skipped_answers_time);
    $count_right=count($right_answers);
    $count_wrong=count($wrong_answers);
    $count_skipped=count($skipped_answers);
    $count_answered=$count_right+$count_wrong;
    $total_time_taken=$tot_right_ans_time+$tot_wrong_answers_time+$tot_skipped_answers_time;
    $correct_qids=implode(",", $right_answers);
    $incorrect_qids=implode(",", $wrong_answers);
    $skipped_qids=implode("," ,$skipped_answers);

    
    $updateAnswer="UPDATE `answers` SET `tot_score_obtained` = '$totalmark', `percentage` = '$percentage', `tot_time_taken` = '$total_time_taken', `correct_time` = '$tot_right_ans_time', `incorrect_time` = '$tot_wrong_answers_time', `skipped_time` = '$tot_skipped_answers_time', `answered_cnt` = '$count_answered', `notanswered_cnt` = '$count_skipped', `correct_cnt` = '$count_right', `incorrect_cnt` = '$count_wrong', `correct_score` = '$totrightmark', `negative_score` = '$totwrongmark', `correct_qids` = '$correct_qids', `incorrect_qids` = '$incorrect_qids', `skipped_qids` = '$skipped_qids' WHERE `answers`.`answerid` = '$answer_id'" ;
    mysqli_query($this->con,$answer_detailsQuery);
    if(mysqli_query($this->con,$updateAnswer)){
        $result["msg"]="Thank you for attending the exam.";
        $result["status"]=1;
        $result["attended"]=$count_answered;
        $result["unattended"]=$count_skipped;
    }else{
        $result["msg"]="Failed to submit the exam";
        $result["status"]=0;
    }
    //rank calculation
    $get_rank_query="SELECT studid,answerid from answers where qpaper_id='$qpaper_id' ORDER BY tot_score_obtained DESC";
    // echo $get_rank_query;
    $res_rank=mysqli_query($this->con,$get_rank_query);
    $rankArray=Array();
    $i=0;
    while($row=mysqli_fetch_assoc($res_rank)){
        $rankArray[$i]['studid']=$row['studid'];
        $rankArray[$i]['answerid']=$row['answerid'];
        $i++;
    }
    $clear_rank="DELETE FROM rank where q_paper_id=$qpaper_id";
    mysqli_query($this->con,$clear_rank);
    $insert_rank="INSERT INTO rank(q_paper_id,rank,stud_id,answerid) VALUES ";
    $rank=1;
    // print_r($rankArray);exit;
    foreach ($rankArray as $key) {
        $stud_id=$key['studid'];
        $answer_id=$key['answerid'];
        $insert_rank.="('$qpaper_id','$rank','$stud_id','$answer_id'),";
        $rank++;
    }
    $insert_rank=rtrim($insert_rank,",");
    mysqli_query($this->con,$insert_rank);
    $disable_student="UPDATE login set status=0 where id=$studid";
    mysqli_query($this->con,$disable_student);
    // session_destroy();
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
    return $result;         
}
public function get_questionPaperHistory($qid)   {
    $query = "SELECT q_history_id FROM question_paper_history where qpaper_id=$qid ORDER BY q_history_id DESC LIMIT 1";
    $res = mysqli_query($this->con,$query);  
    $row = mysqli_fetch_array($res);
    return $row['q_history_id']; 
}
///////////////////////////Exam Question END/////////////////////////////////// 



    }  
?>  