<?php
$error="";
    if (isset($_POST['student-request']))
    {
        $profile = $_FILES['tmp_name']['profile'];
        $userName = $_POST['name'];
        $mail = $_POST['mail'];
        $course = $_POST['course'];
        $semester = $_POST['semester'];
        $address = $_POST['address'];
        $batch = $_POST['batch'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        if($password === $confirm_password)
        {
            session_start();
            $_SESSION['profile']=$profile;
            $_SESSION['userName'] =$userName;
            $_SESSION['mail'] = $mail;
            $_SESSION['course'] = $course;
            $_SESSION['semester'] = $semester;
            $_SESSION['address'] = $address;
            $_SESSION['batch'] = $batch;
            $_SESSION['password'] = $password    ;            
            header("Location:./../otp.php");
        }
        else{
            $error = " <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                    <button type=\"button\" class=\"btn-close \" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    ERROR: Password and confirm password are not same <br>TRY AGAIN
                    </div>";
        }
    }
?>




