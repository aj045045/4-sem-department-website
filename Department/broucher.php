<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "links/include/link.php" ?>
    <style>
        iframe{
            height:5in;
            margin:50px 100px ;
            width:80%;
        }
    </style>
</head>

<body>

    <?php
    $scan = (scandir('./links/courses/'));
    foreach ($scan as $file) {
        if (is_file("./links/courses/$file") ) {
            echo '<div class=" bg-blue-600 w-2/4 mx-auto pl-40 text-white">NEW COURSES</div><iframe src= ./links/courses/'. $file .'></iframe><br>';
            
        }
    }
    ?>

</body>

</html>