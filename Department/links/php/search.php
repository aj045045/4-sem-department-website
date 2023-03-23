<?php
// TODO: Search
if (isset($_GET['search'])) {
    $search = strtoupper($_GET['searchValue']);
    //? SEARCH USING SWITCH CASE
    switch ($search) {
        case "DOWNLOAD":
            header("Location:./../../download.php");
            break;
        case "EVENT":
            header("Location:./../../event.php");
            break;
        case "FACULTY":
            header("Location:./../../faculty.php");
            break;
        case "ABOUT":
            header("Location:./../../about.php");
            break;
        case "MAP":
            header("Location:./../../about.php");
            break;
        default:
            header("Location:./../../error.php");
            break;
    }
}
