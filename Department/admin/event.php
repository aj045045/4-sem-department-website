<?php
$dns = "mysql:host=localhost;dbname=dcsdb";
$user = "root";
$dataBase = new PDO($dns, $user, "");
try {
    if (isset($_POST['eventCategorySubmit'])) {
        $category = $_POST['eventCategory'];
        $query = "INSERT INTO event_category(event_category_type) VALUES (:category)";
        $resultData = $dataBase->prepare($query);
        $resultData->bindValue(':category', $category);
        if (!$resultData->execute()) {
            throw new Exception(" Data not saved");
        }
        $resultData->closeCursor();
    }
    if (isset($_POST['eventSubmit'])) {
        $title = isset($_POST['title']) ? $_POST['title'] : throw new Exception("Enter the title");
        $category  = isset($_POST['category']) ? $_POST['category'] : throw new Exception("Enter the category");
        $description  = isset($_POST['description']) ? $_POST['description'] : throw new Exception("Enter the description");
        $venue  = isset($_POST['venue']) ? $_POST['venue'] : throw new Exception("Enter the venue");
        $startTime  = isset($_POST['startTime']) ? $_POST['startTime'] : throw new Exception("Enter the startTime");
        $endTime  = isset($_POST['endTime']) ? $_POST['endTime'] : throw new Exception("Enter the endTime");
        $imageName = $_FILES['file-image']['name'];
        $imageTmpName = $_FILES['file-image']['tmp_name'];
        $query = "INSERT INTO event(event_title,event_description,event_venue,event_start,event_end,event_category_id) VALUES (:title,:description,:venue,:startTime,:endTime,:category)";
        $resultData = $dataBase->prepare($query);
        $resultData->bindValue(':title', $title);
        $resultData->bindValue(':description', $description);
        $resultData->bindValue(':venue', $venue);
        $resultData->bindValue(':startTime', $startTime);
        $resultData->bindValue(':endTime', $endTime);
        $resultData->bindValue(':category', $category);
        if (!$resultData->execute()) {
            throw new Exception(" Data not saved");
        }
        $lastId = $dataBase->lastInsertId();
        $resultData->closeCursor();
        $imgIncrement = 1;
        foreach ($imageTmpName as $img) {
            $location = "./image/events/event-" . $lastId . "." . $imgIncrement . ".webp";
            $uploadFile = move_uploaded_file($img, "./." . $location);
            if ($uploadFile == 1) {
                $imageQuery = $dataBase->prepare("INSERT INTO photos(photo_document,event_id)  VALUES (:document,:id)");
                $imageQuery->bindValue(':document', $location);
                $imageQuery->bindValue(':id', $lastId);
                $imageQuery->execute();
                $imageQuery->closeCursor();
                $imgIncrement++;
            }
        }
    }
} catch (Exception $exc) {
    echo "ERROR :{$exc->getMessage()} of an event at line number {$exc->getLine()} on the file {$exc->getFile()}";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../links/bs5/bs.min.css">
    <script src="./include/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./../links/css/tw.css">
    <title>Event </title>
    <style>
        input[type=number]::-webkit-outer-spin-button,
        input[type=number]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .modal-footer>* {
            display: block;
            margin: auto;
        }

        .form-control {
            width: 9cm;
        }

        .card-body {
            display: block;
            margin: 0px 80px;
        }

        .row>* {
            padding: 0px;
        }

        .card-img-top {
            margin: 1ch 30%;
            max-width: 150px;
        }

        .text-primary:link {
            text-decoration: none;
        }

        .text-primary:hover {
            text-decoration: underline;
        }

        .linkers {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 60%;
            display: block;
        }

        .card {
            background-color: #ffffffd3;
            height: 9in;
            width: auto;
            overflow: hidden;
            margin-bottom: 1in;
        }

        input[type="file"] {
            display: none;
        }

        .preview>#file-preview {
            width: 100px;
            border: 50%;
            display: block;
            margin: auto;
        }

        input {
            margin: 4px 0px;
        }

        form {
            padding-left: 30px;
        }

        .modal-body {
            display: block;
            margin: auto;
        }

        .card {
            height: 1in;
            width: 1in;
            margin: .05in;
        }

        .card-img-top {
            width: .8in;
            display: block;
            margin: auto;
            border-radius: 50%;
        }
    </style>
</head>

