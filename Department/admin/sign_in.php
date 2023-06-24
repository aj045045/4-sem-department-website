<?php
session_start();
 include "include/connection/db.php";
?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username;
        header("Location: index.php");
      
    } else {
            echo "<script>alert('Invalid username or password.');</script>";
    }

  
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>SIGN IN</title>
    <link rel="stylesheet" href="include/css/bootstrap.min.css">
</head>
<body>
    <div class="container d-flex  p-5 justify-content-center align-items-center">
        <div class="border border-3 w-50 m-auto p-5">
            <h2 class="text-center">Login</h2>
            <form class="" method="POST">
                <label class="form-label" for="username">Username:</label>
                <input type="text" placeholder="Enter your username" class="form-control" id="username" name="username" required><br><br>
                
                <label class="form-label" for="password">Password:</label>
                <input type="password" placeholder="Enter your password" class="form-control" id="password" name="password" required><br><br>
                
                <input class="btn btn-primary w-100" type="submit" value="Login">
            </form>
        </div>
    </div>
</body>
</html>
    <script src="include/js/bootstrap.bundle.min.js"></script>

</body>

</html>