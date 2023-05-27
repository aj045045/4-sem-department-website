<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include "links/include/link.php" ?>
    <a href="./../"></a>
<style>
</style>
</head>

<body>

    <!-- Scroll button -->
    <?php include "links/include/header.php" ?>
    <div style="padding-right:7%;padding-left:7%;">
        <br>
        <ul class="breadcrumb" style="padding-top:130px">
            <li><a href="home.php">Home</a></li>
            <li>Awards</li>
        </ul>
        <div class="container">
            <div class="pill">Awards</div>
            <br>
            <br>
            <?php
            include "links/include/db.php"; 
            $sql = "SELECT * FROM achievement";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $awardDate = date('F Y', strtotime($row['award_time']));
                    $facultyName = $row['award_winner'];
                    $awardName = $row['award_name'];
                    $awardPlace = $row['award_place'];
                    ?>
                    <div class="border border-3 row mt-2">
                        <div class="title-box p-2 col-12 col-md-2 m-auto">
                            <div class="d-flex flex-md-column flex-row justify-content-around align-items-center">
                                <p><?php echo $awardDate; ?></p>
                            </div>
                        </div>
                        <div class="title-box p-2 col-12 col-md-10 border border-1">
                            <h3 class="pb-1 fs-5 fw-bolder">Faculty Name: <span class="text-secondary fw-normal"><?php echo $facultyName; ?></span></h3>
                            <h3 class="pb-1 fs-5 fw-bolder">Award:<span class="text-secondary fw-normal"><?php echo $awardName; ?></span></h3>
                            <h3 class="pb-1 fs-5 fw-bolder">Place:<span class="text-secondary fw-normal"><?php echo $awardPlace; ?></span></h3>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "No awards found.";
            }
            ?>
        </div>
        
    </div>
    <br><br><br>
    <?php include "links/include/footer.php" ?>
</body>

</html>