<body class="tw-bg-slate-200">
    <!-- @audit-info Add the event and event category button -->
    <div class=" tw-flex tw-flex-row tw-m-8">
        <div class="tw-shadow-md tw-shadow-slate-400 sm:tw-w-3/4 tw-flex sm:tw-flex-row tw-flex-col tw-bg-white tw-mx-8 tw-rounded-md sm:tw-h-10">
            <button type="button" class="tw-flex sm:tw-flex-row tw-flex-col tw-my-2 " data-bs-toggle="modal" data-bs-target="#modalId">
                <img class="tw-hidden md:tw-block tw-w-6 tw-mx-2 tw-rounded-full tw-h-6" id="image' . $i . '-preview" src="./../image/logos/plus-icon.jpg" alt="Title">
                <!-- Modal button -->
                Do you want to add event in for the department of computer science ?
            </button>
        </div>
        <div class="tw-shadow-md tw-shadow-slate-400 sm:tw-w-1/4 tw-flex sm:tw-flex-row tw-flex-col tw-bg-white tw-mx-8 tw-px-10 tw-py-2 tw-rounded-md sm:tw-h-10">
            <button type="button" class="tw-flex sm:tw-flex-row tw-flex-col" data-bs-toggle="modal" data-bs-target="#modalAddCategory">
                <img class="tw-hidden sm:tw-block tw-w-6 tw-rounded-full tw-h-6 " id="image' . $i . '-preview" src="./../image/logos/plus-icon.jpg" alt="Title">
                Add Event Category
            </button>
        </div>
    </div>
    <!-- Modal Body -->
    <div class="modal tw-shadow-sm sm:tw-w-2/4 sm:tw-mx-56" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title tw-text-xl" id="modalTitleId">Add event </h5>
                    <button type="button" class=" tw-text-black tw-font-extrabold" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body">
                    <div class="preview">
                        <img src="./../image/logos/bgfreelogo.webp" id="file-preview" class="center" alt="department of computer science logos">
                    </div>
                    <form action="" method="post" id="userForm" enctype="multipart/form-data">
                        <table>
                            <tr>
                                <td>
                                    Title :
                                </td>
                                <td>
                                    <input type="text" class=" focus:tw-rounded-md focus:tw-ring-2 focus:tw-ring-blue-200 focus:tw-outline-none" placeholder="Title" name="title">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Category :
                                </td>
                                <td>
                                    <select name="category" class="focus:tw-rounded-md focus:tw-ring-2 focus:tw-ring-blue-200 focus:tw-outline-none" required>
                                        <option value="NONE" disabled selected class=" tw-bg-blue-600 tw-text-white">Select the Category</option>
                                        <?php
                                        $query = "SELECT * FROM event_category";
                                        $resultQuery = $dataBase->query($query);
                                        $row = $resultQuery->fetchall(PDO::FETCH_BOTH);
                                        foreach ($row as $rs) {
                                            echo '<option value="' . $rs['event_category_id'] . '">' . ucfirst($rs['event_category_type']) . '</option>';
                                        }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Description :
                                </td>
                                <td>
                                    <textarea name="description" cols="23" class=" focus:tw-rounded-md focus:tw-ring-2 focus:tw-ring-blue-200 focus:tw-outline-none" rows="10" form="userForm" placeholder="Description"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Venue :
                                </td>
                                <td>
                                    <input type="text" name="venue" class=" focus:tw-rounded-md focus:tw-ring-2 focus:tw-ring-blue-200 focus:tw-outline-none" placeholder="Venue">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Starting at :
                                </td>
                                <td>
                                    <input type="datetime-local" class=" focus:tw-rounded-md focus:tw-ring-2 focus:tw-ring-blue-200 focus:tw-outline-none" name="startTime" id="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Ending at :
                                </td>
                                <td>
                                    <input type="datetime-local" class=" focus:tw-rounded-md focus:tw-ring-2 focus:tw-ring-blue-200 focus:tw-outline-none" name="endTime" id="">
                                </td>
                            </tr>
                            <tr>
                                <td class="tw-gap-x-20 tw-grid-cols-3 tw-grid">
                                    <?php
                                    for ($i = 0; $i < 5; $i++) {
                                        echo '<label >
                                        <div class="card">
                                            <img class="card-img-top" id="image' . $i . '-preview" src="./../image/logos/plus-icon.jpg" alt="Title">
                                        </div>
                                        <input type="file" name="file-image[]" id="image' . $i . '" accept="image/webp" onchange="showPreview(event)">
                                    </label>';
                                    }
                                    ?>
                                </td>
                            </tr>
                        </table>
                        <div class=" modal-footer">
                            <button type="button" class="hover:tw-border-none tw-border-2 tw-rounded-md tw-border-red-400 tw-text-red-500 tw-w-24 hover:tw-bg-red-500 hover:tw-text-white" data-bs-dismiss="modal">Close</button>
                            <input class="tw-w-24 tw-rounded-md tw-bg-blue-500 tw-text-white focus:tw-ring-2 focus:tw-ring-offset-1 focus:tw-ring-blue-400" type="submit" value="Submit" name="eventSubmit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal ended -->

    <!-- @audit-info Modal Event Category -->
    <!-- Modal Body -->
    <div class="modal tw-shadow-sm" id="modalAddCategory" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title tw-text-lg" id="modalTitleId">Add Event Category</h5>
                    <button type="button" class=" tw-text-black tw-font-extrabold" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <table>
                            <tr>
                                <td>Event Category :</td>
                                <td><input type="text" name="eventCategory" class=" focus:tw-rounded-sm focus:tw-ring-2 focus:tw-ring-blue-400 focus:tw-outline-none" placeholder="Enter Event Category" required></td>
                            </tr>
                        </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="hover:tw-border-none tw-border-2 tw-rounded-md tw-border-red-400 tw-text-red-500 tw-w-24 hover:tw-bg-red-500 hover:tw-text-white" data-bs-dismiss="modal">Close</button>
                    <input class="tw-w-24 tw-rounded-md tw-bg-blue-500 tw-text-white focus:tw-ring-2 focus:tw-ring-offset-1 focus:tw-ring-blue-400" type="submit" value="Submit" name="eventCategorySubmit">
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal ended -->

    <!-- @audit-info Event list -->
    <div class=" tw-bg-slate-300 tw-shadow-lg tw-shadow-slate-500 tw-mx-20 tw-p-10 tw-rounded-md">
        <div class=" tw-mx-96 tw-capitalize tw-text-5xl"  style="font-family: Brush Script MT;">event list</div>
        <?php
        $query = "SELECT  ev.event_id,ec.event_category_type, ev.event_title, ev.event_description, ev.event_venue, ev.event_start, ev.event_end FROM event_category as ec inner join event ev on ec.event_category_id = ev.event_category_id  order by ev.event_id  desc";
        $resultData = $dataBase->prepare($query);
        $resultData->execute();
        $rows = $resultData->fetchall(PDO::FETCH_BOTH);
        foreach ($rows as $row) {
        ?>
            <a target="_self" href="event_detail.php?id=<?php echo sha1($row['event_id'])?>">
                <div class=" tw-flex-col tw-flex tw-h-26 tw-bg-white tw-rounded-2xl tw-my-10 tw-shadow-lg">
                    <div class=" tw-flex-row tw-flex">
                        <img src="<?php echo "./../image/events/event-".$row['event_id'].".1.webp"?>" class="tw-h-10 tw-mt-3 tw-ml-10 tw-rounded-full tw-w-10 " alt="">
                        <div class=" tw-w-2/5 tw-mt-5 tw-ml-3 tw-items-start tw-font-serif tw-text-lg"><?php echo $row['event_title']?></div>
                        <div class="tw-w-2/8 tw-mx-auto tw-mt-6 tw-font-mono"><i class=" tw-font-bold tw-mx-3">Date</i><?php $dt = new DateTime($row['event_start']); echo $dt->format('j-M-Y'); ?></div>
                    </div>
                    <hr class=" tw-border-black tw-mx-auto tw-block tw-w-11/12 tw-mt-3">
                    <div class=" tw-flex tw-flex-row tw-mx-auto">
                        <i class=" tw-font-bold tw-mx-3">Category</i>
                        <div class=" tw-font-mono"><?php echo ucfirst($row['event_category_type']) ?></div>
                    </div>
                </div>
            </a>
        <?php
        }
        ?>
    </div>
    <script>
        function showPreview(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var tmpevent = event.target.id;
                var event = tmpevent.concat("-", "preview");
                var preview = document.getElementById(event);
                preview.src = src;
                console.log("Preview", src);
                preview.style.display = "block";
            }
        }
    </script>
</body>

</html>