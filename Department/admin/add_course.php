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
        <h1>Add Course:</h1>
         <form method="post" enctype="multipart/form-data">>
                <div class="py-2">
                    <label for="course_name" class="form-label">Course Name:</label>
                    <input type="text" name="course_name" id="course_name" class="form-control" placeholder="Enter course name here" required>                    
                </div>
                <div class="py-2">
                    <label for="course_details" class="form-label">Course Details:</label>
                    <textarea placeholder="Course Details" name="course_details" id="course_details" class="form-control" rows="5" required></textarea>
                </div>
                <div class="py-2">
                    <label for="course_document" class="form-label">Course syllabus:</label>
                    <input type="file" name="course_document" id="course_document" class="form-control" placeholder="Enter your number here" required>                    
                </div>
                 <div class="py-2">
                    <label for="course_image" class="form-label">Course image:</label>
                    <input type="file" name="course_image" id="course_image" class="form-control" placeholder="Enter your number here" required>                    
                </div>
                <div class="py-2">
                   <input name="submit" type="submit" value="Submit" class="btn btn-primary">
                </div>
            </form>
       
        
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