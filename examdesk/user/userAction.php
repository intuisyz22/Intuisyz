<?php  
ini_set('display_errors',1);
error_reporting(E_ALL);
include_once('userFunction.php');
// header('Access-Control-Allow-Origin: *');
       
    $usrObj = new UserFunction();

if($_SERVER["REQUEST_METHOD"] == "POST"){


///////////////////////////Candidate Registration///////////////////////////////////
	if($_POST['type'] == "candidate_register"){  
        // print_r($_POST);exit;
        $result = $usrObj->candidateReg($_POST);
        if($result['status']==1)
        
            header("Location: ".BASE_URL."exam/mock_exam_instructions.php?id=".$_POST['exam_id']);
        
        else{
            // header('Location: '.$_SERVER['REQUEST_URI']);
             echo "<script typet=text/javascript>alert('".$result['msg']."');window.location.href='".BASE_URL."user/candidatereg.php';</script>";
        }
        // echo $result['msg'];
        // echo BASE_URL."exam/mock_exam_instructions.php";
        // echo "<script type='text/javascript'>window.location.href=".</script>";
    }else if($_POST['type'] == "checkUniqMail"){  
        // echo "check mail";exit;
        $result = $usrObj->checkUniqMail($_POST['email']);
        echo json_encode($result);
    }else if($_POST['type']=="user_login"){
        // print_r($_POST);exit;
        $result=$usrObj -> userlogin($_POST);
    }elseif($_POST['type'] == "getActiveQuestionPaper"){ 
        $result = $usrObj->getActiveQpaper();
        // print_r($result);exit;
        echo json_encode($result);
    }

///////////////////////////Candidate Registration END///////////////////////////////////


}  
?>  