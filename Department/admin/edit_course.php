<?php
include "include/connection/db.php";

// Check if the course ID is provided in the URL
if (isset($_GET['course_id'])) {
    $courseId = $_GET['course_id'];

    // Retrieve the course data from the database
    $sql = "SELECT * FROM course WHERE course_id = $courseId";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    // Check if the course exists
    if (!$row) {
        echo "Course not found.";
        exit;
    }

    // Populate the form fields with the retrieved data
    $courseName = $row['course_name'];
    $courseDetails = $row['course_details'];
    $seats = $row['seat_number'];
    $boyFee = $row['boys_fees'];
    $girlFee = $row['girls_fees'];
} else {
    echo "Course ID not provided.";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $courseName = $_POST['course_name'];
    $courseDetails = $_POST['course_details'];
    $seats = $_POST['seats'];
    $boyFee = $_POST['boy_fee'];
    $girlFee = $_POST['girl_fee'];

    // Process the uploaded course document if a new file is provided
    if ($_FILES['course_document']['name'] !== '') {
        $documentName = $_FILES['course_document']['name'];
        $documentTmpName = $_FILES['course_document']['tmp_name'];
        $documentPath = 'documents/syllabus/' . $documentName;
        move_uploaded_file($documentTmpName, './../' . $documentPath);
    } else {
        $documentPath = $row['course_document'];
    }

    // Process the uploaded course image if a new file is provided
    if ($_FILES['course_image']['name'] !== '') {
        $imageName = $_FILES['course_image']['name'];
        $imageTmpName = $_FILES['course_image']['tmp_name'];
        $imagePath = 'image/academics/logo/' . $imageName;
        move_uploaded_file($imageTmpName, './../' . $imagePath);
    } else {
        $imagePath = $row['course_image'];
    }

    // Update the course information in the database
    $sql = "UPDATE course SET
            course_name = '$courseName',
            course_details = '$courseDetails',
            seat_number = '$seats',
            boys_fees = '$boyFee',
            girls_fees = '$girlFee',
            course_document = '$documentPath',
            course_image = '$imagePath'
            WHERE course_id = $courseId";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Course updated successfully.');</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="include/css/bootstrap.min.css">
    <style>
        .preview-image {
            max-width: 200px;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <header class="border border-1">
        <h3>Header</h3>
    </header>
    <div class="container">
        <h1>Edit Course:</h1>

        <form method="post" enctype="multipart/form-data">
            <div class="py-2">
                <label for="course_name" class="form-label">Course Name:</label>
                <input type="text" name="course_name" id="course_name" class="form-control" placeholder="Enter course name here" required value="<?php echo $courseName; ?>">
            </div>
            <div class="py-2">
                <label for="course_details" class="form-label">Course Details:</label>
                <textarea placeholder="Course Details" name="course_details" id="course_details" class="form-control" rows="5" required><?php echo $courseDetails; ?></textarea>
            </div>
            <div class="py-2">
                <label for="seats" class="form-label">Total seats:</label>
                <input type="number" name="seats" id="seats" class="form-control" placeholder="Enter total seats" required value="<?php echo $seats; ?>">
            </div>
            <div class="py-2">
                <label for="boy_fee" class="form-label">Boys fee:</label>
                <input type="number" name="boy_fee" id="boy_fee" class="form-control" placeholder="Enter Boy fee" required value="<?php echo $boyFee; ?>">
            </div>
            <div class="py-2">
                <label for="girl_fee" class="form-label">Girls fee:</label>
                <input type="number" name="girl_fee" id="girl_fee" class="form-control" placeholder="Enter Girl fee" required value="<?php echo $girlFee; ?>">
            </div>
            <div class="py-2">
                <label for="course_document" class="form-label">Course syllabus:</label>
                <input type="file" name="course_document" id="course_document" class="form-control" placeholder="Enter your number here">
            </div>
            <div class="py-2">
                <label for="course_image" class="form-label">Course image:</label>
                <input type="file" name="course_image" id="course_image" class="form-control" placeholder="Enter your number here">
                <?php if ($row['course_image']): ?>
                    <img src="<?php echo './../'.$row['course_image']; ?>" alt="Course Image" class="preview-image">
                <?php endif; ?>
            </div>

            <div class="py-2">
                <input name="submit" type="submit" value="Update" class="btn btn-primary">
            </div>
        </form>
    </div>
    <footer class="border border-1">
        <h3>Footer</h3>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
        // Update the course image preview on file input change
        $(document).ready(function() {
            $('#course_image').change(function(e) {
                var file = e.target.files[0];
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('.preview-image').attr('src', e.target.result);
                }
                reader.readAsDataURL(file);
            });
        });
    </script>
</body>

</html>
