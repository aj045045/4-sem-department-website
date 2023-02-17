<?php
// BS5 links
//echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
//       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>';
session_start();
        $_SESSION['userType']="Student";

echo '<link rel="stylesheet" href="links/bs5/bootstrap.min.css">
        <link rel="stylesheet" href="links/css/global.css">
        <link rel="stylesheet" href="links/css/main.css">
        <script src="links/bs5/bootstrap.bundle.min.js"></script>
        <script src="links/js/main.js"></script>
        <title>Depart. of Computer science</title>
        <script src="js/main.js"></script>
        <link rel="shortcut icon" href="image/logos/logo.webp" type="image/png">';
?>