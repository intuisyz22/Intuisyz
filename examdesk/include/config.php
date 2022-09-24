<?php  
if(!isset($_SESSION))  { 
      session_start(); 
  } 
    define("DB_HOST", 'localhost');  
    define("DB_USER", 'intuisyc_examdes');  
    define("DB_PASSWORD", 'T-nsk;sey$mS');  
    define("DB_DATABSE", 'intuisyc_examdesk'); 
    define("BASE_URL", '/examdesk/');
    date_default_timezone_set("Asia/Bangkok");
    define("TECO_ADMIN_MAIL", 'vidya.intuisyz@gmail.com'); 
    // define('ONESIGNAL_APP_ID','1473c4e1-92e3-4a0f-932c-bcf9d19b9998');
    // define('REST_API_KEY','MDRiNjI4MmItMWU0Mi00OTc4LWExZWUtYTUzOWFiM2U1ODgz');
    class DbConnect {  
        function __construct() {   

        }  
        public function close(){  
            mysql_close();  
        }
        public function connect() {
             $con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD,DB_DATABSE) or die("Connection failed: " . mysqli_connect_error());
             mysqli_set_charset($con,"utf8");
            if (mysqli_connect_errno()) {
                printf("Connect failed: %s\n", mysqli_connect_error());
                exit();
            } 
            return $con;  
        }  
    } 
?> 