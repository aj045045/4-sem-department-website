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
try {
    if (isset($_POST['deleteEvent'])) {
        $query = "SELECT photo_id,photo_document FROM photos where event_id = $eventId";
        $resultData = $dataBase->prepare($query);
        $resultData->execute();
        $rows = $resultData->fetchall(PDO::FETCH_ASSOC);
        foreach ($rows as $row) {
            $bool = unlink('./.' . $row['photo_document']);
            if ($bool != 1) {
                throw new Exception(" Cannot Delete the Image from document:" . $row['photo_document']);
            } else {
                $photoId = $row['photo_id'];
                $queryDelete = "DELETE FROM photos WHERE photo_id = $photoId";
                $resultDataDelete = $dataBase->prepare($queryDelete);
                if (!$resultDataDelete->execute()) {
                    throw new Exception(" Photos not delete from database".$photoId);
                }
            }
        }
        $resultData->closeCursor();
        $query = "DELETE  FROM event where event_id = $eventId";
        $resultData = $dataBase->prepare($query);
        if (!$resultDataDelete->execute()) {
            throw new Exception(" Event not delete from database".$row['photo_id']);
        }
    }
    if (isset($_POST['updateEvent'])) {
        $title = isset($_POST['title']) ? $_POST['title'] : throw new Exception("Enter the title");
        $description  = isset($_POST['description']) ? $_POST['description'] : throw new Exception("Enter the description");
        $venue  = isset($_POST['venue']) ? $_POST['venue'] : throw new Exception("Enter the venue");
        $startTime  = isset($_POST['startTime']) ? $_POST['startTime'] : throw new Exception("Enter the startTime");
        $endTime  = isset($_POST['endTime']) ? $_POST['endTime'] : throw new Exception("Enter the endTime");
        $query = "UPDATE event SET event_title=:title, event_description=:description, event_venue=:venue, event_start=:startTime, event_end=:endTime WHERE event_id = :eventId ";
        $resultData = $dataBase->prepare($query);
        $resultData->bindValue(':title', $title);
        $resultData->bindValue(':description', $description);
        $resultData->bindValue(':venue', $venue);
        $resultData->bindValue(':startTime', $startTime);
        $resultData->bindValue(':endTime', $endTime);
        $resultData->bindValue(':eventId', $eventId);
        if (!$resultData->execute()) {
            throw new Exception(" Data not saved");
        }
        $resultData->closeCursor();
    }
} catch (Exception $exc) {
    echo "ERROR :{$exc->getMessage()} of an event at line number {$exc->getLine()} on the file {$exc->getFile()}";
}

$resultData->closeCursor();
if ($fetchValue == true) {
    $query = "SELECT  ev.event_id,ec.event_category_type, ev.event_title, ev.event_description, ev.event_venue, ev.event_start, ev.event_end FROM event_category as ec inner join event ev on ec.event_category_id = ev.event_category_id where ev.event_id = :id ";
    $resultData = $dataBase->prepare($query);
    $resultData->bindValue(':id', $eventId);
    $resultData->execute();
    $row = $resultData->fetch(PDO::FETCH_ASSOC);
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Event Details</title>
        <link rel="stylesheet" href="./../links/bs5/bs.min.css">
        <script src="./include/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="./../links/css/tw.css">
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
        <div class=" tw-bg-slate-300 tw-shadow-md tw-shadow-slate-500 tw-mx-20 tw-my-10 tw-p-10 tw-rounded-md tw-flex tw-flex-col tw-gap-y-10">
            <div class=" tw-text-center tw-pl-10 tw-capitalize md:tw-text-6xl tw-container" style="font-family: Brush Script MT;">event details</div>

            <div class=" tw-flex tw-flex-row tw-ml-auto tw-bg-blue-700 tw-shadow-lg tw-shadow-blue-500 tw-text-white tw-rounded-md tw-p-2">
                <div class=" tw-font-semibold tw-italic tw-mx-3">Date</div><?php
                                                                            $dt = new DateTime($row['event_start']);
                                                                            echo $dt->format('j-M-Y');
                                                                            ?>
            </div>

            <form action="" method="post" class="tw-gap-y-10 tw-flex tw-flex-col" id="updateForm">
                <div class=" tw-auto tw-text-center tw-capitalize tw-text-4xl"><input type="text" name="title" value="<?php echo ucfirst($row['event_title']); ?>" class=" tw-bg-transparent tw-w-auto"></div>
                <div class=" tw-flex tw-flex-row tw-text-lg">
                    <i class=" tw-font-bold tw-mx-3">Category</i><strong>:</strong>
                    <div class=" tw-font-mono tw-ml-3"><?php echo ucfirst($row['event_category_type']) . " Event"; ?></div>
                </div>
                <div class="tw-flex tw-flex-row ">
                    <div class="tw-flex tw-flex-row tw-bg-slate-500 tw-shadow-md tw-shadow-slate-700 tw-text-white tw-rounded-md tw-p-2">
                        <div class=" tw-font-semibold tw-italic tw-mx-3">Venue : <input type="text" name="venue" value="<?php echo ucfirst($row['event_venue']); ?>" class=" tw-bg-slate-500 tw-w-auto"></div>
                    </div>
                    <div class="tw-flex tw-flex-row tw-bg-slate-500 tw-shadow-md tw-ml-auto tw-shadow-slate-700 tw-text-white tw-rounded-md tw-p-2">
                        <div class=" tw-font-semibold tw-italic tw-mx-3">From : <input type="datetime-local" name="startTime" value="<?php $dt = new DateTime($row['event_start']);
                                                                                                                                        echo $dt->format('Y-m-d i:s'); ?>" class=" tw-bg-slate-500">to : <input type="datetime-local" name="endTime" value="<?php $dt = new DateTime($row['event_end']);
                                                                                                                                                                                                                                                            echo $dt->format('Y-m-d i:s'); ?>" class=" tw-bg-slate-500"></div>
                    </div>
                </div>

                <div class=" tw-text-lg"><textarea rows="10" cols="100" class=" tw-bg-slate-300 tw-font-mono" name="description" form="updateForm"><?php
                                                                                                                                                    echo $row['event_description'];
                                                                                                                                                    ?></textarea></div>
                <div class=" tw-flex tw-flex-row tw-gap-x-6 tw-mx-auto">
                    <?php
                    $query = "SELECT photo_document FROM photos where event_id = $eventId";
                    $resultData = $dataBase->prepare($query);
                    $resultData->execute();
                    $rows = $resultData->fetchall(PDO::FETCH_ASSOC);
                    foreach ($rows as $row) {
                        echo '
                <img class="card-img-top tw-rounded-lg"  src="./.' . $row['photo_document'] . '" alt="Event' . $row['photo_document'] . '">
                ';
                    }
                    $resultData->closeCursor();
                    ?>
                </div>
                <div class=" tw-flex tw-mx-auto tw-gap-x-6">
                    <input type="submit" value="Delete" name="deleteEvent" class=" tw-bg-transparent tw-border-4 tw-border-red-500 tw-w-24 tw-text-red-700 tw-text-lg tw-p-2 tw-rounded-lg hover:tw-bg-red-500 hover:tw-text-white">
                    <input type="submit" value="Update" name="updateEvent" class="tw-shadow-lg hover:tw-shadow-none tw-shadow-blue-500 tw-bg-blue-700 tw-w-24 tw-text-white tw-p-3 tw-rounded-lg tw-text-lg">
                </div>
            </form>
        </div>
    <?php
}
$resultData->closeCursor();
    ?>
    </body>

    </html>