<?php  
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


///////////////////////////chat  START///////////////////////////////////

public function getExamQuestions($data){
    $query = "SELECT * FROM questions";
    $res = mysqli_query($this->con,$query);  
    $data = []; 
    while($row = mysqli_fetch_array($res)) {
        $data[] = $row;
    }
    return $data;          
}


    
///////////////////////////chat  END/////////////////////////////////// 



    }  
?>  