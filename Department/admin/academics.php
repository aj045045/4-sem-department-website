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
</head>
<body>
    <header class="border border-1">
        <h3>Header</h3>
    </header>
    <div class="container">
        <h1>Courses:</h1>
        <br>
        <a href="add_course.php" class="btn btn-primary">Add Course</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>Course Name:</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
<?php
                     $query = "SELECT `course_id`,`course_name` FROM `course`";
  
  // FETCHING DATA FROM DATABASE
  $result = $conn->query($query);
  
    if ($result->num_rows > 0) 
    {
        // OUTPUT DATA OF EACH ROW
        while($row = $result->fetch_assoc())
        {
            $course_id=$row["course_id"];
            $course_name=$row["course_name"];           
         ?>              
         <tr>
                    <td><?php echo $course_name;?></td>
                    <td>
                        <button id="edit-<?php echo $tmp_question_id;?>" class="edit-question-btn btn btn-primary">Edit</button>
                        <button id="delete-<?php echo $feedback_id;?>" class="delete-feedback-btn btn btn-primary">Delete</button>
                    </td>
                </tr>
            <?php
        }
    }
    else{
?>
            <h3>No courses found</h3>
    <?php
        }
            ?>
            </tbody>
        </table>
        
    </div>
    <footer class="border border-1">
        <h3>Footer</h3>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
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