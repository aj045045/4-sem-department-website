<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: sign_in.php");
    exit();
}
?>
<?php
    include "include/connection/db.php";
    if (isset($_POST["tmp_question_id"])) {
        $tmp_question_id = $_POST["tmp_question_id"];
        
        if(mysqli_query($conn, "DELETE FROM `tmp_questions` WHERE `tmp_questions`.`tmp_question_id` = $tmp_question_id")){
            echo "success";
        }
        else
        {
            echo "fail";
        }
}
?>