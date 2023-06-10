<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: sign_in.php");
    exit();
}
?>
<?php
include "include/connection/db.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $awardWinner = $_POST['award_winner'];
    $awardName = $_POST['award_name'];
    $awardPlace = $_POST['award_place'];
    $awardYear = $_POST['award_year'];

    $awardDate = date('Y-m-d', strtotime($awardYear));

    $sql = "INSERT INTO achievement (award_winner, award_name, award_place, award_time)
            VALUES ('$awardWinner', '$awardName', '$awardPlace', '$awardDate')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Award added successfully.');</script>";
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
    <title>Add Award</title>
    <link rel="stylesheet" href="include/css/bootstrap.min.css">
<link rel="stylesheet" href="./include/css/style.css">
</head>

<body>
    <?php include './include/header.php';?>
        <div class="container mt-5 py-5">
        <h1>Add Award:</h1>
        <form method="post">
            <div class="py-2">
                <label for="award_winner" class="form-label">Award Winner:</label>
                <input type="text" name="award_winner" id="award_winner" class="form-control" placeholder="Enter award winner" required>
            </div>
            <div class="py-2">
                <label for="award_name" class="form-label">Award Name:</label>
                <input type="text" name="award_name" id="award_name" class="form-control" placeholder="Enter award name" required>
            </div>
            <div class="py-2">
                <label for="award_place" class="form-label">Award Place:</label>
                <input type="text" name="award_place" id="award_place" class="form-control" placeholder="Enter award place" required>
            </div>
            <div class="py-2">
                <label for="award_year" class="form-label">Award Year:</label>
                <input type="date" name="award_year" id="award_year" class="form-control" placeholder="Enter award year" required>
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
