<?php
session_start();
    if (isset($_POST['submit-otp'])) {
        include "./links/include/db.php";
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

<body class="bg-gray-200 ">
    <?php include "links/include/header.php"; ?>
    <div class="w-4/5 px-3 mx-auto my-56 bg-white shadow-xl  sm:w-96 rounded-xl">
        <p class="pt-3 mx-5 text-3xl capitalize ">e-mail verification</p>
        <div class="flex flex-row"> <div class="mt-3 italic font-thin ">A One Time Password has been sent: <div class="font-semibold "> <?php echo $_SESSION['mail'];?></div></div></div>
        <form action="" method="post">
            <div class="px-10 mx-auto">
                <input type="number" name="verified-otp" class="w-full p-2 mt-4 text-sm border-gray-500 rounded-md border-1 focus:ring focus:outline-none focus:ring-offset-2 focus: ring-blue-300 " placeholder="Enter verification code"><br>
                <input type="submit" class="w-full my-3 text-white bg-blue-600 rounded-md focus:ring focus:outline-none focus:ring-blue-400 focus:ring-offset-1 " value="Submit" name="submit-otp">
            </div>
        </form>
    </div>
    <?php include "links/include/footer.php" ;
    ?>
</body>

</html>