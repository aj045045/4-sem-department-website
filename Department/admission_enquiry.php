<?php 
include "links/include/db.php";
$query=false;
if (isset($_POST["message"])) {    
    $course_id =isset($_POST["course_id"])?$_POST["course_id"]:null;
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $query = mysqli_query($conn, "INSERT INTO `admission_enquiry` (`course_id`,`name`, `email`,`phone`,`subject`,`message`) VALUES ( '$course_id','$name', '$email','$phone','$subject','$message');");
}
?>
<!-- //  TODO: About page
-->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include "links/include/link.php" ?>
    <style>
    </style>
</head>

<body>
<script>
    <?php
    if($query==true){
        echo 'alert("Your Enquiry submitted successfully");';
        echo 'window.location.href = "home.php"';
    }
    ?>
</script>
    <!-- Scroll button -->
    <?php include "links/include/header.php" ?>
    <div style="padding-right:7%;padding-left:7%;">
        <br>
        <ul class="breadcrumb" style="padding-top:130px">
            <li><a href="home.php">Home</a></li>
            <li>Admission Enquiry</li>
        </ul>
        <div class="container">
            <div class="pill">Admission Enquiry</div>
            <br>
            <form method="post">
                <div class="py-2">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name here" required>                    
                </div>
                <div class="py-2">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email here" required>                    
                </div>
                <div class="py-2">
                    <label for="phone" class="form-label">Phone Number:</label>
                    <input type="number" name="phone" id="phone" class="form-control" placeholder="Enter your number here" required>                    
                </div>
                <div class="py-2">
                    <label for="course_id" class="form-label">Select course for enquiry:</label>
                    <select required class="form-select" name="course_id" id="course_id">
                        <option value="-1" selected disabled>---Select course---</option>
                        <?php
                        $query2 = "SELECT `course_id`, `course_name` FROM `course`;";
                        $result = $conn->query($query);
                        while ($row = $result->fetch_assoc()) {
                            $course_id = $row["course_id"];
                            $course_name = $row["course_name"];
                            echo '<option value="' . $course_id . '">' . $course_name . '</option>';
                        }
                        ?>                        
                    </select>
                </div>
                <div class="py-2">
                    <label for="subject" class="form-label">Subject:</label>
                    <input type="text" name="subject" id="subject" class="form-control" placeholder="Enter your subject here" required>                    
                </div>
                <div class="py-2">
                    <label for="message" class="form-label">Message:</label>
                    <textarea name="message" id="message" class="form-control" rows="5" required></textarea>
                </div>
                <div class="py-2">
                   <input id="submit" name="submit" type="submit" value="Submit" class="pill">
                </div>
            </form>
        </div>
        <br>
    </div>
    <br><br><br>
    <?php include "links/include/footer.php" ?>
<script>

    $("#submit").on("click",function(e){
        var course_id=$("#course_id").val();
        if(course_id==null){
            alert("Please select course");
            e.preventDefault();
        }
    })
</script>
</body>

</html>