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

    <!-- @audit-info Event list -->
    <div style="padding-right:40%;padding-left: 5%;">
        <ul class="breadcrumb" style="padding-top: 130px;">
            <li><a href="home.php">Home</a></li>
            <li>Events</li>
        </ul>
        <div class="pill">Events</div>
        <br>
    </div>
    <div class=" tw-bg-slate-300 tw-shadow-lg tw-shadow-slate-500 md:tw-mx-20 tw-mx-5 tw-p-10 tw-rounded-md tw-mb-40" data-aos="zoom-in-up" data-aos-duration="2000">
        <div class=" tw-text-center tw-capitalize tw-text-5xl md:tw-text-7xl" style="font-family: Brush Script MT;">events </div>
        <?php
        $query = "SELECT  ev.event_id,ec.event_category_type, ev.event_title, ev.event_description, ev.event_venue, ev.event_start, ev.event_end FROM event_category as ec inner join event ev on ec.event_category_id = ev.event_category_id  order by ev.event_id  desc";
        $resultData = $dataBase->prepare($query);
        $resultData->execute();
        $rows = $resultData->fetchall(PDO::FETCH_BOTH);
        foreach ($rows as $row) {
        ?>
            <a target="_self" href="event_detail.php?id=<?php echo sha1($row['event_id']) ?>">
                <div class=" tw-overflow-hidden tw-group/item tw-flex-col tw-flex tw-h-26 tw-container tw-bg-white tw-rounded-2xl tw-my-10 tw-shadow-lg text-dark">
                    <div class=" tw-flex-row tw-flex">
                        <img src="<?php echo "./image/events/event-" . $row['event_id'] . ".1.webp" ?>" class="md:tw-mt-3 tw-mt-5 md:tw-ml-10 tw-ml-5 tw-rounded-full md:tw-w-10 tw-w-7 tw-h-7 md:tw-h-auto" alt="">
                        <div class=" tw-w-2/5 tw-mt-5 tw-ml-3 tw-font-serif md:tw-text-xl tw-text-base"><?php echo $row['event_title'] ?></div>
                        <div class=" group-hover/item:tw-visible md:tw-invisible md:tw-w-2/8 tw-mx-auto tw-mt-6 tw-font-mono md:tw-text-lg tw-text-xs tw-flex tw-flex-row"><i class=" tw-font-bold tw-mx-3">Date</i><?php $dt = new DateTime($row['event_start']);
                                                                                                                                                                                                                    echo $dt->format('j-M-Y'); ?></div>
                    </div>
                    <hr class=" tw-border-black tw-mx-auto tw-block tw-w-11/12 tw-mt-3">
                    <div class=" tw-flex tw-flex-row tw-mx-auto md:tw-text-lg tw-text-sm">
                        <i class=" tw-font-bold tw-mx-3">Category</i>
                        <div class=" tw-font-mono"><?php echo ucfirst($row['event_category_type']) ?></div>
                    </div>
                </div>
            </a>
        <?php
        }
        ?>
    </div>
    <?php include './links/include/footer.php' ?>
</body>

</html>