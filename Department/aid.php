// admin_panel.php - Admin panel page

// Include database connection and utility functions
<?php include "links/include/link.php" ?>

<?php
// Check if the user is logged in as admin
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

// Retrieve course information from the database
$query = "SELECT * FROM courses";
$result = mysqli_query($connection, $query);
$courses = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Update course details
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $courseId = $_POST['course_id'];
    $courseName = $_POST['course_name'];
    $courseSeats = $_POST['seat_number'];

    // Update course in the database
    $updateQuery = "UPDATE courses SET course_name='$courseName', seats_available='$seat_number' WHERE course_id='$courseId'";
    mysqli_query($connection, $updateQuery);
    // Redirect to the admin panel page to see the updated information
    header("Location: admin_panel.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
</head>
<body>
    <h1>Admin Panel</h1> 
    <!-- Adminlogout -->
    <!-- <a href=".php">Logout</a> -->

    <h2>Update Courses</h2>
    <table>
        <tr>
            <th>Course ID</th>
            <th>Course Name</th>
            <th>Seats Available</th>
            <th>Number of Students</th>
        </tr>
        <?php foreach ($courses as $course) { ?>
            <tr>
                <form method="POST" action="">
                    <td><?php echo $course['course_id']; ?></td>
                    <td><input type="text" name="course_name" value="<?php echo $course['course_name']; ?>"></td>
                    <td><input type="number" name="course_seats" value="<?php echo $course['seat_number']; ?>"></td>
                    <td><?php echo getNumberOfStudents($course['course_id']); ?></td>
                    <input type="hidden" name="course_id" value="<?php echo $course['course_id']; ?>">
                    <td><button type="submit">Update</button></td>
                </form>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
