<?php  

include_once('adminFunction.php');
// header('Access-Control-Allow-Origin: *');
       
    $adminObj = new AdminFunction();
// echo "hiii ".$_POST['type'];
if($_SERVER["REQUEST_METHOD"] == "POST"){


///////////////////////////Candidate Rank///////////////////////////////////
	if($_POST['type'] == "getCandidate_rank"){ 
        $result = $adminObj->getCandidate_rank();
        echo json_encode($result);
    }
///////////////////////////Candidate Rank END///////////////////////////////////
///////////////////////////Questions///////////////////////////////////    
    elseif($_POST['type'] == "getAllQuestions"){ 
        $result = $adminObj->getAllQuestions();
        // print_r($result);exit;
        echo json_encode($result);
    }elseif($_POST['type'] == "saveQuestion"){ 
        $result = $adminObj->saveQuestions($_POST);
        header("location:qpaper_question.php?id=".$result['qpaper_ID']);
        // if($_POST['q_id']!=""){
        //     header("location:qpaper_question.php?id=".$result['qpaper_ID']);
        // }else{
        //     header('Location: '.BASE_URL.'admin/question.php');
        //     echo `<html><script type="text/javascript">alert(`.$result['msg'].`);window.location.href="`.BASE_URL.`admin/question.php";</script></html>`;
        // }
    }elseif($_POST['type'] == "question4edit"){ 
        $result = $adminObj->question4edit($_POST['q_id']);
        echo json_encode($result);
    }elseif($_POST['type'] == "questionstatus"){ 
        $result = $adminObj->questionstatus($_POST['q_id'],$_POST['cur_status'],$_POST['mark'],$_POST['qpaper_id']);
        echo json_encode($result);
    }
    elseif($_POST['type'] == "logout"){ 
        // echo "logout";exit;
        $result=$adminObj->logout();
        echo $result;
    }
    elseif($_POST['type'] == "viewResult"){ 
        $result = $adminObj->view_resultRank($_POST['rankid'],$_POST['qpaper_ID']);
        echo json_encode($result);
    }
///////////////////////////Questions END///////////////////////////////////
///////////////////////////Question Paper///////////////////////////////////
    elseif($_POST['type'] == "saveQpaper"){ 
        // echo "save qpaper";exit;
        $result = $adminObj->saveQpaper($_POST);
        echo "<script type='text/javascript'>alert('".$result['msg']."');window.location.href='qpaper_view.php';</script>";exit;
        // echo `<script type="text/javascript">window.location.href="qpaper_view.php";</script></html>`;exit;
        // $result["msg"];
        // if($_POST['qpaper_ID']!=""){
        //     // header("location:qpaper_view.php");exit;
        // }else{
        //     header('Location: '.BASE_URL.'admin/qpaper.php');
        //     echo `<script type="text/javascript">window.location.href="`.BASE_URL.`admin/qpaper_view.php";</script></html>`;exit;
        // }
    }elseif($_POST['type'] == "getAllQuestionPaper"){ 
        $result = $adminObj->getAllQpaper();
        // print_r($result);exit;
        echo json_encode($result);
    }elseif($_POST['type'] == "qPaperstatus"){ 
        $result = $adminObj->qPaperstatus($_POST['qpaper_id'],$_POST['cur_status']);
        echo json_encode($result);
    }elseif($_POST['type'] == "qPaper4edit"){ 
        $result = $adminObj->qPaper4edit($_POST['q_id']);
        echo json_encode($result);
    }
    ///////////////////////Question in question paper
    elseif($_POST['type'] == "getQpaperQuestions"){ 
        $result = $adminObj->getQpaperQuestions($_POST['qpaper_ID']);
        // print_r($result);exit;
        echo json_encode($result);
    }
}  
?>  