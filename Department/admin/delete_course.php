<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: sign_in.php");
    exit();
}
?>
<?php
    include "include/connection/db.php";
    if (isset($_POST["course_id"])) {
        $course_id = $_POST["course_id"];        
        if(mysqli_query($conn, "DELETE FROM `course` WHERE `course_id` = $course_id")){
            echo "success";
            
        }
        else
        {
            echo "fail";
        }
}
?>