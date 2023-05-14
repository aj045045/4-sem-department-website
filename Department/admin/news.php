<?php
$dns = "mysql:host=localhost;dbname=dcsdb";
$user = "root";
$dataBase = new PDO($dns, $user, "");
try {
    function deleteNews($id)
    {
        $dns = "mysql:host=localhost;dbname=dcsdb";
        $dataBase = new PDO($dns, "root", "");
        $resultQuery = $dataBase->prepare("DELETE FROM news WHERE news_id = ?");
        if (!$resultQuery->execute(array($id))) {
            throw new Exception(" Data not saved in the database");
        }
        $resultQuery->closeCursor();
    }
    if (isset($_POST['newsSubmit'])) {
        $title = isset($_POST['newsTitle']) ? $_POST['newsTitle'] : throw new Exception(" Please enter the title ");
        $expireDate = isset($_POST['newsExpireDate']) ? $_POST['newsExpireDate'] : throw new Exception(" Please enter the expire Date");
        $description = isset($_POST['newsDescription']) ? $_POST['newsDescription'] : throw new Exception(" Please enter the Description of an event");
        $category = isset($_POST['newNewsCategory']) ? $_POST['newNewsCategory'] : throw new Exception(" Please enter the Category");
        $query = "INSERT INTO news(news_title, news_description, expire_date, news_category_id) VALUES (:title, :description, :expireDate, :category)";
        $resultQuery = $dataBase->prepare($query);
        $resultQuery->bindValue(':title', $title);
        $resultQuery->bindValue(':description', $description);
        $resultQuery->bindValue(':expireDate', $expireDate);
        $resultQuery->bindValue(':category', $category);
        if (!$resultQuery->execute()) {
            throw new Exception(" Data not saved in the database");
        }
        $resultQuery->closeCursor();
    }
    if (isset($_POST['newsCategorySubmit'])) {
        $category = isset($_POST['newsCategory']) ? $_POST['newsCategory'] : throw new Exception(" Please enter the Category ");
        $resultQuery = $dataBase->prepare("INSERT INTO news_category(news_category_type) VALUES (?)");
        if (!$resultQuery->execute(array($category))) {
            throw new Exception(" Data not saved in the database");
        }
        $resultQuery->closeCursor();
    }
    if (isset($_POST['deleteNews'])) {
        $value = $_POST['deleteNewsValue'];
        deleteNews($value);
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
</head>

<body class=" tw-bg-slate-200">
    <!-- @audit-info Add the News and News category button -->
    <div class=" tw-flex tw-flex-row tw-m-8">
        <div class="tw-shadow-md tw-shadow-slate-400 sm:tw-w-3/4 tw-flex sm:tw-flex-row tw-flex-col tw-bg-white tw-mx-8 tw-rounded-md sm:tw-h-10">
            <button type="button" class="tw-flex sm:tw-flex-row tw-flex-col tw-my-2 " data-bs-toggle="modal" data-bs-target="#modalId">
                <img class="tw-hidden md:tw-block tw-w-6 tw-mx-2 tw-rounded-full tw-h-6 " id="image' . $i . '-preview" src="./../image/logos/plus-icon.jpg" alt="Title">
                <!-- Modal button -->
                Do you want to add News for the department of computer science ?
            </button>
        </div>
        <div class="tw-shadow-md tw-shadow-slate-400 sm:tw-w-1/4 tw-flex sm:tw-flex-row tw-flex-col tw-bg-white tw-mx-8 tw-px-10 tw-py-2 tw-rounded-md sm:tw-h-10">
            <button type="button" class="tw-flex sm:tw-flex-row tw-flex-col" data-bs-toggle="modal" data-bs-target="#modalAddCategory">
                <img class="tw-hidden sm:tw-block tw-w-6 tw-rounded-full tw-h-6 " id="image' . $i . '-preview" src="./../image/logos/plus-icon.jpg" alt="Title">
                Add News Category
            </button>
        </div>
    </div>

    <!-- Modal Body -->
    <div class="modal tw-shadow-sm sm:tw-w-2/4 sm:tw-mx-56" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title tw-text-xl" id="modalTitleId">Add News </h5>
                    <button type="button" class=" tw-text-black tw-font-extrabold" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body">
                    <form method="post" id="newsForm">
                        <input type="text" class=" focus:tw-rounded-md focus:tw-ring-4 focus:tw-ring-blue-200 focus:tw-outline-none tw-my-5" name="newsTitle" id="" placeholder="Enter the Title"><br>
                        <select name="newNewsCategory" class="focus:tw-rounded-md focus:tw-ring-2 focus:tw-ring-blue-200 focus:tw-outline-none" required>
                            <option disabled selected class=" tw-bg-blue-600 tw-text-white">Select the News Category</option>
                            <?php
                            $query = "SELECT * FROM news_category";
                            $resultQuery = $dataBase->query($query);
                            $row = $resultQuery->fetchall(PDO::FETCH_BOTH);
                            foreach ($row as $rs) {
                                echo '<option value="' . $rs['news_category_id'] . '">' . ucfirst($rs['news_category_type']) . '</option>';
                            }
                            ?>
                        </select><br>
                        Expire Date :
                        <?php
                        $dt = new DateTime();
                        $dt->modify('+15 Days');
                        $updateDate = $dt->format("Y-m-d");
                        ?>
                        <input type="date" class=" tw-my-5" value="<?php echo $updateDate ?>" name="newsExpireDate">
                        <textarea name="newsDescription" cols="30" class=" tw-my-5 focus:tw-rounded-md focus:tw-ring-4 focus:tw-ring-blue-200 focus:tw-outline-none" rows="10" form="newsForm" placeholder="Description"></textarea>
                </div>
                <div class=" modal-footer">
                    <button type="button" class=" tw-bg-transparent tw-border-4 tw-border-red-500 tw-w-24 tw-text-red-700 tw-text-lg tw-rounded-lg hover:tw-bg-red-500 hover:tw-text-white" data-bs-dismiss="modal">Close</button>
                    <input class="tw-w-24 tw-rounded-md tw-h-9 tw-bg-blue-600 tw-text-white focus:tw-ring-2 focus:tw-ring-offset-1 focus:tw-ring-blue-400" type="submit" value="Submit" name="newsSubmit">
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal ended -->

    <!-- @audit-info Modal News Category -->
    <!-- Modal Body -->
    <div class="modal tw-shadow-sm" id="modalAddCategory" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title tw-text-lg" id="modalTitleId">Add News Category</h5>
                    <button type="button" class=" tw-text-black tw-font-extrabold" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <table>
                            <tr>
                                <td>News Category :</td>
                                <td><input type="text" name="newsCategory" class=" focus:tw-rounded-sm focus:tw-ring-2 focus:tw-ring-blue-400 focus:tw-outline-none" placeholder="Enter News Category" required></td>
                            </tr>
                        </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class=" tw-bg-transparent tw-border-4 tw-border-red-500 tw-w-24 tw-text-red-700 tw-text-lg tw-rounded-lg hover:tw-bg-red-500 hover:tw-text-white" data-bs-dismiss="modal">Close</button>
                    <input class="tw-w-24 tw-rounded-md tw-bg-blue-600 tw-text-white focus:tw-ring-2 focus:tw-ring-offset-1 focus:tw-ring-blue-400 tw-h-9" type="submit" value="Submit" name="newsCategorySubmit">
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal ended -->


    <!-- data-aos="zoom-in-up" data-aos-duration="2000" -->
    <div class=" tw-bg-slate-300 tw-shadow-lg tw-shadow-slate-500 tw-w-3/5 tw-mx-80 tw-p-10 tw-rounded-md tw-m-40">
        <div class=" tw-text-center tw-capitalize tw-text-7xl first-letter:tw-font-serif" style="font-family: Brush Script MT;">News </div>
        <?php
        $query = "select ns.news_id, ns.news_title, ns.news_description, ns.expire_date, nsc.news_category_type from news ns inner join news_category nsc on ns.news_category_id = nsc.news_category_id order by ns.news_id desc;";
        $resultQuery = $dataBase->prepare($query);
        $resultQuery->execute();
        $rows = $resultQuery->fetchall(PDO::FETCH_ASSOC);
        foreach ($rows as $row) {
        ?>

            <button type="button" style="width:100%" data-bs-toggle="modal" data-bs-target="#modalId<?php echo $row['news_id']; ?>">
                <div class=" tw-flex-col tw-flex tw-h-26 tw-bg-white tw-rounded-2xl tw-my-10 tw-shadow-lg text-dark">
                    <div class="tw-flex tw-flex-row">

                        <div class=" tw-w-2/5 tw-mt-5 tw-items-start tw-font-serif tw-text-2xl">
                            <?php
                            echo $row['news_title'];
                            ?>
                        </div>
                        <div class="tw-w-2/8 tw-mx-auto tw-mt-6 tw-font-mono"><i class=" tw-font-bold tw-mx-3">Expire Date</i><?php $dt = new DateTime($row['expire_date']);
                                                                                                                                echo $dt->format('j-M-Y'); ?></div>
                    </div>
                    <hr class=" tw-border-black tw-mx-auto tw-block tw-w-11/12 tw-mt-3">
                    <div class=" tw-flex tw-flex-row tw-my-3 tw-mx-auto tw-bg-blue-600 tw-text-slate-200 tw-px-5 tw-rounded-2xl">
                        <i class=" tw-font-bold tw-mx-3">Category&nbsp;:</i>
                        <div class=" tw-font-mono">
                            <?php
                            echo $row['news_category_type'];
                            ?>
                        </div>
                    </div>
                </div>
            </button>
        <?php
        }
        ?>
    </div>
    <!-- Modal trigger button -->


    <!-- Modal Body -->
    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
    <?php
    foreach ($rows as $row) {
    ?>
        <div class="modal tw-shadow-xl" id="modalId<?php echo $row['news_id'] ?>" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title tw-text-xl" id="modalTitleId">News</h5>
                        <button type="button" class="btn-close tw-font-bold" data-bs-dismiss="modal" aria-label="Close">X</button>
                    </div>
                    <div class="modal-body tw-flex-col tw-flex tw-gap-y-10">
                        <div class=" tw-font-serif tw-text-center tw-text-4xl"><?php
                                                                                echo  $row['news_title'];
                                                                                ?></div>
                        <div class=" tw-font-mono"><?php
                                                    echo $row['news_description'];
                                                    ?></div>
                    </div>
                    <div class="modal-footer">
                        <form method="post">
                            <button type="button" class=" tw-bg-transparent tw-border-4 tw-border-red-500 tw-w-24 tw-text-red-700 tw-text-lg tw-rounded-lg hover:tw-bg-red-500 hover:tw-text-white" data-bs-dismiss="modal">Close</button>
                            <input type="hidden" name="deleteNewsValue" value="<?php echo $row['news_id']; ?>">
                            <input type="submit" class=" tw-h-9 tw-w-24 tw-text-lg tw-rounded-lg tw-bg-blue-700 tw-text-white" value="Delete" name="deleteNews">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php
        $todayDt = new DateTime();
        $newDate = new DateTime($row['expire_date']);
        $dateDiffer = date_diff($todayDt, $newDate);
        if ($dateDiffer->format('%R%a') <= 0) {
            $id = $row['news_id'];
            deleteNews($id);
        }
    }
    ?>
    <!-- Optional: Place to the bottom of scripts -->
    <script>
        const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)
    </script>
</body>

</html>