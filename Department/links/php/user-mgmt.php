<?php
    if (isset($_POST['student-request']))
    {
        $profile = $_POST['profile'];
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




