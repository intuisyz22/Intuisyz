<?php  

include_once('MockExamFunction.php');
// header('Access-Control-Allow-Origin: *');
$examObj = new MockExamFunction();

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION)){

/////////////////////////// Questions ///////////////////////////////////
    
	if($_POST['type'] == "get_questionPaper"){ 
        $examQuestionPaper = $examObj->getQuestionPaper($_POST['qpaer_id']);
        echo json_encode($examQuestionPaper);
    }else if($_POST['type'] == "get_questions"){  
        $examQuestions = $examObj->getExamQuestions($_POST['q_id']);
        echo json_encode($examQuestions);
    }else if($_POST['type'] == "submitMark"){
    	$result = $examObj->submitMark($_POST['data']);
        echo json_encode($result);
    }else if($_POST['type'] == "get_questionPaperHistory"){
        $result = $examObj->get_questionPaperHistory($_POST['qpaer_id']);
        echo $result;
    }

/////////////////////////// Questions END ///////////////////////////////////
}  
?>  