<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: sign_in.php");
    exit();
}
?>
<?php
    include "include/connection/db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="include/css/bootstrap.min.css"><!-- // @audit-info : bootstrap -->
<link rel="stylesheet" href="./include/css/style.css">
</head>

<body>
    <?php include './include/header.php';?>
   
<div class="container mt-5 py-5">
        <h1>Feedbacks:</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Name:</th>
                    <th>Email:</th>
                    <th>Phone:</th>
                    <th>Message:</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
<?php
                     $query = "SELECT * FROM `feedback`";
  
  // FETCHING DATA FROM DATABASE
  $result = $conn->query($query);
  
    if ($result->num_rows > 0) 
    {
        // OUTPUT DATA OF EACH ROW
        while($row = $result->fetch_assoc())
        {
            $feedback_id=$row["feedback_id"];
            $name=$row["name"];
            $email=$row["email"];
            $phone=$row["phone"];
            $message=$row["message"];
           
         ?>                <tr>
                    <td><?php echo $name;?></td>
                    <td><?php echo $email;?></td>
                    <td><?php echo $phone;?></td>
                    <td><?php echo $message;?></td>
                    <td>
                        <button id="delete-<?php echo $feedback_id;?>" class="delete-feedback-btn btn btn-primary">Delete</button>
                    </td>
                </tr>
            <?php
        }
    }
    else{
?>
            <h3>No questions found</h3>
    <?php
        }
            ?>
            </tbody>
        </table>
        
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script> 
    <script src="include/js/bootstrap.bundle.min.js"></script>
    <script>      
        // delete question
        $(".delete-feedback-btn").on("click",function(){
            var feedback_id=this.id.slice(7);
            $.ajax({
                type: "post",
                url: "delete_feedback.php",
                data: {feedback_id: feedback_id},
                success: function(response) {
                    alert("Feedback deleted");
                    location.reload();
                }
            });
        });
    </script>
</body>
</html>