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
                        <button id="edit-<?php echo $tmp_question_id;?>" class="edit-question-btn btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">Add</button>
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
        <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add question</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <label id="add-que-label" for="" class="form-label"></label><br>
        <label for="" class="form-label">Answer</label>
        <textarea name="" id="add-que-ans" rows="3" class="form-control"></textarea>
        <label for="" class="form-label">Type</label>        
        <select name="" class="form-select" id="add-que-type">
            <option value="text">text</option>
            <option value="query">query</option>
        </select>
        <input type="text" id="add-que-tmpid" hidden>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" id="add-question-btn" data-bs-dismiss="modal" class="btn btn-primary">Add</button>
      </div>
    </div>
  </div>
</div>
    </div>
    <footer class="border border-1">
        <h3>Footer</h3>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="include/js/bootstrap.bundle.min.js"></script>
    <script>
        
        $("#add-question-btn").on("click",function(){
            var question=$("#add-que-label").text().replace("Question:","");
            var answer=$("#add-que-ans").val();
            var type=$("#add-que-type").val();
            var tmpid=$("#add-que-tmpid").val();
            
            $.ajax({
                type: "post",
                url: "add_question.php",
                data: {question: question,answer:answer,type:type,tmpid:tmpid},
                success: function(response) { 
                    alert("Question added");
                    location.reload();
                }
            });
            
        });
        $(".edit-question-btn").on("click",function(){
            var question=this.parentElement.parentElement.cells[0].innerHTML;
            $("#add-que-label").text("Question:"+question);            
            var id=this.id.slice(5);
            $("#add-que-tmpid").val(id);            
        });
        // delete question
        $(".delete-question-btn").on("click",function(){
            var tmp_question_id=this.id.slice(7);
            $.ajax({
                type: "post",
                url: "delete_question.php",
                data: {tmp_question_id: tmp_question_id},
                success: function(response) {
                    alert("Question deleted");
                    location.reload();
                }
            });
        });
    </script>
</body>
</html>