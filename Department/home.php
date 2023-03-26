<!DOCTYPE html>
<html lang="en">
<!-- TODO: Home page 
-->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "links/include/link.php" ?>
    <?php include "links/include/link.php" ?>
    <style>
        .scroll_bar::-webkit-scrollbar {
            height: 5px;
        }

        img.img {
            align-items: center;
            max-height: 80px;
            margin: auto;
        }

        .scroll_bar {
            height: 1in;
            padding-left: 7%;
            padding-right: 7%;
            margin: 4px, 4px;
            /* background-color: whitesmoke; */
            width: 100%;
            overflow-x: auto;
            overflow-y: hidden;
            white-space: nowrap;
            writing-mode: vertical-lr;
        }

        .scroll_bar:hover::-webkit-scrollbar-thumb {
            border-radius: 50px;
            background-color: grey;
        }

        #more {
            display: none;
        }

        #buttonreadmore {
            backface-visibility: hidden;
            background-color: rgb(11, 64, 140);
            border-radius: 6px;
            border-width: 0;
            box-shadow: rgba(50, 50, 93, .1) 0 0 0 1px inset, rgba(50, 50, 93, .1) 0 2px 5px 0, rgba(0, 0, 0, .07) 0 1px 1px 0;
            color: #fff;
            cursor: pointer;
            font-family: -apple-system, system-ui, "Segoe UI", Roboto, "Helvetica Neue", Ubuntu, sans-serif;
            font-size: 100%;
            height: 40px;
            line-height: 1.15;
            outline: none;
            overflow: hidden;
            position: relative;
            text-align: center;
            transition: all .2s, box-shadow .08s ease-in;
            width: 1.5in;
        }

        #buttonreadmore:focus {
            box-shadow: rgba(50, 50, 93, .1) 0 0 0 1px inset, rgba(50, 50, 93, .2) 0 6px 15px 0, rgba(0, 0, 0, .1) 0 2px 2px 0, rgba(50, 151, 211, .3) 0 0 0 4px;
        }
    </style>
</head>

