<?php
$dns = "mysql:host=localhost;dbname=dcsdb";
$user = "root";
$dataBase = new PDO($dns, $user, "");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="./links/bs5/bs.min.css">
    <script src="./admin/include/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./links/css/tw.css">
    <title>Depart. of Computer science</title>
    <link rel="shortcut icon" href="image/logos/logo.webp" type="image/png">
    <?php
    include './links/include/link.php';
    ?>

</head>

<body>
    <?php include './links/include/header.php' ?>

    <div style="padding-right:40%;padding-left: 5%;">
        <ul class="breadcrumb" style="padding-top: 130px;">
            <li><a href="home.php">Home</a></li>
            <li>Students</li>
            <li>Results</li>
        </ul>
        <div class="pill">Results</div>
        <br>
    </div>
    <!-- @audit-info Event list -->

    <div class=" tw-bg-slate-300 tw-shadow-lg tw-shadow-slate-500 md:tw-mx-20 tw-mx-5 tw-p-10 tw-rounded-md tw-mb-40" data-aos="zoom-in-up" data-aos-duration="2000">
        <div class=" tw-text-center tw-capitalize tw-text-5xl md:tw-text-8xl tw-my-5" style="font-family: Brush Script MT;">Results </div>
        <div class=" tw-flex tw-flex-row tw-gap-x-3">
            <div class=" tw-hidden md:tw-block">I want to see </div>
            <form method="get" id="selectForm">
                <select class=" tw-h-7 tw-w-20 tw-text-base md:tw-h-8 md:tw-text-lg md:tw-w-40 tw-bg-blue tw-font-bold tw-rounded-md tw-shadow-md tw-shadow-slate-500" name="resultOption" required>
                    <option disabled selected class=" tw-bg-blue-700 tw-text-white">Choose course</option>
                    <?php
                    $query = "SELECT * FROM course";
                    $resultQuery = $dataBase->query($query);
                    $row = $resultQuery->fetchall(PDO::FETCH_BOTH);
                    foreach ($row as $rs) {
                        echo '<option value="' . $rs['course_id'] . '">' . ucfirst($rs['course_name']) . '</option>';
                    }
                    $resultQuery->closeCursor();
                    ?>
                </select>
                <input type="submit" value="Submit" class=" tw-hidden">
            </form>
            <div class=" tw-hidden md:tw-block">
                course result
            </div>
        </div>
        <div class=" tw-my-10 tw-flex tw-flex-col tw-gap-y-10">
            <?php
            if (isset($_GET['resultOption'])) {
                $option = $_GET['resultOption'];
                $GLOBALS['query'] = "SELECT document_title, document_location FROM documents WHERE document_category_id = 1 AND course_id = $option  order by document_id desc";
            } else {
                $GLOBALS['query'] = "SELECT document_title, document_location FROM documents WHERE document_category_id = 1  order by document_id desc";
            }
            $query = $GLOBALS['query'];
            $resultData = $dataBase->query($query);
            $rows = $resultData->fetchall(PDO::FETCH_ASSOC);
            foreach ($rows as $row) {
            ?>
                <a class="tw-text-base tw-p-2 md:tw-text-xl tw-block md:tw-p-3 tw-shadow-md tw-bg-white tw-rounded-lg" target="_blank" href="<?php echo $row['document_location'] ?>">
                    <div class=" text-dark">
                        <?php
                        echo $row['document_title'];
                        ?>
                    </div>
                </a>
        </div>
    <?php
            }
            $resultQuery->closeCursor();
    ?>
    </div>
    </div>
    <?php include './links/include/footer.php' ?>
    <!-- @audit-info Jquery to form submit on click  -->
    <script>
        $(document).ready(
            function() {
                $("select").change(
                    function() {
                        $('#selectForm').submit();
                    }
                )
            }
        );
    </script>
</body>

</html>