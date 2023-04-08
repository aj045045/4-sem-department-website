<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "./links/include/link.php" ?>
    <style>
        iframe{
            height:7in;
            margin:50px 100px ;
            width:80%;
        }
    </style>
</head>

<body>

    <?php
    // $scan = (scandir('./links/courses/'));
    
    $scan = array('aiml.html','mca.html','msc.html','mtec.html','pgdcsa.html');
    foreach ($scan as $file) {
        if (is_file("./$file") ) {
            echo '<div class=" bg-red-800 w-2/4 mx-auto pl-40 text-white text-2xl">NEW COURSES</div><iframe src= ./'. $file .'></iframe><br>';
            
        }
    }
    ?>

</body>

</html>