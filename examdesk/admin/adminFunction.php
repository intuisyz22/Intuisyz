<?php  
ob_start();
require_once '../include/config.php';  

class AdminFunction {  
    public $con;     
    function __construct() {  
          
        // connecting to database  
        $db = new DbConnect(); 
        $this->con = $db->connect();
           
    }  
    // destructor  
    function __destruct() {  
          
    }  



    /*///////////////////////////// View candidates rankwise 
    Created by: Vidya LV
    On: 29/01/2020
    ////////////////////////////////////*/
    public function getCandidate_rank(){
        $query="SELECT r.rank_id,r.rank,c.name,c.email_id,c.phno,a.tot_score_obtained,r.stud_id,r.answerid,r.q_paper_id, a.attended_datetime,a.attended_datetime, qp.qpaper_name from rank r LEFT JOIN candidates c ON r.stud_id=c.uid LEFT JOIN answers a ON a.answerid=r.answerid LEFT JOIN question_paper qp ON r.q_paper_id=qp.qpaper_ID ORDER BY a.answerid DESC";
        // echo $query;exit;
        $result= mysqli_query($this->con,$query);
        while ($row=mysqli_fetch_assoc($result))
            $data[]=$row;
        // print_r($data);exit;
        return $data;

    }
    ////////////////////////////// Candidate rankwise End /////////////////////////////////////
    /*/////////////////////////////  Questions
    Created by: Vidya LV
    On: 29/01/2020
    ////////////////////////////////////*/

    public function getAllQuestions(){
        $query="SELECT * from questions ORDER BY q_id DESC";
        // echo $query;exit;
        $result= mysqli_query($this->con,$query);
        while ($row=mysqli_fetch_assoc($result))
            $data[]=$row;
        return $data;
    }
    public function saveQuestions($data){
        $qpaper_id=$data['qpaper'];
        $q_id=$data['q_id'];
        $q_oldMark=$data['q_oldMark'];
        $q_status=$data['q_status'];
        // echo "qstat: ".$q_status;exit;
        $question=$data['question'];
        $option1=$data['option1'];
        $option2=$data['option2'];
        $option3=$data['option3'];
        $option4=$data['option4'];
        $desc1=$data['answer_description1'];
        $desc2=$data['answer_description2'];
        $desc3=$data['answer_description3'];
        $desc4=$data['answer_description4'];
        $mark=$data['mark'];
        $answer=$data['answer'];
        $negative_score=$data['negative_score'];
        $created_user_id=$_SESSION['uid'];
        $created_time=date("Y-m-d h:i:s");
        // print_r($data);exit;
        $query_qpaper="SELECT question_ids,qpaper_total_weightage,total_questions FROM `question_paper` where qpaper_ID='$qpaper_id' ";
        $result_qpaper= mysqli_query($this->con,$query_qpaper);
        $row=mysqli_fetch_assoc($result_qpaper);
        if($q_id!=""){
            $query="UPDATE `questions` set `question`='$question',`option1`='$option1',`option2`='$option2',`option3`='$option3',`option4`='$option4',`answer`='$answer',`mark`='$mark',`negative_score`='$negative_score',`desc1`='$desc1',`desc2`='$desc2',`desc3`='$desc3',`desc4`='$desc4' WHERE `q_id`='$q_id' ";
            
        }else{
            $query="INSERT INTO `questions` (`qpaper_id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`, `mark`, `created_user_id`, `created_time`,  `negative_score`, `desc1`, `desc2`, `desc3`, `desc4`) VALUES ('$qpaper_id', '$question', '$option1', '$option2', '$option3', '$option4',  '$answer', '$mark', '$created_user_id', '$created_time',  '$negative_score', '$desc1', '$desc2', '$desc3', '$desc4');";

            
        }
        // echo $query;exit;

        $data=[];

        if(mysqli_query($this->con,$query)){
            $data["status"]=1;
            $data["qpaper_ID"]=$qpaper_id;
            $_SESSION['msg']="Question saved Successfully";
                }else{
            $data["status"]=0;
            $data["qpaper_ID"]=$qpaper_id;
            $_SESSION['msg']="Failed to save question";
        }
        $current_q_id = mysqli_insert_id($this->con);
        // echo $current_q_id;exit;
        $qids=$row['question_ids'];
            // $qpaper_total_weightage=$row['qpaper_total_weightage']+$mark;
            // $total_questions=$row['total_questions']+1;
            // $update_qpaper="UPDATE question_paper set question_ids='$question_ids',qpaper_total_weightage='$qpaper_total_weightage',total_questions='$total_questions'";
        if($q_id==""){
            if($qids!="" ){
                $question_ids=$qids.",".$current_q_id;
                
            }else{
                $question_ids=$current_q_id;
            }
             
            $qpaper_total_weightage=$row['qpaper_total_weightage']+$mark;
            $total_questions=$row['total_questions']+1;
            $update_qpaper="UPDATE question_paper set question_ids='$question_ids',qpaper_total_weightage='$qpaper_total_weightage',total_questions='$total_questions' where qpaper_ID='$qpaper_id'";   
            $query=mysqli_query($this->con,$update_qpaper);
        }elseif($q_status==1){
            $qpaper_total_weightage=$row['qpaper_total_weightage']-$q_oldMark;
            $qpaper_total_weightage=$qpaper_total_weightage+$mark;
            $update_qpaper="UPDATE question_paper set qpaper_total_weightage='$qpaper_total_weightage' where qpaper_ID='$qpaper_id'";   
            $query=mysqli_query($this->con,$update_qpaper);
        }
        
        return $data;
    }
    public function question4edit($q_id){
        $query="SELECT * from questions WHERE q_id='$q_id' ";
        $result= mysqli_query($this->con,$query);
        $row=mysqli_fetch_assoc($result);
        // print_r($row);exit;
        return $row;
    }

