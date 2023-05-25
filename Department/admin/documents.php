<?php

use FFI\Exception;

$dns = "mysql:host=localhost;dbname=dcsdb";
$user = "root";
$dataBase = new PDO($dns, $user, "");
try {
    function deleteDocument($id)
    {
        $dns = "mysql:host=localhost;dbname=dcsdb";
        $dataBase = new PDO($dns, "root", "");
        $resultQuery = $dataBase->prepare("SELECT document_id, document_location FROM documents WHERE document_id = ?");
        if (!$resultQuery->execute(array($id))) {
            throw new Exception(" Data not found of id = $id");
        }
        $row = $resultQuery->fetch(PDO::FETCH_ASSOC);
        unlink("./." . $row['document_location']);
        $resultQuery->closeCursor();
        $resultQuery = $dataBase->prepare("DELETE FROM documents WHERE document_id = ?");
        if (!$resultQuery->execute(array($id))) {
            throw new Exception(" Data not saved in the database");
        }
        $resultQuery->closeCursor();
    }

    if (isset($_GET['delete'])) {
        deleteDocument($_GET['delete']);
    }
    if (isset($_POST['documentSubmit'])) {
        $title = isset($_POST['documentTitle']) ? $_POST['documentTitle']  : throw new Exception("Please select the  title");
        $category = isset($_POST['documentCategory']) ? $_POST['documentCategory']  : throw new Exception("Please select the  category");
        $course = isset($_POST['documentCourse']) ? $_POST['documentCourse']  : throw new Exception("Please select the Course ");
        $pdfName = isset($_FILES['documentPdf']['name']) ? $_FILES['documentPdf']['name']  : throw new Exception("Please select the  Pdf");
        $pdfTmpName = isset($_FILES['documentPdf']['tmp_name']) ? $_FILES['documentPdf']['tmp_name']  : throw new Exception("Please select the  Pdf");

        $query = "SELECT document_id FROM documents order by document_id DESC LIMIT 1";
        $resultQuery = $dataBase->query($query);
        $row = $resultQuery->fetch(PDO::FETCH_ASSOC);
        $lastId = 1 + $row['document_id'];

        //NOTE - Location Path of a pdf
        $location = match ($category) {
            1 => "./documents/results/result" . "-" . $lastId . "-" . $course . "-" . $category . ".pdf",
            2 => "./documents/papers/paper" . "-" . $lastId . "-" . $course . "-" . $category . ".pdf",
            3 => "./documents/circulars/circular" . "-" . $lastId . "-" . $course . "-" . $category . ".pdf",
        };

        // NOTE - Inserting the data into database
        $query = "INSERT INTO documents( document_title, document_location, course_id, document_category_id) VALUE (?,?,?,?)";
        $resultQuery = $dataBase->prepare($query);
        if ($resultQuery->execute(array($title, $location, $course, $category))) {
            $uploadFile = move_uploaded_file($pdfTmpName, "./." . $location);
        } else {
            throw new Exception(" Data not saved in the database");
        }
        $resultQuery->closeCursor();
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
    <title>News</title>
    <link rel="stylesheet" href="./../links/bs5/bs.min.css">
    <script src="./include/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./../links/css/tw.css">
    <link rel="shortcut icon" href="image/logos/logo.webp" type="image/png">
    <title>Depart. of Computer science</title>
    <style>
        select,
        input {
            width: 90%;
            margin-right: 20px;
        }
    </style>
</head>

<body class=" tw-bg-slate-200">
    <!-- //NOTE -  Add the News and News category button -->
    <div class="tw-shadow-md tw-m-8 tw-shadow-slate-400 sm:tw-w-3/4 tw-flex sm:tw-flex-row tw-flex-col tw-bg-white tw-mx-8 tw-rounded-md sm:tw-h-10">
        <button type="button" class="tw-flex sm:tw-flex-row tw-flex-col tw-my-2 " data-bs-toggle="modal" data-bs-target="#modalId">
            <img class="tw-hidden md:tw-block tw-w-6 tw-mx-2 tw-rounded-full tw-h-6 " id="image' . $i . '-preview" src="./../image/logos/plus-icon.jpg" alt="Title">
            <!-- Modal button -->
            Do you want to add <strong class="tw-mx-2 ">Result&nbsp;/&nbsp;Papers&nbsp;/&nbsp;Circular</strong> for the department of computer science ?
        </button>
    </div>

    <!-- Modal Body -->
    <div class="modal tw-shadow-sm sm:tw-w-2/4 sm:tw-mx-56" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title tw-text-xl" id="modalTitleId">Add News / Paper </h5>
                    <button type="button" class=" tw-text-black tw-font-extrabold" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body">
                    <form method="post" enctype="multipart/form-data">
                        <input type="text" class=" focus:tw-rounded-md focus:tw-ring-4 focus:tw-ring-blue-200 focus:tw-outline-none tw-my-5 tw-w-full" name="documentTitle" placeholder="Enter the Title"><br>
                        <select name="documentCategory" class="focus:tw-rounded-md focus:tw-ring-2 focus:tw-ring-blue-200 focus:tw-outline-none" required>
                            <option disabled selected class=" tw-bg-blue-600 tw-text-white">Select the document Category</option>
                            <?php
                            $query = "SELECT * FROM document_category";
                            $resultQuery = $dataBase->query($query);
                            $row = $resultQuery->fetchall(PDO::FETCH_BOTH);
                            foreach ($row as $rs) {
                                echo '<option value="' . $rs['document_category_id'] . '">' . ucfirst($rs['document_category_type']) . '</option>';
                            }
                            ?>
                        </select><br><br>
                        <select name="documentCourse" class="focus:tw-rounded-md focus:tw-ring-2 focus:tw-ring-blue-200 focus:tw-outline-none" required>
                            <option disabled selected class=" tw-bg-blue-600 tw-text-white">Select the course</option>
                            <?php
                            $query = "SELECT * FROM course";
                            $resultQuery = $dataBase->query($query);
                            $row = $resultQuery->fetchall(PDO::FETCH_BOTH);
                            foreach ($row as $rs) {
                                echo '<option value="' . $rs['course_id'] . '">' . ucfirst($rs['course_name']) . '</option>';
                            }
                            ?>
                        </select><br>
                        <input type="file" class=" tw-mt-5" name="documentPdf" accept=".pdf">
                </div>
                <div class=" modal-footer">
                    <button type="button" class=" tw-bg-transparent tw-border-4 tw-border-red-500 tw-w-24 tw-text-red-700 tw-text-lg tw-rounded-lg hover:tw-bg-red-500 hover:tw-text-white" data-bs-dismiss="modal">Close</button>
                    <input class="tw-w-24 tw-rounded-md tw-h-9 tw-bg-blue-600 tw-text-white focus:tw-ring-2 focus:tw-ring-offset-1 focus:tw-ring-blue-400" type="submit" value="Submit" name="documentSubmit">
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal ended -->

    <!-- data-aos="zoom-in-up" data-aos-duration="2000" -->
    <div class=" tw-bg-slate-300 tw-shadow-lg tw-shadow-slate-500 tw-w-3/5 tw-mx-80 tw-p-10 tw-rounded-md tw-m-40">
        <div class=" tw-text-center tw-capitalize tw-text-7xl" style="font-family: Brush Script MT;">Documents </div>
        <?php
        $query = "select d.document_id, d.document_title, d.document_location,c.course_name, dc.document_category_type from documents d inner join document_category dc on dc.document_category_id = d.document_category_id inner join course c on c.course_id = d.course_id  order by document_id desc";
        $resultQuery = $dataBase->prepare($query);
        $resultQuery->execute();
        $rows = $resultQuery->fetchall(PDO::FETCH_ASSOC);
        foreach ($rows as $row) {
        ?>

            <a target="_blank" href="<?php echo "./." . $row['document_location'] ?>">
                <div class="tw-group/item tw-flex-col tw-flex tw-h-26 tw-bg-white tw-rounded-2xl tw-my-10 tw-shadow-lg text-dark">
                    <div class="tw-flex tw-flex-row">
                        <div class=" tw-w-2/5 tw-m-5 tw-items-start tw-font-serif tw-text-2xl">
                            <?php
                            echo $row['document_title'];
                            ?>
                        </div>
                        <div class="tw-w-2/8 tw-mx-auto tw-mt-6 tw-font-mono tw-flex tw-flex-row"><i class=" tw-font-bold tw-mx-3">Course&nbsp;:</i>
                            <div><?php echo $row['course_name'] ?></div>
                        </div>
                    </div>
                    <hr class=" tw-border-black tw-mx-auto tw-block tw-w-11/12 tw-mt-3">
                    <div class="tw-invisible group-hover/item:tw-visible tw-mx-auto tw-flex tw-flex-row tw-gap-x-10 ">
                        <div class=" tw-flex tw-flex-row tw-my-3 tw-mx-auto tw-bg-blue-700 tw-text-white tw-px-5 tw-rounded-2xl">
                            <i class=" tw-font-bold tw-mx-3">Category&nbsp;:</i>
                            <div class=" tw-font-mono first-letter:tw-capitalize">
                                <?php
                                echo $row['document_category_type'];
                                ?>
                            </div>
                        </div>
                        <a class=" tw-my-3 tw-text-white tw-bg-red-700 tw-px-5 tw-rounded-2xl tw-mx-3 tw-font-bold tw-font-mono" href="documents.php?delete=<?php echo $row['document_id']; ?>">Delete</a>
                    </div>
                </div>
            </a>
        <?php
        }
        ?>
    </div>
    <!-- Optional: Place to the bottom of scripts -->
    <script>
        const myModal = new bootstrap.Modal(document.getElementById('modalId'), options);
    </script>
</body>

</html>