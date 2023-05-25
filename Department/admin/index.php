<?php
$dns = "mysql:host=localhost;dbname=dcsdb";
$dataBase = new PDO($dns, "root", "");
try {
    //TODO - Cards of database
    $countValue = array();
    //SECTION - COURSES
    // $dataBase->prepare("SELECT COUNT(course_id) FROM COURSE");
    //SECTION -  Document : Result, old-papers, Circular
    // SELECT COUNT(document-id) FROM document WHERE document is nothing;
    $tmpValue = isset($tmp_data[3]) ? "WHERE $tmp_data[3]==$tmp_data[4]" : " ";
    $dataBase->prepare("SELECT COUNT($tmp_data[0]) FROM $tmp_data[1] $tempValue");
    //SECTION - Events

    //SECTION - News

    //SECTION - Feedback

    //SECTION - Gallery Images

    //SECTION - Temporary Question
    //SECTION - Enquiry

} catch (Exception $exp) {
    echo "ERROR :" . $exp->getMessage() . " at line number " . $exp->getLine() . " in the file " . $exp->getFile();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="./../links/bs5/bs.min.css">
    <script src="./include/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./../links/css/tw.css">
    <link rel="shortcut icon" href="./../image/logos/logo.webp" type="image/x-icon">
</head>

<body class=" tw-flex-col tw-flex tw-p-20 tw-gap-y-10 ">
    <!-- //NOTE - Div for Add / Update Data  -->
    <div class="tw-flex-col tw-flex tw-gap-y-4">
        <div class="tw-flex-row tw-flex tw-gap-x-10">
            <a href="event.php" class="tw-bg-white tw-rounded-lg tw-cursor-pointer hover:tw-shadow-md  hover:tw-shadow-slate-400 tw-text-lg tw-pr-5 tw-py-2 tw-flex sm:tw-flex-row tw-flex-col tw-my-2">
                <img class="tw-hidden md:tw-block tw-w-6 tw-mx-2 tw-rounded-full tw-my-auto tw-h-6 " id="image' . $i . '-preview" src="./../image/logos/plus-icon.jpg" alt="Title">
                Do you like to add &nbsp;<strong>Event</strong>&nbsp; in department of computer science ?
            </a>
            <a href="news.php" class="tw-ml-auto tw-bg-white tw-rounded-lg tw-cursor-pointer hover:tw-shadow-md hover:tw-shadow-slate-400 tw-text-lg tw-pr-5 tw-py-2 tw-flex sm:tw-flex-row tw-flex-col tw-my-2 ">
                <img class="tw-hidden md:tw-block tw-w-6 tw-mx-2 tw-rounded-full tw-my-auto tw-h-6 " id="image' . $i . '-preview" src="./../image/logos/plus-icon.jpg" alt="Title">
                Click to add &nbsp;<strong>News</strong>&nbsp; for department
            </a>
        </div>
        <div class="tw-flex-row tw-flex tw-gap-x-10">
            <a href="documents.php" class="tw-bg-white tw-rounded-lg tw-cursor-pointer hover:tw-shadow-md hover:tw-shadow-slate-400 tw-text-lg tw-pr-5 tw-py-2 tw-flex sm:tw-flex-row tw-flex-col tw-my-2">
                <img class="tw-hidden md:tw-block tw-w-6 tw-mx-2 tw-rounded-full tw-my-auto tw-h-6 " id="image' . $i . '-preview" src="./../image/logos/plus-icon.jpg" alt="Title">
                Do you like to add &nbsp;<strong>Result&nbsp;/&nbsp;Papers&nbsp;/&nbsp;Circular</strong>&nbsp; in department of computer science ?
            </a>
        </div>
        <div class="tw-flex-row tw-flex tw-gap-x-10">
            <a href="event.php" class="tw-bg-white tw-rounded-lg tw-cursor-pointer hover:tw-shadow-md hover:tw-shadow-slate-400 tw-text-lg tw-pr-5 tw-py-2 tw-flex sm:tw-flex-row tw-flex-col tw-my-2">
                <img class="tw-hidden md:tw-block tw-w-6 tw-mx-2 tw-rounded-full tw-my-auto tw-h-6 " id="image' . $i . '-preview" src="./../image/logos/plus-icon.jpg" alt="Title">
                Do you like to add &nbsp;<strong>Event</strong>&nbsp; in department of computer science ?
            </a>
            <a href="news.php" class="tw-ml-auto tw-bg-white tw-rounded-lg tw-cursor-pointer hover:tw-shadow-md hover:tw-shadow-slate-400 tw-text-lg tw-pr-5 tw-py-2 tw-flex sm:tw-flex-row tw-flex-col tw-my-2 ">
                <img class="tw-hidden md:tw-block tw-w-6 tw-mx-2 tw-rounded-full tw-my-auto tw-h-6 " id="image' . $i . '-preview" src="./../image/logos/plus-icon.jpg" alt="Title">
                Click to add &nbsp;<strong>News</strong>&nbsp; for department
            </a>
        </div>
    </div>

    <!-- //NOTE - Div for Summary in cards  -->
    <div class=" sm:tw-grid sm:tw-grid-rows-6 tw-flex tw-flex-col">
        <?php
        foreach ($countValue as $cv) { ?>
            <div class="tw-flex tw-flex-col tw-border tw-border-slate-400 tw-rounded-md tw-w-32">
                <div class="tw-text-center tw-mx-9 tw-my-6 tw-font-mono tw-text-3xl tw-flex tw-flex-row">
                    <div class=" tw-border tw-p-3 tw-rounded-full tw-bg-slate-500 tw-shadow-xl tw-text-white">
                        28
                    </div>
                </div>
                <div class=" tw-text-center tw-h-16 tw-font-sans tw-text-lg tw-mx-3">No. of programmers</div>
            </div>
        <?php
        }
        ?>
    </div>
    <!--//NOTE -  Div for Details of Faculty, Awards and collaborators -->
    <div class="tw-bg-slate-300 tw-text-center tw-rounded-lg tw-shadow-lg tw-shadow-slate-400">
        <div class=" tw-capitalize tw-text-7xl tw-my-5 " style="font-family: Brush Script MT;">Details</div>
        <div class=" tw-flex-col tw-flex tw-h-26 tw-bg-white tw-rounded-lg tw-m-5 tw-shadow-lg tw-shadow-slate-400">
            <div class=" tw-capitalize tw-text-center tw-font-serif tw-text-4xl tw-my-5">Faculty</div>
        </div>
        <div class=" tw-flex-col tw-flex tw-h-26 tw-bg-white tw-rounded-lg tw-m-5 tw-shadow-lg tw-shadow-slate-400">
            <div class=" tw-capitalize tw-text-center tw-font-serif tw-text-4xl tw-my-5">Awards</div>
        </div>
        <div class=" tw-flex-col tw-flex tw-h-26 tw-bg-white tw-rounded-lg tw-m-5 tw-shadow-lg tw-shadow-slate-400">
            <div class=" tw-capitalize tw-text-center tw-font-serif tw-text-4xl tw-my-5">collaborators</div>
        </div>
    </div>


</body>

</html>