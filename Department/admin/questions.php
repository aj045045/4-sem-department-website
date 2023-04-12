<?php
    include "include/connection/db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questions</title>
    <link rel="stylesheet" href="include/css/bootstrap.min.css"><!-- // @audit-info : bootstrap -->
</head>
<body>
    <header class="border border-1">
        <h3>Header</h3>
    </header>
    <div class="container">
        <h1>Questions:</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Question:</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
<?php
                     $query = "SELECT * FROM `tmp_questions`";
  
  // FETCHING DATA FROM DATABASE
  $result = $conn->query($query);
  
    if ($result->num_rows > 0) 
    {
        // OUTPUT DATA OF EACH ROW
        while($row = $result->fetch_assoc())
        {
            $tmp_question_id=$row["tmp_question_id"];
            $question=$row["question"];
           
         ?>                <tr>
                    <td><?php echo $question;?></td>
                    <td>
                        <button id="edit-<?php echo $tmp_question_id;?>" class="edit-question-btn btn btn-primary">Add</button>
                        <button id="delete-<?php echo $tmp_question_id;?>" class="delete-question-btn btn btn-primary">Delete</button>
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
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="include/js/bootstrap.bundle.min.js"></script>
    <script>
        $(".delete-question-btn").on("click",function(){
            var tmp_question_id=this.id.slice(7);
            $.ajax({
                type: "post",
                url: "delete_question.php",
                data: {
                    tmp_question_id: tmp_question_id
                },
                success: function(response) {
                    alert("Record deleted-");
                    location.reload();
                }
            });
        });
    </script>
</body>
</html>