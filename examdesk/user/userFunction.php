<?php  
ob_start();
require_once '../include/config.php';  

    class UserFunction {  
        public $con;     
        function __construct() {  
              
            // connecting to database  
            $db = new DbConnect(); 
            $this->con = $db->connect();
               
        }  
        // destructor  
        function __destruct() {  
              
        }  


///////////////////////////Candidate Reg START///////////////////////////////////
public function getActiveQpaper(){
        $query="SELECT * from question_paper where  qpaper_status=1 ORDER BY qpaper_ID DESC";
        // echo $query;exit;
        $result= mysqli_query($this->con,$query);
        $count_result=mysqli_num_rows($result);
        if($count_result==0){
            $data['status']=0;
            $data['msg']="Question Paper is not available to attend the exam";
        }else{
            $data['status']=1;
            while ($row=mysqli_fetch_assoc($result)){
                $data['data'][]=$row;
            }
        }
        // print_r($data);exit;
        return $data;
    }
public function candidateReg($data){
    $str = rand(); 
    $password = hash("sha256", $str); 
    $password=substr($password, 0,8);
    $email_id=$data['email_id'];
    $name=$data['name'];
    $last_name=$data['last_name'];
    $cur_company=$data['cur_company'];
    $desig=$data['desig'];
    $cur_ctc=$data['cur_ctc'];
    $expected_ctc=$data['expected_ctc'];
    $phno=$data['phno'];
    $house_name=$data['house_name'];
    $street=$data['street'];
    $city=$data['city'];
    $pincode=$data['pincode'];
    $state=$data['state'];
    $_SESSION['uname']=$email_id;
    $exam_id=$data['exam_id'];


    $login_query = "INSERT INTO login(uname,password,type) VALUES('$email_id','$password','2')";
    if(mysqli_query($this->con,$login_query)){
        $uid = mysqli_insert_id($this->con);
        $_SESSION['uid']=$uid;
        $_SESSION['name']=$name;
        $_SESSION['user_type']=2;
        $query = "INSERT INTO `candidates` (`exam_id`,`uid`, `name`, `last_name`, `cur_company`, `desig`, `cur_ctc`, `expected_ctc`, `phno`, `email_id`, `house_name`, `street`, `city`, `pincode`, `state`) VALUES ('$exam_id','$uid', '$name', '$last_name', '$cur_company', '$desig', '$cur_ctc', '$expected_ctc', '$phno', '$email_id', '$house_name', '$street', '$city', '$pincode', '$state');";
        if(mysqli_query($this->con,$query)){
            $result['msg']="You can Now Attend the Examination";
            $result['pageload']="candidatereg.php";
            $result['status']=1;
        }else{
            $result['msg']="Registration Failed.";
            $result['pageload']="candidatereg.php";
            $result['status']=0;
        }
    }else{
        $result['msg']="Registration Failed. Please try again";
        $result['pageload']="candidatereg.php";
        $result['status']=0;
    }
    return $result;
}
public function checkUniqMail($email_id){
    $query = "SELECT * FROM candidates where email_id='$email_id'";
    // echo $query;exit;
    $res = mysqli_query($this->con,$query); 
    $count = mysqli_num_rows($res);
    return $count;    
}


/*//////////////////////////Candidate Reg END/////////////////////////////////// 

////////////////////////////// User Login 
Created by: Vidya LV
On: 27/01/2020
////////////////////////////////////*/
public function userlogin($data){
    $uname = mysqli_real_escape_string($this->con,$data['email']);
    $pass = mysqli_real_escape_string($this->con,$data['password']);
    $query = "SELECT * FROM login WHERE uname='" . $uname . "' and password='" . $pass . "'";
    // echo $query;exit;
    $result=mysqli_query($this->con,$query);
    $count = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);
    $type=$row['type'];
    // echo $count;
    if ($count != 0) {
        // echo "success";exit;
        $_SESSION["msg"]="";
        $_SESSION['user_type']=$type;
        $_SESSION['email']=$row['uname'];
        $_SESSION['uid']=$row['id'];
        if($type==1){
            // header("location: ../admin/dashboard.php");
            header("location:".BASE_URL."/admin/dashboard.php");exit;
        }
        else{
                $checkenable = "SELECT l.*,c.name,c.exam_id FROM login l LEFT JOIN candidates c ON l.id=c.uid WHERE l.uname='" . $uname . "' and l.password='" . $pass . "' and l.status=1";
                // echo $checkenable;exit;
                $result=mysqli_query($this->con,$checkenable);
                $count = mysqli_num_rows($result);
                $row = mysqli_fetch_assoc($result);
                // print_r($row);exit;
                if($count==0){
                    $_SESSION["msg"]="Your account is disabled. Please contact admin";
                    header("location: index.php");
                }else{
                    $_SESSION['uid']=$row['id'];
                    $_SESSION['name']=$row['name'];
                    $exam_id=$row['exam_id'];
                    header("Location: ".BASE_URL."exam/mock_exam_instructions.php?id=".$exam_id);exit;
                }
        }
    }else{
        // echo "failed";exit;
        $_SESSION["msg"]="Invalid Username Or Password !";
        header("location:".BASE_URL."/user/index.php");exit;
        // return;
    }
}
////////////////////////////// User Login End /////////////////////////////////////




    }  
?>  