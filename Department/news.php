<?php
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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <link rel="stylesheet" href="./links/bs5/bs.min.css">
    <script src="./admin/include/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./links/css/tw.css">
    <link rel="shortcut icon" href="image/logos/logo.webp" type="image/png">
    <title>Depart. of Computer science</title>
    <?php include "links/include/link.php" ?>
</head>

<body>
    <?php include "links/include/header.php" ?>


    <div class=" tw-bg-slate-300 tw-shadow-lg tw-shadow-slate-500 tw-w-3/5 tw-mx-80 tw-p-10 tw-rounded-md tw-m-40" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
        <div class=" tw-text-center tw-capitalize tw-text-7xl first-letter:tw-font-serif" style="font-family: Brush Script MT;">News </div>
        <?php
        $dns = "mysql:host=localhost;dbname=dcsdb";
        $user = "root";
        $dataBase = new PDO($dns, $user, "");
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
                        <button type="button" class=" tw-bg-transparent tw-border-4 tw-border-red-500 tw-w-24 tw-text-red-700 tw-text-lg tw-rounded-lg hover:tw-bg-red-500 hover:tw-text-white" data-bs-dismiss="modal">Close</button>
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
    <?php include "links/include/footer.php" ?>
</body>

</html>