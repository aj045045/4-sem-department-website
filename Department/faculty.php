<!doctype html>
<html lang="en">
<!-- TODO: Faculty page 
-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include "links/include/link.php"?>
</head>
<style>
.size {
    padding-left: 20%;
    padding-right: 20%;
}
/** Cards [ faculty.html ] */
.card-body .card-title .badge {
    background-color: #016064;
}

.card {
    background-color: #ffffffd3;
    height: 317px;
    width: 200px;
    overflow: hidden;
    border-radius: 50%;
}
.card:hover {
    box-shadow: 4.2px 8.3px 8.3px hsl(0deg 0% 0% / 0.37);
    overflow: auto;
    z-index: 7;
}
.card:hover::-webkit-scrollbar {
    width: 5px;
    height: 5px;
}

.card:hover::-webkit-scrollbar-thumb {
    border-radius: 30px;
    background-color: grey;
}

.card-text {
    color: black;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}

.card-round {
    border-radius:50%;
    width: 100%;
}

</style>

<body>
    <?php include "links/include/header.php"?>
    <div style="padding-right:7%;padding-left:7%;">
        <br>
        <ul class="breadcrumb" style="padding-top:130px;">
            <li><a href="home.php">Home</a></li>
            <li>Faculty</li>
        </ul>

        <span class="pill">FACULTY DETAILS</span>
        <div class="size">
            <div class="container">
                <br><br>
                <br>
                <div class="row row-sm-cols-1 row-cols-md-2 row-cols-xl-3 gx-1 gy-4 ">
                    <div class="col">
                        <div class="card"><a href="fd1.php" class="card-link">
                                <div data-bs-toggle="tooltip" title="CLICK TO KNOW MORE">
                                    <img src="image/faculties/jyotiPareek.webp" class="card-round p-4">
                                </div>
                            </a>
                            <div class="card-body">
                                <h5 class="card-title"> <span class="badge">Dr. Jyoti S Pareek</span></h5>
                                <p class="card-text">👤| Head of Department and Lecturer<br></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card"><a href="fd2.php" class="card-link">
                                <div data-bs-toggle="tooltip" title="CLICK TO KNOW MORE">

                                    <img src="image/faculties/hirenJoshi.webp" class="card-round p-4">
                                </div>
                            </a>
                            <div class="card-body">
                                <h5 class="card-title"><span class="badge">Dr. Hiren D Joshi</span></h5>
                                <p class="card-text">👤| Professor </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card"><a href="fd3.php" class="card-link">
                                <div data-bs-toggle="tooltip" title="CLICK TO KNOW MORE">

                                    <img src="image/faculties/kamaljitLakhtaria.webp" class="card-round p-4">
                                </div>
                            </a>
                            <div class="card-body">
                                <h5 class="card-title"><span class="badge">Dr .Kamaljit I Lakhtaria</span></h5>
                                <p class="card-text">👤| Associate Professor</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <a href="fd4.php" class="card-link">
                                <div data-bs-toggle="tooltip" title="CLICK TO KNOW MORE">

                                    <img src="image/logos/admin.webp" class="card-round p-4">
                                </div>
                            </a>
                            <div class="card-body">
                                <h5 class="card-title"><span class="badge">Dr. Hardik J Joshi</span></h5>
                                <p class="card-text">👤|Assistant Professor</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card"><a href="fd5.php" class="card-link">
                                <div data-bs-toggle="tooltip" title="CLICK TO KNOW MORE">

                                    <img src="image/faculties/jayPatel.webp" class="card-round p-4">
                                </div>
                            </a>
                            <div class="card-body">
                                <h5 class="card-title"><span class="badge">Mr. Jaykumar Patel</span></h5>
                                <p class="card-text">👤|Assistant Professor</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card"><a href="fd6.php" class="card-link">
                                <div data-bs-toggle="tooltip" title="CLICK TO KNOW MORE">

                                    <img src="image/logos/admin.webp" class="card-round p-4">
                                </div>
                            </a>
                            <div class="card-body">
                                <h5 class="card-title"><span class="badge">Dr. Khyati Rami</span></h5>
                                <p class="card-text">👤| Lecturer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card"><a href="fd7.php" class="card-link">
                                <div data-bs-toggle="tooltip" title="CLICK TO KNOW MORE">

                                    <img src="image/logos/admin.webp" class="card-round p-4">
                                </div>
                            </a>
                            <div class="card-body">
                                <h5 class="card-title"><span class="badge">Dr. Maitri Jhaveri</span></h5>
                                <p class="card-text">👤| Lecturer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card"><a href="fd8.php" class="card-link">
                                <div data-bs-toggle="tooltip" title="CLICK TO KNOW MORE">

                                    <img src="image/faculties/suchitPurohit.webp" class="card-round p-4">
                                </div>
                            </a>
                            <div class="card-body">
                                <h5 class="card-title"><span class="badge">Dr. Suchit Purohit</span></h5>
                                <p class="card-text">👤| Lecturer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <a href="fd9.php" class="card-link">
                                <div data-bs-toggle="tooltip" title="CLICK TO KNOW MORE">

                                    <img src="image/faculties/bhumikaShah.webp" class="card-round p-4">
                                </div>
                            </a>
                            <div class="card-body">
                                <h5 class="card-title"><span class="badge">Dr. Bhumika Shah</span></h5>
                                <p class="card-text">👤| Lecturer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card"><a href="fd10.php" class="card-link">
                                <div data-bs-toggle="tooltip" title="CLICK TO KNOW MORE">

                                    <img src="image/faculties/jignaSatani.webp" class="card-round p-4">
                                </div>
                            </a>
                            <div class="card-body">
                                <h5 class="card-title"><span class="badge">Dr. Jigna Satani</span></h5>
                                <p class="card-text">👤| Lecturer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    <?php include "links/include/footer.php"?>
</body>

</html>