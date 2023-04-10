<?php
session_start();
    if (isset($_POST['submit-otp'])) {
        include "./links/include/db.php";
        echo "<br><br><br><br><br><br><br><br>";
        // print_r($_SESSION);
        $otp = $_SESSION['sent-otp'];
        if ( $otp == $_POST['verified-otp']) {
            $profile  = $_SESSION['profile'];
            $userName = $_SESSION['userName'];
            $location = "./image/students/".$userName.".png";
            move_uploaded_file($profile,$location);
            $mail = $_SESSION['mail'];
            $course  = $_SESSION['course'];
            $semester = $_SESSION['semester'];
            $address  = $_SESSION['address'];
            $batch  = $_SESSION['batch'];
            $password = $_SESSION['password'];
            $sql = "call insert_student('$location','$userName','$mail','$password','$course','$batch','$semester','$address')";
            $result = $conn->query($sql);
            $result;
            if($result == TRUE)
            {
                header("Location:./sign-in.php");
                $error = " <div class=\"alert alert-primary alert-dismissible fade show\" role=\"alert\">
                <button type=\"button\" class=\"btn-close \" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                ERROR: You have Requested for Registration in <b>course:<b/>$course
                </div>";
            }
            session_destroy();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>otp</title>
    <?php include "links/include/link.php"; ?>
</head>

<body class=" bg-gray-200">
    <?php include "links/include/header.php"; ?>
    <div class=" bg-white my-56 mx-auto sm:w-96 w-4/5 shadow-xl rounded-xl px-3">
        <p class=" capitalize mx-5 pt-3 text-3xl">e-mail verification</p>
        <div class="flex flex-row"> <div class=" italic  mt-3 font-thin">A One Time Password has been sent: <div class=" font-semibold"> <?php echo $_SESSION['mail'];?></div></div></div>
        <form action="" method="post">
            <div class="mx-auto px-10">
                <input type="number" name="verified-otp" class="border-1 border-gray-500 rounded-md mt-4 w-full p-2 text-sm focus:ring focus:outline-none focus:ring-offset-2 focus: ring-blue-300 " placeholder="Enter verification code"><br>
                <input type="submit" class="w-full bg-blue-600 rounded-md my-3 text-white focus:ring focus:outline-none focus:ring-blue-400 focus:ring-offset-1 " value="Submit" name="submit-otp">
            </div>
        </form>
    </div>
    <?php include "links/include/footer.php" ;
    ?>
</body>

</html>