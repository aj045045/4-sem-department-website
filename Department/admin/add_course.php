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
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $courseName = $_POST['course_name'];
    $courseDetails = $_POST['course_details'];
    $seats = $_POST['seats'];
    $boyFee = $_POST['boy_fee'];
    $girlFee = $_POST['girl_fee'];

    // Process the uploaded course document
    $documentName = $_FILES['course_document']['name'];
    $documentTmpName = $_FILES['course_document']['tmp_name'];
    $documentPath ='documents/syllabus/' . $documentName;
    move_uploaded_file($documentTmpName,'./../'.$documentPath);

    $imageName = $_FILES['course_image']['name'];
    $imageTmpName = $_FILES['course_image']['tmp_name'];
    $imagePath =   'image/academics/logo/'.  $imageName;
    move_uploaded_file($imageTmpName, './../'.$imagePath);

    $sql = "INSERT INTO course (course_name, course_details, seat_number, boys_fees, girls_fees, course_document, course_image) 
             VALUES ('$courseName', '$courseDetails', '$seats', '$boyFee', '$girlFee', '$documentPath', '$imagePath')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Course added successfully.');</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

}
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
        <h1>Add Course:</h1>
        <form method="post" enctype="multipart/form-data">
            <div class="py-2">
                <label for="course_name" class="form-label">Course Name:</label>
                <input type="text" name="course_name" id="course_name" class="form-control" placeholder="Enter course name here" required>
            </div>
            <div class="py-2">
                <label for="course_details" class="form-label">Course Details:</label>
                <textarea placeholder="Course Details" name="course_details" id="course_details" class="form-control" rows="5" required></textarea>
            </div>
            <div class="py-2">
                <label for="seats" class="form-label">Total seats:</label>
                <input type="number" name="seats" id="seats" class="form-control" placeholder="Enter total seats" required>
            </div>
            <div class="py-2">
                <label for="boy_fee" class="form-label">Boys fee:</label>
                <input type="number" name="boy_fee" id="boy_fee" class="form-control" placeholder="Enter Boy fee" required>
            </div>
            <div class="py-2">
                <label for="girl_fee" class="form-label">Girls fee:</label>
                <input type="number" name="girl_fee" id="girl_fee" class="form-control" placeholder="Enter Girl fee" required>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="include/js/bootstrap.bundle.min.js"></script>
   
</body>

</html>