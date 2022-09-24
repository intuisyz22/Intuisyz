<?php  

include_once('MockExamFunction.php');
// header('Access-Control-Allow-Origin: *');
       
    $examObj = new MockExamFunction();

if($_SERVER["REQUEST_METHOD"] == "POST"){


///////////////////////////Questions///////////////////////////////////

    if($_POST['type'] == "get_questions"){  
        $examQuestions = $examObj->getExamQuestions($_POST);
        
        echo json_encode($examQuestions);
    }



///////////////////////////Questions END///////////////////////////////////


}  
?>  