<?php
$server="localhost";
$user="root";
$password="";
$database="dcsdb";
$conn=mysqli_connect($server,$user,$password,$database);
$error = "";
if (isset($_POST['student-request'])) {
session_start();
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
                $_SESSION['profile'] = $_FILES['profile']['tmp_name'];
                $_SESSION['userName'] = $name;
                $_SESSION['mail'] = $mail;
                $_SESSION['course'] = $_POST['course'];
                $_SESSION['semester'] = $_POST['semester'];
                $_SESSION['address'] =  $_POST['address'];
                $_SESSION['batch'] = $_POST['batch'];
                $_SESSION['password'] = $password;
                $_SESSION['sent-otp'] = rand(11111, 99999);
                $message = "Your/One/Time/Password/is/".$_SESSION['sent-otp']."/to/Request/for/Registration";
                exec("C:\Users\anshy\AppData\Local\Programs\Python\Python311\python.exe mail.py $mail $message");
                header("Location:./../../otp.php");
            } else {
                $error = " <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                    <button type=\"button\" class=\"btn-close \" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    ERROR: Password and confirm password are not same <br>TRY AGAIN
                    </div>";
            }
        } else {
            header("Location:./../../sign-up.php");
            $error = "
                    <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                    <button type=\"button\" class=\"btn-close \" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    ERROR: User another E-Mail or User Name <br>TRY AGAIN
                    </div>";
        }
    } else {
            header("Location:./../../sign-up.php");
        echo $error = " <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
    <button type=\"button\" class=\"btn-close \" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    ERROR: Connection Problem  <br>TRY AGAIN
    </div>";
    }
}
?>