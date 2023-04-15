<!doctype html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./links/css/output.css">
    <?php include "links/include/link.php" ?>
    <!-- Header -->

    <style>
        iframe {
            height: 5in;
            margin: 5% 10%;
            width: 80%;
        }
    </style>
</head>

<body>
    <?php include "links/include/header.php" ?>

    <div class=" sm:grid sm:grid-cols-4 space-y-3 mt-40 mb-20  mx-8">
        <a class="sm:text-2xl text-lg  mx-auto rounded-lg text-white bg-indigo-900 px-14" href="aiml.html">M.sc(AI ML)</a>
        <a class="sm:text-2xl text-lg  mx-auto rounded-lg text-white bg-indigo-900 px-14" href="mca.html">Mca</a>
        <a class="sm:text-2xl text-lg  mx-auto rounded-lg text-white bg-indigo-900 px-14" href="msc.html">Msc(CS)</a>
        <a class="sm:text-2xl text-lg  mx-auto rounded-lg text-white bg-indigo-900 px-14" href="mtec.html">M.Tech.(N.C)</a>
        <a class="sm:text-2xl text-lg  mx-auto rounded-lg text-white bg-indigo-900 px-14" href="mtec.html">M.Tech.(W.T)</a>
        <a class="sm:text-2xl text-lg  mx-auto rounded-lg text-white bg-indigo-900 px-14" href="pgdcsa.html">PGDCSA</a>
    </div>
    <?php
    // $scan = (scandir('./links/courses/'));
    $scan = array('aiml.html', 'mca.html', 'msc.html', 'mtec.html', 'pgdcsa.html');
    foreach ($scan as $file) {
        if (is_file("./$file")) {
            echo '<div class="w-2/4 sm:pl-44 pl-16 mx-auto sm:text-2xl text-sm text-white bg-red-800 ">NEW COURSES</div><iframe src= ./' . $file . '></iframe><br>';
        }
    }
    ?>
<?php include "links/include/footer.php"?>
</body>

</html>