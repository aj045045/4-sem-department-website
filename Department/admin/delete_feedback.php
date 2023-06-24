<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: sign_in.php");
    exit();
}
?>
<?php
    include "include/connection/db.php";
    if (isset($_POST["feedback_id"])) {
        $feedback_id = $_POST["feedback_id"];        
        if(mysqli_query($conn, "DELETE FROM `feedback` WHERE `feedback_id` = $feedback_id")){
            echo "success";
        }
        else
        {
            echo "fail";
        }
}
?>