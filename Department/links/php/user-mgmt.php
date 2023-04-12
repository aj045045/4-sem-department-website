<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "dcsdb";
$conn = mysqli_connect($server, $user, $password, $database);

try {
    if (isset($_POST['student-request'])) {
        session_start();
        $password = $_POST['password'];
        $name = $_POST['name'];
        $mail = $_POST['mail'];
        if ($password === $_POST['confirm_password']) {
            if (isUserRegistered($name,$mail,$conn)) {
                $_SESSION['profile'] = $_FILES['profile']['tmp_name'];
                $_SESSION['userName'] = $name;
                $_SESSION['mail'] = $mail;
                $_SESSION['course'] = $_POST['course'];
                $_SESSION['semester'] = $_POST['semester'];
                $_SESSION['address'] =  $_POST['address'];
                $_SESSION['batch'] = $_POST['batch'];
                $_SESSION['password'] = $password;
                $_SESSION['sent-otp'] = rand(11111, 99999);
                $message = "Your/One/Time/Password/is/" . $_SESSION['sent-otp'] . "/to/Request/for/Registration";
                exec("C:\Users\anshy\AppData\Local\Programs\Python\Python311\python.exe mail.py $mail $message");
                header("Location:./../../otp.php");
            } else {
                throw new Exception("Use Another E-Mail or User Name");
            }
        } else {
            throw new Exception("Password and confirm password are not same");
        }
    }
} catch (Exception $err) {
        header("Location:./../../sign-up.php");
        echo " <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
        <button type=\"button\" class=\"btn-close \" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        ERROR: " . $err->getMessage() . " <br>TRY AGAIN
        </div>";
}

function isUserRegistered($name,$mail,$conn)
{
    $query = "SELECT user_name,user_email FROM user";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $userName = $row["user_name"];
            $userMail = $row["user_email"];
            if ($userName == $name || $userMail == $mail) {
                return false;
            }
        }
    } else {
        throw new Exception("Connection Problem ");
    }
    return true;
}