    public function questionstatus($q_id,$cur_status,$mark,$qpaper_id){

        $query="SELECT question_ids,qpaper_total_weightage,total_questions FROM `question_paper` where qpaper_ID= '$qpaper_id'";
        $resultq= mysqli_query($this->con,$query);
        $row=mysqli_fetch_assoc($resultq);
        $qids=$row['question_ids'];
        $qpaper_total_weightage=$row['qpaper_total_weightage'];
        // echo $qids;exit;
        if($cur_status==0){
            $question_status=1;
            $msg="Activated";
            if($qids!="")
                $question_ids=$qids.",".$q_id;
            else
                $question_ids=$q_id;
            $qpaper_total_weightage=$qpaper_total_weightage+$mark;
            $total_questions=$row['total_questions']+1;

        }
        else{
            $question_status=0;
            $msg="Deactivated";
            $qidArray=explode(",", $qids);
            $key=array_search($q_id, $qidArray);
            unset($qidArray[$key]);
            array_values ( $qidArray ) ;
            $question_ids=implode(",", $qidArray);
            $qpaper_total_weightage=$qpaper_total_weightage-$mark;
            $total_questions=$row['total_questions']-1;
        }
        $query="UPDATE questions SET question_status='$question_status' WHERE q_id='$q_id' ";
        if(mysqli_query($this->con,$query)){
            $result['status']=1;
            $result['msg']="Successfully ".$msg;
        }else
            $result['status']=0;
        mysqli_query($this->con,"UPDATE question_paper set question_ids='$question_ids',qpaper_total_weightage='$qpaper_total_weightage',total_questions='$total_questions' where qpaper_ID='$qpaper_id'");
        return $result;
    }
    public function logout(){
        // session_unset();
        // if(session_destroy())
        //     return 1;
        // else
        //     return 0;
        $_SESSION = array();

// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finally, destroy the session.
if(session_destroy())
            return 1;
        else
            return 0;
    }
    public function view_resultRank($rankid,$qpaper_ID){
        $query="SELECT r.rank,c.name,a.tot_score_obtained,a.max_score,a.qids,r.stud_id,r.answerid,q.qpaper_name,(SELECT count(q_paper_id) FROM rank where q_paper_id=$qpaper_ID) as totcount from rank r LEFT JOIN candidates c ON r.stud_id=c.uid LEFT JOIN answers a ON a.answerid=r.answerid LEFT JOIN question_paper q ON q.qpaper_ID=r.q_paper_id where r.rank_id=$rankid";
        // echo $query;exit;
        $result= mysqli_query($this->con,$query);
        $row=mysqli_fetch_assoc($result);
        // print_r($row);exit;
        $answerid=$row['answerid'];
    // echo $row['qids'];exit;
        $arrayqids=explode(",",$row['qids']);
        $qcondition="(";
        foreach ($arrayqids as $value) {
            // print_r($arrayqids);exit;
            $qcondition.=" `qid`=$value OR";
        }
        // echo $qcondition;exit;
        $qcondition=rtrim($qcondition,"OR");
        $qcondition=$qcondition.")";
        // echo $qcondition;exit;
        $qresQuery="SELECT q.q_id,q.question,q.option1,q.option2,q.option3,q.option4,a.answer,a.correctans FROM `answer_details` a LEFT JOIN questions q ON a.qid=q.q_id WHERE answerid=$answerid AND $qcondition";
        // echo $qresQuery;exit;
        $result= mysqli_query($this->con,$qresQuery);
        while ($data=mysqli_fetch_assoc($result)){
            $row["question"][$data['q_id']]['question']=$data['question'];
            $row["question"][$data['q_id']]['option1']=$data['option1'];
            $row["question"][$data['q_id']]['option2']=$data['option2'];
            $row["question"][$data['q_id']]['option3']=$data['option3'];
            $row["question"][$data['q_id']]['option4']=$data['option4'];
            $row["question"][$data['q_id']]['answer']=$data['answer'];
            $row["question"][$data['q_id']]['correctans']=$data['correctans'];

        }

        // print_r($row);exit;
        return $row;
    }
    ////////////// Question paper Add/edit////////////////
    public function saveQpaper($data){
        $q_id=$data['qpaper_ID'];
        $qpaper_name=$data['qpaper_name'];
        $mock_instruction=$data['mock_instruction'];
        $total_time_of_exam=$data['total_time_of_exam'];
        $created_user_id=$_SESSION['uid'];
        $created_date=date("Y-m-d h:i:s");
        if($q_id!=""){
            $beforupdate="SELECT question_ids,qpaper_total_weightage=$row,total_questions FROM `question_paper` WHERE `qpaper_ID`='$q_id' ";
        $resultq= mysqli_query($this->con,$beforupdate);
        $row=mysqli_fetch_assoc($resultq);
        $question_ids=$row['question_ids'];
        $qpaper_total_weightage=$row['qpaper_total_weightage'];
        $total_questions=$row['total_questions'];
            $query="UPDATE `question_paper` set `qpaper_name`='$qpaper_name',`mock_instruction`='$mock_instruction',`total_time_of_exam`='$total_time_of_exam' WHERE `qpaper_ID`='$q_id' ";
            mysqli_query($this->con,$query);
            // echo $query;exit;
            $queryHistory="INSERT INTO `question_paper_history` (`qpaper_id`,`qpaper_name`,`question_ids`, `qpaper_total_weightage`,`mock_instruction`, `total_time_of_exam`,`total_questions`,`created_user`, `created_date`) VALUES ('$q_id','$qpaper_name','$question_ids', '$qpaper_total_weightage','$mock_instruction', '$total_time_of_exam', '$total_questions','$created_user_id', '$created_date');";
            if(mysqli_query($this->con,$queryHistory)){
                $result["status"]=1;
                $_SESSION['msg']="Question Updated Successfully";
            }else{
                $result["status"]=0;
                $_SESSION['msg']="Failed to update question";
            }
        }else{
            $query="INSERT INTO `question_paper` (`qpaper_name`, `mock_instruction`, `total_time_of_exam`,`created_user_id`, `created_date`) VALUES ('$qpaper_name', '$mock_instruction', '$total_time_of_exam', '$created_user_id', '$created_date');";
            mysqli_query($this->con,$query);
            if ( isset($_FILES["questioncsv"])) {
                $filename=$_FILES["questioncsv"]["tmp_name"];
                if (($handle = fopen($filename, "r")) !== FALSE) {
                $flag = true;
                $questQuery="INSERT INTO `questions`(qpaper_id,question,option1,desc1,option2,desc2,option3,desc3,option4,desc4,answer,mark,negative_score) VALUES ";
                mysqli_query($this->con,$questQuery);
                $qpaper_id=mysqli_insert_id($this->con);
                $countrow=0;
                $totmark=0;
                    while (($filedata = fgetcsv($handle, 10000, ",")) !== FALSE) {
                       if($flag) { $flag = false; continue; }
                       else {
                        $countrow++;
                        $totmark=$totmark+$filedata[10];
                           $num = count($filedata);
                           $questQuery .="($qpaper_id,";
                           for ($c = 0; $c < $num; $c++) {
                               if (!empty($filedata[0]) && $c<=11) {
                                // if($c==0){
                                    $questVar= mysqli_real_escape_string($this->con,$filedata[$c]);
                                    $questQuery .= "'" . $questVar . "',";
                                // }
                                // else
                                //    $questQuery .= "'" . $filedata[$c] . "',";
                                   
                               } else {
                                   return;
                               }

                           }
                           $questQuery=rtrim($questQuery,",");
                           $questQuery.="),";
                       }
                   }
                   $questQuery=rtrim($questQuery,",");
                   // echo $questQuery;exit;
                   mysqli_query($this->con,$questQuery);
                   $ids="";
                   for($i=0; $i<$countrow;$i++){
                        $ids.= mysqli_insert_id($this->con)+$i.",";
                        
                   }
                }
            }  
            // exit;
            $ids=rtrim($ids,",");
            $queryUpdate="UPDATE `question_paper` set `question_ids`='$ids',`qpaper_total_weightage`='$totmark',`total_questions`='$countrow' WHERE `qpaper_ID`='$qpaper_id' ";
            mysqli_query($this->con,$queryUpdate);
            $queryHistory="INSERT INTO `question_paper_history` (`qpaper_id`,`qpaper_name`,`question_ids`, `qpaper_total_weightage`,`mock_instruction`, `total_time_of_exam`,`total_questions`,`created_user`, `created_date`) VALUES ('$qpaper_id','$qpaper_name','$ids', '$totmark','$mock_instruction', '$total_time_of_exam', '$countrow','$created_user_id', '$created_date');";
            // echo $queryHistory;exit;
            if(mysqli_query($this->con,$queryHistory)){
                $result["status"]=1;
                $result["msg"]="Question Paper saved Successfully";
                $_SESSION['msg']="Question Paper saved Successfully";
                    }else{
                $result["status"]=0;
                $result["msg"]="Failed to save question paper";
                $_SESSION['msg']="Failed to save question paper";
            }
        }
        return $result;
    }
    ///////////////// End of qpaper add/edit/////////////
    //////////////////// View All Qpaper //////////////////////////
    public function getAllQpaper(){
        // print_r($_SESSION);
        $query="SELECT * from question_paper ORDER BY qpaper_ID DESC";
        // echo $query;exit;
        $result= mysqli_query($this->con,$query);
        while ($row=mysqli_fetch_assoc($result)){
            $data[]=$row;
        }
        // print_r($data);exit;
        return $data;
    }
    public function qPaperstatus($qpaer_id,$cur_status){
        // $flag=1;
        if($cur_status==0){
            $question_status=1;
            $msg="Activated";
            // $questions="SELECT SUM(mark) as totmark, COUNT(q_id) as totques FROM `questions` WHERE qpaper_id=$qpaer_id and question_status=1";
            // $resultq= mysqli_query($this->con,$questions);
            // $row=mysqli_fetch_assoc($resultq);
            // $totmark=$row['totmark'];
            // $totques=$row['totques'];

            // $q_qpaper="SELECT total_questions, qpaper_total_weightage FROM `question_paper` WHERE qpaper_id=$qpaer_id";
            // $resultq= mysqli_query($this->con,$q_qpaper);
            // $row=mysqli_fetch_assoc($resultq);
            // $total_questions=$row['total_questions'];
            // $qpaper_total_weightage=$row['qpaper_total_weightage'];
            // if($total_questions==$totques && $totmark==$qpaper_total_weightage){
            //     $flag=1;
            // }
            // else{
            //     $flag=0;
            //     $result['status']=0;
            //     $result['msg']="Mismatch in question";
            //     return $result;exit;
            // }
        }
        else{
            $question_status=0;
            $msg="Deactivated";
        }
        // if($flag==1){
        $query="UPDATE question_paper_history SET qpaper_status='$question_status' WHERE qpaper_ID='$qpaer_id' ";
        mysqli_query($this->con,$query);
        $query="UPDATE question_paper SET qpaper_status='$question_status' WHERE qpaper_ID='$qpaer_id' ";
        if(mysqli_query($this->con,$query)){
            $result['status']=1;
            $result['msg']="Successfully ".$msg;
        }else
            $result['status']=0;
        // }
        return $result;
    }
    public function qPaper4edit($qPaper_id){
        $query="SELECT * from question_paper WHERE qpaper_ID='$qPaper_id' ";
        $result= mysqli_query($this->con,$query);
        $row=mysqli_fetch_assoc($result);
        // print_r($row);exit;
        return $row;
    }
    public function getQpaperQuestions($qpaper_ID){
        $query="SELECT * from questions where qpaper_ID='$qpaper_ID' ORDER BY q_id DESC";
        // echo $query;exit;
        $result= mysqli_query($this->con,$query);
        while ($row=mysqli_fetch_assoc($result)){
            $data['question']['q_id'.$row['q_id']]['question']=$row['question'];
            $data['question']['q_id'.$row['q_id']]['option1']=$row['option1'];
            $data['question']['q_id'.$row['q_id']]['option2']=$row['option2'];
            $data['question']['q_id'.$row['q_id']]['option3']=$row['option3'];
            $data['question']['q_id'.$row['q_id']]['option4']=$row['option4'];
            $data['question']['q_id'.$row['q_id']]['answer']=$row['answer'];
            $data['question']['q_id'.$row['q_id']]['mark']=$row['mark'];
            $data['question']['q_id'.$row['q_id']]['negative_score']=$row['negative_score'];
            $data['question']['q_id'.$row['q_id']]['q_id']=$row['q_id'];
            $data['question']['q_id'.$row['q_id']]['question_status']=$row['question_status'];
        }
        $query="SELECT * from question_paper WHERE qpaper_ID='$qpaper_ID' ";
        $result= mysqli_query($this->con,$query);
        $row=mysqli_fetch_assoc($result);
        $data['qpaper']['name']=$row['qpaper_name'];
        $data['qpaper']['instruction']=$row['mock_instruction'];
        $data['qpaper']['totactivequestions']=$row['total_questions'];
        $data['qpaper']['mark']=$row['qpaper_total_weightage'];
        return $data;
    }
}  
?>  