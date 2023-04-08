<?php
$server="localhost";
$user="root";
$password="";
$database="dcsdb";

$conn=mysqli_connect($server,$user,$password,$database);
$error = "";
if (isset($_POST['student-request'])) {
    $password = $_POST['password'];
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $query = "SELECT user_name,user_email FROM user";
    $result = $conn->query($query);
    $bool = true;
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $userName = $row["user_name"];
            $userMail = $row["user_email"];
            if ($userName == $name || $userMail == $mail) {
                $bool = false;
            }
        }
        if ($bool == true) {
            if ($password === $_POST['confirm_password']) {
                session_start();
                $_SESSION['profile'] = $_FILES['profile']['tmp_name'];
                $_SESSION['userName'] = $name;
                $_SESSION['mail'] = $mail;
                $_SESSION['course'] = $_POST['course'];
                $_SESSION['semester'] = $_POST['semester'];
                $_SESSION['address'] =  $_POST['address'];
                $_SESSION['batch'] = $_POST['batch'];
                $_SESSION['password'] = $password;
                $_SESSION['sent-otp'] = rand(11111, 99999);
                $message = "Your One Time Password is " . $_SESSION['sent-otp'] . " to Request for Registration";
                $output = exec("mail.py $mail $message");
                if ($output == "true") {
                    header("Location:./../otp.php");
                    if (isset($_POST['submit-otp'])) {
                        if ($_POST['verified-otp'] === $_SESSION['sent-otp']) {
                            $location = "./image/students/";
                            $profile  = $_SESSION['profile'];
                            $userName = $_SESSION['userName'];
                            move_uploaded_file($profile,$location.$userName);
                            $profile = $location.$userName;
                            $mail   = $_SESSION['mail'];
                            $course  = $_SESSION['course'];
                            $semester = $_SESSION['semester'];
                            $address  = $_SESSION['address'];
                            $batch  = $_SESSION['batch'];
                            $password = $_SESSION['password'];
                            $sql = "CALL insert_student( $profile,$name,$mail,$password,$course,$batch,$sem,$address)";
                            $result = $conn->query($sql);
                            $error = " <div class=\"alert alert-primary alert-dismissible fade show\" role=\"alert\">
                    <button type=\"button\" class=\"btn-close \" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    ERROR: You have Requested for Registration in <b>course:<b/>$course
                    </div>";
                        }
                    }
                }
            } else {
                $error = " <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                    <button type=\"button\" class=\"btn-close \" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    ERROR: Password and confirm password are not same <br>TRY AGAIN
                    </div>";
            }
        } else {
            $error = " <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                    <button type=\"button\" class=\"btn-close \" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    ERROR: User another E-Mail or User Name <br>TRY AGAIN
                    </div>";
        }
    } else {
        echo $error = " <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
    <button type=\"button\" class=\"btn-close \" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    ERROR: Connection Problem  <br>TRY AGAIN
    </div>";
    }
}
