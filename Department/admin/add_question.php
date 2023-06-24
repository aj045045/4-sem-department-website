<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: sign_in.php");
    exit();
}
?>
<?php
    include "include/connection/db.php";
    echo "hi";
    if (isset($_POST["tmpid"])) {
        $tmp_question_id = $_POST["tmpid"];
        $question = $_POST["question"];
        $answer = $_POST["answer"];
        $type = $_POST["type"];
        if(mysqli_query($conn, "DELETE FROM `tmp_questions` WHERE `tmp_questions`.`tmp_question_id` = $tmp_question_id")){
        if(mysqli_query($conn, "INSERT INTO `question` (`question_id`, `question`, `answer`, `type`) VALUES (NULL, '$question', '$answer', '$type');")){
            echo "success";                
            }
            else{
                echo "fali";
            }
        }
        else
        {
            echo "fali";
        }
    }
?>