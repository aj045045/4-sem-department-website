<?php 
// TODO: Search
if (isset($_GET['search'])) {
    $search = $_GET['search'];
//? SEARCH USING SWITCH CASE
switch ($search) {
case "download":
    header("Location:./../../download.php");
    break;
case "event":
    header("Location:./../../event.php");
    break;
case "faculty":
    header("Location:./../../faculty.php");
    break;
    default:
    header("Location:./../../error.php");
break;
}
}?>