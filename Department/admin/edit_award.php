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
    $awardId = $_POST['award_id'];
    $awardWinner = $_POST['award_winner'];
    $awardName = $_POST['award_name'];
    $awardPlace = $_POST['award_place'];
    $awardYear = $_POST['award_year'];

    $awardDate = date('Y-m-d', strtotime($awardYear));

    $sql = "UPDATE achievement SET award_winner = '$awardWinner', award_name = '$awardName', award_place = '$awardPlace', award_time = '$awardDate'
            WHERE award_id = '$awardId'";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Award updated successfully.');</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    if (isset($_GET['award_id'])) {
        $awardId = $_GET['award_id'];

        $sql = "SELECT * FROM achievement WHERE award_id = '$awardId'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $awardWinner = $row['award_winner'];
            $awardName = $row['award_name'];
            $awardPlace = $row['award_place'];
            $awardDate = date('Y-m-d',  strtotime($row['award_time']));
        } else {
            echo "No award found with the given ID.";
            exit;
        }
    } else {
        echo "Award ID not provided.";
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Award</title>
    <link rel="stylesheet" href="include/css/bootstrap.min.css"><!-- // @audit-info : bootstrap -->
    <link rel="stylesheet" href="./include/css/style.css">
</head>

<body>
    <?php include './include/header.php';?>
      <div class="container mt-5 py-5">
        <h1>Edit Award:</h1>
        <form method="post" enctype="multipart/form-data">
            <input type="hidden" name="award_id" value="<?php echo $awardId; ?>">
            <div class="py-2">
                <label for="award_winner" class="form-label">Award Winner:</label>
                <input type="text" name="award_winner" id="award_winner" class="form-control" placeholder="Enter award winner" value="<?php echo $awardWinner; ?>" required>
            </div>
            <div class="py-2">
                <label for="award_name" class="form-label">Award Name:</label>
                <input type="text" name="award_name" id="award_name" class="form-control" placeholder="Enter award name" value="<?php echo $awardName; ?>" required>
            </div>
            <div class="py-2">
                <label for="award_place" class="form-label">Award Place:</label>
                <input type="text" name="award_place" id="award_place" class="form-control" placeholder="Enter award place" value="<?php echo $awardPlace; ?>" required>
            </div>
            <div class="py-2">
                <label for="award_year" class="form-label">Award Year:</label>
                <input type="date" name="award_year" id="award_year" class="form-control" placeholder="Enter award year" value="<?php echo $awardDate; ?>" required>
            </div>
            <div class="py-2">
                <input name="submit" type="submit" value="Update" class="btn btn-primary">
            </div>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="include/js/bootstrap.bundle.min.js"></script>
</body>

</html>