<body>
    <?php include "links/include/header.php" ?>
    <ul class="breadcrumb" style="padding-top:130px;padding-left: 7%;">
        <li><i class="fa fa-"></i> Home</li>

    </ul>
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="First slide"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Second slide"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="3" aria-label="Third slide"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="4" aria-label="Fourth slide"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item">
                <img src="image/slideshows/1slide.webp" alt="Firstslide" class="d-block">
            </div>
            <div class="carousel-item active">
                <img src="image/slideshows/3slide.webp" alt="Second slide" class="d-block">
            </div>
            <div class="carousel-item">
                <img src="image/slideshows/2slide.webp" alt="Third slide" class="d-block">
            </div>
            <div class="carousel-item">
                <img src="image/slideshows/4slide.webp" alt="Fourth slide" class="d-block">
            </div>
            <div class="carousel-item">
                <img src="image/slideshows/5slide.webp" alt="Fifth slide" class="d-block">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>
    <div style="padding-right:7%; padding-left: 7%;">
        <div class="container-fluid mt-3">
            <br>
            <!-- AIM-->
            <div class="container-fluid mt-3">
                <div class="pill"> AIM</div>
                <br>
                <ul class="westside">
                    <li>Quality software professionalism relevant and useful to the Industry, Business and Other
                        organization. </li>
                    <li>To expose the students to the real world issues, encourage them.</li>
                    <li>Course that fits one’s career goals and prepare them to prove themselves in any
                        national/international scenario.</li>
                    <li>Nation's finest in nurturing a future generation of competent, credible and ethical forensic
                        scientists.</li>
                    <li>Adopting innovative teaching methods that promote learning, creativity and critical thinking
                        skills.
                    </li>
                    <li>Reviewing regularly the curriculum, courses and programs offered to meet the changing needs of
                        the
                        forensic science profession.</li>
                </ul>
                <br>
                <div class="pill"> Total Student </div>
                <br>
                <canvas id="myChart" style="width:100%;max-width:600px; display:block; margin:auto;"></canvas>

                <!-- OVERVIEW -->
                <div class="pill "> OVERVIEW</div>
                <br>
                <p class="Moreless">Department of Computer Science, Gujarat University is the most popular,
                    well sought and best resourced Computer Science Department in Gujarat.
                    Ever since its inception, Department of Computer Science has maintained and
                    sustained its legacy as a premium institute in providing high quality education to produce
                    personnel with professional and personal success as well as high ethics and social conduct.
                    The resources at the department are well supported by extensive networked Computer facilities
                    and software aids well along with skilled and experienced faculties.
                    A pioneer institute in initiating and successfully running MCA and PGDCSA since 1982,
                    the Department initiated M.Tech.(Networking and Administration)
                    , M.Tech.(Web Technologies) and PGDNA in 2010<span id="dots">.</span><span id="more">The aim of
                        initiating these programs is to produce professionals
                        ready to meet the current market needs as well as skilled in research capabilities.
                        Understanding that Intelligent Computing is the future of computing, the department
                        initiated yet another post graduate course in Intelligent Computing. The course M.Sc.
                        (Artificial Intelligence & Machine Learning) aims to provide M.Sc. degree in Artificial
                        Intelligence and Machine Learning. This program offers a solid awareness of the key concepts
                        of Artificial Intelligence. The students would be able to develop strong basis of
                        machine learning and data mining. The students would have best career prospects in
                        scientific, business and financial sectors. Further to leverage the versatile system
                        to train Computer professionals department has started 5 Year Integrated M. Sc.
                        (Computer Science) in 2021
                        To promote and facilitate research in Computer Science and other interdisciplinary subjects,
                        Department offers doctoral courses like Ph.D. (Computer science) under well-experienced guides.
                        The Department also takes the responsibility to the fullest of training the educators.
                        It has organized in recent past UGC short courses and international workshops imparting
                        theoretical and practical training to various colleges and universities teachers at state
                        level and national level</span>
                    <button onclick="myFunction()" id="buttonreadmore">Read more</button>
                </p>
                <br>
            </div>
        </div>
        <div class="pill "> collaborators</div><br>
        <div class="scroll_bar">
            <img class="img" src="image/collaborators/1scr.webp">
            <img class="img" style="max-width:200px" src="image/collaborators/2scr.webp">
            <img class="img" src="image/collaborators/3scr.webp">
            <img class="img" src="image/collaborators/4scr.webp">
            <img class="img" src="image/collaborators/5scr.webp">
            <img class="img" src="image/collaborators/6scr.webp">
            <img class="img" src="image/collaborators/7scr.webp">
            <img class="img" src="image/collaborators/8scr.webp">
            <img class="img" src="image/collaborators/9scr.webp">
            <img class="img" src="image/collaborators/10scr.webp">
            <img class="img" src="image/collaborators/11scr.webp">
            <img class="img" src="image/collaborators/12scr.webp">
            <img class="img" src="image/collaborators/13scr.webp">
        </div>
    </div>
    <br>

    <?php include "links/include/footer.php" ?>
    <!DOCTYPE html>
    <html>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script> -->
    <script src="links/js/chart.js"></script>

    <body>


        <script>
            var xValues = ["Computer Science",
                "MCA",
                "PGDCSA",
                "M.Sc AI & ML",
                "M.Sc AI & ML & Defence",
                "Integrated M.Sc(computer science)",
            ];
            var yValues = [<?php echo '30' ?>, 49, 44, 24, 15, 24];
            var barColors = [
                "#F7464A",
                "#46BFBD",
                "#FDB45C",
                "#949FB1",
                "#4D5360",
                "#fa8072",
            ];

            new Chart("myChart", {
                type: "pie",
                data: {
                    labels: xValues,
                    datasets: [{
                        backgroundColor: barColors,
                        data: yValues
                    }]
                },
                options: {
                    title: {
                        display: true,
                        text: "Population of Department of computer science"
                    }
                }
            });
        </script>
        <script>
            function myFunction() {
                var dots = document.getElementById("dots");
                var moreText = document.getElementById("more");
                var btnText = document.getElementById("buttonreadmore");

                if (dots.style.display === "none") {
                    dots.style.display = "inline";
                    btnText.innerHTML = "Read more";
                    moreText.style.display = "none";
                } else {
                    dots.style.display = "none";
                    btnText.innerHTML = "Read less";
                    moreText.style.display = "inline";
                }
            }
        </script>
    </body>

    </html>

</body>

</html>