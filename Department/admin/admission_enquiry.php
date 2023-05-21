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
        <h1>Enquiries:</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Name:</th>
                    <th>Email:</th>
                    <th>Phone:</th>
                    <th>Course:</th>
                    <th>Subject:</th>
                    <th>Message:</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
<?php
                     $query = "SELECT a.admission_enquiry_id,a.name,a.email,a.phone,c.course_name,a.subject,a.message FROM `admission_enquiry` a INNER JOIN course c ON c.course_id=a.course_id";
  
  // FETCHING DATA FROM DATABASE
  $result = $conn->query($query);
  
    if ($result->num_rows > 0) 
    {
        // OUTPUT DATA OF EACH ROW
        while($row = $result->fetch_assoc())
        {
            $admission_enquiry_id=$row["admission_enquiry_id"];
            $name=$row["name"];
            $email=$row["email"];
            $phone=$row["phone"];
            $course=$row["course_name"];
            $subject=$row["subject"];
            $message=$row["message"];
           
         ?>                <tr>
                    <td><?php echo $name;?></td>
                    <td><?php echo $email;?></td>
                    <td><?php echo $phone;?></td>
                    <td><?php echo $course;?></td>
                    <td><?php echo $subject;?></td>
                    <td><?php echo $message;?></td>
                    <td>
                        <button id="delete-<?php echo $admission_enquiry_id;?>" class="delete-enquiry-btn btn btn-primary">Delete</button>
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
    <footer class="border border-1">
        <h3>Footer</h3>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script> 
    <script src="include/js/bootstrap.bundle.min.js"></script>
    <script>      
        // delete question
        $(".delete-enquiry-btn").on("click",function(){
            var admission_enquiry_id=this.id.slice(7);
            $.ajax({
                type: "post",
                url: "delete_enquiry.php",
                data: {admission_enquiry_id: admission_enquiry_id},
                success: function(response) {
                    alert("Enquiry deleted");
                    location.reload();
                }
            });
        });
    </script>
</body>
</html>