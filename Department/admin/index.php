<?php
$dns = "mysql:host=localhost;dbname=dcsdb";
$dataBase = new PDO($dns, "root", "");
try {
    //TODO - Cards of database
    //SECTION - COURSES, Document : Result, old-papers, Circular, Events, News, Feedback, Gallery Images, Temporary Question, Enquiry
    $countValue = array(
        "courses" => array("course_id", "course"), "results" => array("document_id", "documents", "document_category_id", 1), "papers" => array("document_id", "documents", "document_category_id", 2), "circular" => array("document_id", "documents", "document_category_id", 3),
        "events" => array("event_id", "event", 1), "news" => array("news_id", "news"), "feedback" => array("feedback_id", "feedback"), "photos" => array("photo_id", "photos"), "questions" => array("tmp_question_id", "tmp_questions")
    );
    $resultValue = array();
    foreach ($countValue as $key => $tmp_data) {
        $queryResult = (isset($tmp_data[2]) && isset($tmp_data[3])) ? $dataBase->prepare("SELECT COUNT($tmp_data[0]) FROM $tmp_data[1] WHERE $tmp_data[2]=$tmp_data[3]") : $dataBase->prepare("SELECT COUNT($tmp_data[0]) FROM $tmp_data[1] ");
        $queryResult->execute();
        $val = $queryResult->fetch(PDO::FETCH_ASSOC);
        foreach ($val as $resultKey => $value) {
            $resultValue[$key] = $value;
        }
        $queryResult->closeCursor();
    }
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
    <div class=" tw-w-28 tw-uppercase tw-rounded-md tw-p-2 sm:tw-text-xl tw-text-md tw-bg-blue-700 tw-text-center tw-shadow-lg tw-shadow-blue-400 tw-text-white">LINKs</div>

    <div class="tw-flex-col tw-flex tw-gap-y-4">
        <div class="tw-flex-row tw-flex tw-gap-x-10">
            <a href="event.php" class="tw-bg-white tw-rounded-lg tw-cursor-pointer hover:tw-shadow-md  hover:tw-shadow-slate-400 tw-text-lg tw-pr-5 tw-py-2 tw-flex sm:tw-flex-row tw-flex-col tw-my-2">
                <img class="tw-hidden md:tw-block tw-w-6 tw-mx-2 tw-rounded-full tw-my-auto tw-h-6 " id="image' . $i . '-preview" src="./../image/logos/plus-icon.jpg" alt="Title">
                <div class="tw-flex tw-flex-row">
                    <div class="tw-hidden md:tw-block">Do you like to add &nbsp;</div>
                    <strong class=" tw-block">Event</strong>
                    <div class="tw-hidden md:tw-block">&nbsp; in department of computer science ?</div>
                </div>
            </a>
            <a href="news.php" class="tw-ml-auto tw-bg-white tw-rounded-lg tw-cursor-pointer hover:tw-shadow-md hover:tw-shadow-slate-400 tw-text-lg tw-pr-5 tw-py-2 tw-flex sm:tw-flex-row tw-flex-col tw-my-2 ">
                <img class="tw-hidden md:tw-block tw-w-6 tw-mx-2 tw-rounded-full tw-my-auto tw-h-6 " id="image' . $i . '-preview" src="./../image/logos/plus-icon.jpg" alt="Title">
                <div class="tw-flex tw-flex-row">
                    <div class="tw-hidden md:tw-block">Click to add &nbsp;</div>
                    <strong class=" tw-block">News</strong>
                    <div class="tw-hidden md:tw-block">&nbsp; for department</div>
                </div>
            </a>
        </div>
        <div class="tw-flex-row tw-flex tw-gap-x-10">
            <a href="documents.php" class="tw-bg-white tw-rounded-lg tw-cursor-pointer hover:tw-shadow-md hover:tw-shadow-slate-400 tw-text-lg tw-pr-5 tw-py-2 tw-flex sm:tw-flex-row tw-flex-col tw-my-2">
                <img class="tw-hidden md:tw-block tw-w-6 tw-mx-2 tw-rounded-full tw-my-auto tw-h-6 " id="image' . $i . '-preview" src="./../image/logos/plus-icon.jpg" alt="Title">
                <div class="tw-flex tw-flex-row">
                    <div class="tw-hidden md:tw-block">Do you like to add &nbsp;</div>
                    <strong class=" tw-block">Results&nbsp;/&nbsp;Papers&nbsp;/&nbsp;Circulars</strong>
                    <div class="tw-hidden md:tw-block">&nbsp; in department of computer science ?</div>
                </div>
            </a>
        </div>

    </div>

    <!-- //NOTE - Div for Summary in cards  -->
    <!-- <div class=" sm:tw-grid sm:tw-grid-cols-6 "> -->
    <div class=" tw-mt-20 tw-w-28 tw-uppercase tw-rounded-md tw-p-2 sm:tw-text-xl sm:tw-block tw-hidden tw-bg-blue-700 tw-shadow-lg tw-shadow-blue-400 tw-text-white">Summary</div>
    <div class=" sm:tw-grid sm:tw-grid-cols-4 lg:tw-grid-cols-6 tw-gap-3 max-sm:tw-hidden">
        <?php
        foreach ($resultValue as $key => $value) { ?>
            <div class="tw-flex tw-flex-col tw-border tw-border-slate-500 tw-bg-slate-200 tw-rounded-md tw-w-32">
                <div class="tw-text-center tw-mx-9 tw-my-6 tw-font-mono tw-text-3xl tw-flex tw-flex-row">
                    <div class=" tw-border tw-p-3 tw-px-5 tw-rounded-full tw-bg-slate-500  tw-text-white">
                        <?php
                        echo $value;
                        ?>
                    </div>
                </div>
                <div class=" tw-text-center tw-h-16 tw-font-sans tw-text-lg tw-mx-3">No. of <?php
                                                                                            echo ucfirst($key);
                                                                                            ?></div>
            </div>
        <?php
        }
        ?>
    </div>
    <div class="tw-mt-20 tw-w-28 tw-uppercase tw-rounded-md tw-p-2 sm:tw-text-xl tw-text-lg tw-text-center tw-bg-blue-700 tw-shadow-lg tw-shadow-blue-400 tw-text-white">Details</div>
    <!--//NOTE -  Div for Details of Faculty, Awards and collaborators -->
    <div class="tw-bg-slate-300 tw-text-center tw-rounded-lg tw-shadow-lg tw-shadow-slate-500">
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