<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: sign_in.php");
    exit();
}
?>
<?php
    include "include/connection/db.php";
    if (isset($_POST["award_id"])) {
        $award_id = $_POST["award_id"];        
        if(mysqli_query($conn, "DELETE FROM `achievement` WHERE `award_id` = $award_id")){
            echo "success";
        }
        else
        {
            echo "fail";
        }
}
?>