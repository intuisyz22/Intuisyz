<?php

if (isset($_POST['popsubmit']))
{

    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $subject="From Advertisement Affordable Enquiry";
    $comment=$_POST['comments'];

    $msg='You have a mail from : '.$name.', Contact No: '.$phone.' ,Suggested Website: '.$comment;

    $to="info@intuisyz.com";
    $headers = "From: " . strip_tags($email) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($email) . "\r\n";

    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";



    if(mail($to,$subject,$msg,$headers))

        /* {header('Location:advertisement.php?success=true');}*/
    {header('Location:advertisementpage2.php');}


}

?>
<div id="popup1" class="overlay">

    <div class="popup">
        <center>  <h4 style="">Please Fill The Form</h4></center>
        <a class="close" href="#">×</a>
        <div class="">
            <div class="clearfix">

                <div class="controls">
                    <div class="contact-form">

                        <form class="form-horizontal row-fluid"  method="post" onsubmit="return proceed1()">

                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                <input placeholder="Name" class="form-control" name="name" id="name"  type="text" style="border-radius: 0px;" >

                            </div>


                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">
                                <input placeholder="Phone Number" class="form-control" name="phone" id="phone" type="text" style="border-radius: 0px;" >
                                <p style="color: red" id="e5" class=""></p>
                            </div>
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">
                                <input placeholder="Suggest Your Reference Site" class="form-control" name="comments" id="phone" type="text" style="border-radius: 0px;" >
                            </div>

                            <div  class="wow fadeInDown form-group" data-wow-duration="500ms" data-wow-delay="1.4s">
                                <button  class="my" name="popsubmit" type="submit"  >Submit</button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<style type="text/css">
    .buttona {
        font-size: 0.8em;
        padding: 5px;
        color: #fff;
        border: 2px solid orange;
        border-radius: 20px/50px;
        text-decoration: none;
        cursor: pointer;
        transition: all 0.3s ease-out;

    }
    .button:hover {
        background: orange;
    }

    .overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.7);
       
        visibility: hidden;
        opacity: 0;
    }
    .overlay:target {
        visibility: visible;
        opacity: 1;
    }

    .popup {
        margin: 120px auto;
        padding: 30px;
        background: #fff;
        border-radius: 0px;
        width: 20%;
        position: relative;
        transition: all 5s ease-in-out;
        border:1px solid #555;
        z-index:999;
    }
    @media only screen
    and (max-width : 550px) {

        .popup {
            margin: 120px auto;
            padding: 50px;
            background: #fff;
            border-radius: 0px;
            width: 100%;
            position: relative;
            transition: all 5s ease-in-out;
        }
    }

    .popup h2 {
        margin-top: 0;
        color: #333;
        font-family: Tahoma, Arial, sans-serif;
    }
    .popup .close {
        position: absolute;
        top: 20px;
        right: 30px;
        transition: all 200ms;
        font-size: 30px;
        font-weight: bold;
        text-decoration: none;
        color: #333;
    }
    .popup .close:hover {
        color: orange;
    }
    .popup .content {
        max-height: 30%;
        overflow: auto;
    }


</style>