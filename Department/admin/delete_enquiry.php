<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: sign_in.php");
    exit();
}
?>
<?php
    include "include/connection/db.php";
    if (isset($_POST["admission_enquiry_id"])) {
        $admission_enquiry_id = $_POST["admission_enquiry_id"];        
        if(mysqli_query($conn, "DELETE FROM `admission_enquiry` WHERE `admission_enquiry_id` = $admission_enquiry_id")){
            echo "success";
        }
        else
        {
            echo "fail";
        }
}
?>