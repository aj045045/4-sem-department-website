<!-- //  TODO: About page
-->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include "links/include/link.php" ?>
    <a href="./../"></a>
<style>
    .youtube-logo{
        max-width: 100px;
    }
    @media screen and (min-width:992px){
        .youtube-logo{
            max-width: 130px;
        }
    }
</style>
</head>

<body>

    <!-- Scroll button -->
    <?php include "links/include/header.php" ?>
    <div style="padding-right:7%;padding-left:7%;">
        <br>
        <ul class="breadcrumb" style="padding-top:130px">
            <li><a href="home.php">Home</a></li>
            <li>e-PG Pathshala</li>
        </ul>
        <div class="container">
            <div class="pill">e-PG Pathshala and Virtual Labs</div>
            <br>
            <br>
            <div class="border border-3 row">
                <div class="title-box col-md-8 col-12 p-2">
                    <a href="https://epgp.inflibnet.ac.in/Home/ViewSubject?catid=fBYckQKJvP3a/8Vd3L08tQ==" class="fs-2 fw-bold text-primary">e-PG Pathshala</a>
                    <p class="fs-5">e-PG Pathshala is an initiative of the MHRD under its National Mission on Education through ICT (NME-ICT) being executed by the UGC.</p>
                </div>
                <div class="btn-box col-md-2 col-4 m-auto"> <a href="https://epgp.inflibnet.ac.in/Home/About" class="pill">Read...</a> </div>
                <div class="col-md-2 col-6">
                    <div class="m-auto text-center">
                        <a href="https://www.youtube.com/watch?v=cLKmPuRnHk8" class="m-auto">
                            <img class="youtube-logo" src="image/logos/youtube.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="mt-3 border border-3 row">
                <div class="title-box col-md-8 col-12  p-2">
                    <a href="https://www.vlab.co.in/" class="fs-2 fw-bold text-primary">Virtual Labs</a>
                    <p class="fs-5">Virtual Labs project is an initiative of Ministry of Human Resource Development (MHRD), Government of India under the aegis of National Mission on Education through Information and Communication Technology (NMEICT).</p>
                </div>
                <div class="btn-box col-md-2 col-4 m-auto"> <a href="https://www.vlab.co.in/about-us" class="pill">Read...</a> </div>
                <div class="col-md-2 col-8">
                    <div class="m-auto text-center">
                        <a href="https://youtu.be/FT2e3UvKteM" class="m-auto">
                            <img class="youtube-logo" src="image/logos/youtube.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <br><br><br>
    <?php include "links/include/footer.php" ?>
</body>

</html>