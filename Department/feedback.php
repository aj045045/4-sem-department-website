<?php 
include "links/include/db.php";
if (isset($_POST["message"])) {    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];
    $query = mysqli_query($conn, "INSERT INTO `feedback` (`name`, `email`,`phone`,`message`) VALUES ( '$name', '$email','$phone','$message');");
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
        label::after{
            content:"*";
            color:red;
        }
    </style>
</head>

<body>
<script>
    <?php
    if($query==true){
        echo 'alert("Your feedback submitted successfully");';
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
            <li><a href="about.php">About</a></li>
            <li>Feedback</li>
        </ul>
        <div class="container">
            <div class="pill">Feedback</div>
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
                    <label for="message" class="form-label">Message:</label>
                    <textarea name="message" id="message" class="form-control" rows="5" required></textarea>
                </div>
                <div class="py-2">
                   <input name="submit" type="submit" value="Submit" class=" pill">
                </div>
            </form>
        </div>
        <br>
    </div>
    <br><br><br>
    <?php include "links/include/footer.php" ?>
</body>

</html>