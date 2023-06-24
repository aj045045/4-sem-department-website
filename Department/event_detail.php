<?php
$dns = "mysql:host=localhost;dbname=dcsdb";
$root = "root";
$dataBase = new PDO($dns, $root, "");
$fetchValue = false;
$getId = $_GET['id'];
$query = "SELECT event_id FROM event";
$resultData = $dataBase->prepare($query);
$resultData->execute();
$rows = $resultData->fetchall(PDO::FETCH_ASSOC);
foreach ($rows as $row) {
    if (sha1($row['event_id']) == $getId) {
        $fetchValue = true;
        $eventId = $row['event_id'];
    }
}

$resultData->closeCursor();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Details</title>
    <link rel="stylesheet" href="./links/bs5/bs.min.css">
    <script src="./include/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./links/css/tw.css">
    <?php include "links/include/link.php" ?>
    <style>
        .card-body {
            display: block;
            margin: 0px 80px;
        }

        input[type="file"] {
            display: none;
        }

        .card-img-top {
            height: 1.5in;
            width: 2in;
        }
    </style>
</head>

<body>
    <?php include "links/include/header.php";
    if ($fetchValue == true) {
        $query = "SELECT  ev.event_id,ec.event_category_type, ev.event_title, ev.event_description, ev.event_venue, ev.event_start, ev.event_end FROM event_category as ec inner join event ev on ec.event_category_id = ev.event_category_id where ev.event_id = :id ";
        $resultData = $dataBase->prepare($query);
        $resultData->bindValue(':id', $eventId);
        $resultData->execute();
        $row = $resultData->fetch(PDO::FETCH_ASSOC);
    ?>
    <ul class="breadcrumb" style="padding-top: 130px; padding-right:40%; padding-left:5%">
            <li><a href="home.php">Home</a></li>
            <li>Happenings</li>
            <li>Event</li>
            <li><?php echo ucfirst($row['event_title']); ?></li>
        </ul>
        <div class=" tw-bg-slate-300 tw-shadow-md tw-shadow-slate-500 md:tw-mx-20 tw-mx-5 tw-my-10 tw-p-10 tw-rounded-md tw-flex tw-flex-col md:tw-gap-y-16 tw-gap-10">
            <div class=" tw-text-center tw-text-5xl tw-pl-10 tw-capitalize md:tw-text-8xl tw-container" style="font-family: Brush Script MT;">event details</div>

            <div class=" md:tw-text-xl tw-text-xs tw-flex tw-flex-row tw-ml-auto tw-bg-blue-700 tw-shadow-lg tw-shadow-blue-500 tw-text-white tw-rounded-md tw-p-2">
                <div class=" tw-font-semibold tw-italic tw-mx-3">Date</div>
                <?php
                $dt = new DateTime();
                echo $dt->format('j-M-Y');
                ?>
            </div>

            <div class=" tw-auto tw-text-center tw-capitalize md:tw-text-6xl tw-text-3xl tw-font-serif"><?php echo ucfirst($row['event_title']); ?></div>
            <div class=" tw-flex tw-flex-row md:tw-text-2xl tw-text-xs">
                <i class=" tw-font-bold tw-mx-3">Category</i><strong>:</strong>
                <div class=" tw-font-mono tw-ml-3"><?php echo ucfirst($row['event_category_type']) . " Event"; ?></div>
            </div>
            <div class="tw-flex tw-flex-row tw-gap-x-3">
                <div class="tw-flex tw-flex-row tw-bg-slate-500 md:tw-text-2xl tw-text-base tw-shadow-md tw-shadow-slate-700 tw-text-white tw-rounded-md tw-p-2">
                    <div class=" tw-font-semibold tw-italic tw-mx-3">Venue&nbsp;:</div>
                    <div class=" tw-font-serif"><?php echo ucfirst($row['event_venue']); ?></div>
                </div>
                <div class="tw-flex tw-flex-col tw-bg-slate-500 tw-shadow-md tw-ml-auto tw-shadow-slate-700 tw-text-white tw-rounded-md tw-p-2 md:tw-text-lg tw-text-xs">
                    <div class="tw-flex-row tw-flex">
                        <div class=" tw-italic tw-mx-3 tw-font-semibold">From&nbsp;: </div>
                        <div class="tw-font-mono"><?php $dt = new DateTime($row['event_start']);
                                                    echo $dt->format('j-M-Y G:i A'); ?></div>
                    </div>
                    <div class="tw-flex-row tw-flex">
                        <div class=" tw-italic tw-mx-3 tw-font-semibold">To&nbsp;: </div>
                        <div class="tw-font-mono"><?php $dt = new DateTime($row['event_end']);
                                                    echo $dt->format('j-M-Y G:i A'); ?></div>
                    </div>
                </div>
            </div>
            <div class=" md:tw-text-xl tw-text-base"><?php echo $row['event_description']; ?></div>
            <div class=" tw-flex tw-flex-col tw-gap-y-10 md:tw-flex-row tw-gap-x-6 tw-mx-auto">
                <?php
                $query = "SELECT photo_document FROM photos where event_id = $eventId";
                $resultData = $dataBase->prepare($query);
                $resultData->execute();
                $rows = $resultData->fetchall(PDO::FETCH_ASSOC);
                foreach ($rows as $row) {
                    echo '
                <img class="card-img-top tw-rounded-lg "  src="' . $row['photo_document'] . '" alt="Event' . $row['photo_document'] . '">
                ';
                }
                $resultData->closeCursor();
                ?>
            </div>
        </div>
    <?php
    }
    $resultData->closeCursor();
    ?>
    <?php include "links/include/footer.php" ?>
</body>

</html>