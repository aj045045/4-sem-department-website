<!--  // TODO: Academics web pages
-->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include "links/include/link.php"?>
    <style>
    .collapsible {
        /* background-color:  #016064; */
        /* color: white; */
        /* background-color: #0ab6b6; */
        cursor: pointer;
        padding: 10px;
        width: 100%;
        border: none;
        text-align: left;
        outline: none;
        font-size: .2in;
    }
    .collapsible:last-of-type{
        margin-bottom: 1in;
    }
    .imgl {
       margin: 1px 5px 0px ;
    }

    .collapsible:hover {
        border-radius: 15px;
        background-color:#099f9f;
        font-weight: 600;
        color:white;
    }
    @media screen and (max-width: 800px) {
        div.imgl {
            display: none;
        }
    }

    .content {
        /* padding: 0 18px; */
        display: none;
        overflow: hidden;
        background-color: #f1f1f1;
    }
    </style>
</head>

<body>
    
    <?php include "links/include/header.php"?>
    <br>
    <div style="padding-right:40%;padding-left: 5%;">
        <ul class="breadcrumb" style="padding-top: 130px;">
            <li><a href="home.php">Home</a></li>
            <li>Academics</li>
        </ul>
        <div class="pill">Academics</div>
        <br>
    </div>
    <div class="row">
        <div class="w-full col-sm-9 md:w-3/5" style="padding-left:8%;">
            <button type="button" class="collapsible">Doctor of Philosophy [Computer Science]</button>
            <div class="content">
                <div class="row">
                    <div class="mx-auto text-center col-sm-5" style="background-color:whitesmoke;padding: inherit;">
                        <img src="image/academics/logo/phd.webp" alt="logo" style="max-width: 100%; max-height: 100%;">
                    </div>
                    <div class="text-left col-sm-7" style="background-color:whitesmoke;">
                        <h5>Doctor of Philosophy (Ph.D in Computer Science) </h5>
                        <hr>
                        <p style="font-size: 18px;">Department of Computer Science, Gujarat University is one of the
                            earliest in
                            Gujarat to
                            introduce Ph.D. Programme. Currently there are SIX recognized Ph.D. Guides in Gujarat
                            University in the subject of Computer Science. 35-40 students pursuing Ph.D. in varied areas
                            like Network Security, Information Retrieval, Query optimization Computer Vision,
                            e-learning,
                            Image Processing ,NLP and Data Mining.
                            <a type="button" class="btn btn-link" href="academics_details.php">Read More.. </a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- <hr style="opacity: 0.1;padding-top: 0.1px;"> -->
            <button type="button" class="collapsible">Masters Of Computer Applications (MCA)</button>
            <div class="content">
                <div class="row">
                    <div class="mx-auto text-center col-sm-5" style="background-color:whitesmoke; padding:inherit;">
                        <img src="image/academics/logo/mca.webp" alt="logo" style="max-width: 100%; max-height: 100%;">
                    </div>
                    <div class="text-left col-sm-7" style="background-color:whitesmoke;">
                        <h5>Masters of Computer Applications (MCA)</h5>
                        <!-- <hr> -->
                        <p style="font-size: 18px;">The MCA program prepares the student to take up high profile
                            positions in the IT industry as analysts, system designers, developers and project managers
                            in
                            any area of Computer applications as well as prepares student for research and academics.
                            This
                            course also grooms students to become entrepreneurs.
                            <a type="button" class="btn btn-link" href="academics_details.php">Read More..</a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- <hr style="opacity: 0.1;padding-top: 0.1px;"> -->
            <button type="button" class="collapsible">Post Graduate Diploma in Computer Science and Applications
                (PGDCSA)</button>
            <div class="content">
                <div class="row">
                    <div class="mx-auto text-center col-sm-5" style="background-color:whitesmoke; padding: inherit;">
                        <img src="image/academics/logo/pgdcsa.webp" alt="logo"
                            style="max-width: 100%; max-height: 100%;">
                    </div>
                    <div class="text-left col-sm-7" style="background-color:whitesmoke;">
                        <h5>Post Graduate Diploma in Computer Science and Applications (PGDCSA)</h5>
                        <!-- <hr> -->
                        <p style="font-size: 18px;">The PGDCSA program prepares the student to take up positions as
                            programmer, web designer and lab administrator.
                            <a type="button" class="btn btn-link" href="academics_details.php">Read More..</a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- <hr style="opacity: 0.1;padding-top: 0.1px;"> -->
            <button type="button" class="collapsible">M.Sc Artificial Intelligence and Machine Learning [M.Sc AI &
                ML]</button>
            <div class="content">
                <div class="row">
                    <div class="mx-auto text-center col-sm-5" style="background-color:whitesmoke; padding:inherit;">
                        <img src="image/academics/logo/aiml.webp" alt="logo" style="max-width: 100%; max-height: 100%;">
                    </div>
                    <div class="text-left col-sm-7" style="background-color:whitesmoke;">
                        <h5>M.Sc Artificial Intelligence and Machine Learning [M.Sc AI & ML]</h5>
                        <!-- <hr> -->
                        <p>Apart from Research and Academics, this course is designed to
                            build data analysts, data mining experts and robotics and automation software engineers
                            <a type="button" class="btn btn-link" href="academics_details.php">Read More..</a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- <hr style="opacity: 0.1;padding-top: 0.1px;"> -->
            <button type="button" class="collapsible">M.Sc Artificial Intelligence and Machine Learning and defence
                [M.Sc AI &
                ML & Defence]</button>
            <div class="content">
                <div class="row">
                    <div class="mx-auto text-center col-sm-5" style="background-color:whitesmoke; padding:inherit;">
                        <img src="image/academics/logo/aimld.webp" alt="logo"
                            style="max-width: 100%; max-height: 100%;">
                    </div>
                    <div class="text-left col-sm-7" style="background-color:whitesmoke;">
                        <h5>M.Sc Artificial Intelligence and Machine Learning and Defence [M.Sc AI & ML & Defence]</h5>
                        <!-- <hr> -->
                        <p>Apart from Research and Academics, this course is designed to
                            build data analysts, data mining experts and robotics and automation software engineers
                            <a type="button" class="btn btn-link" href="academics_details.php">Read More..</a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- <hr style="opacity: 0.1;padding-top: 0.1px;"> -->
            <button type="button" class="collapsible">Five Year Integrated M.Sc Computer Science</button>
            <div class="content">
                <div class="row">
                    <div class="mx-auto text-center col-sm-5" style="background-color:whitesmoke; padding:inherit;">
                        <img src="image/academics/logo/msccs.webp" alt="logo"
                            style="max-width: 100%; max-height: 100%;">
                    </div>
                    <div class="text-left col-sm-7" style="background-color:whitesmoke;">
                        <h5>5 Years Integrated M.Sc Computer Science</h5>
                        <!-- <hr> -->
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi voluptatum corrupti fuga
                            soluta non
                            atque impedit perspiciatis doloremque consequunt
                            <a type="button" class="btn btn-link" href="academics_details.php">Read More..</a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- <hr style="opacity: 0.1;padding-top: 0.1px;"> -->
            <button type="button" class="collapsible">Masters of Technology (Networking and Communications)</button>
            <div class="content">
                <div class="row">
                    <div class="mx-auto text-center col-sm-5" style="background-color:whitesmoke; padding:inherit;">
                        <img src="image/academics/logo/msccs.webp" alt="logo"
                            style="max-width: 100%; max-height: 100%;">
                    </div>
                    <div class="text-left col-sm-7" style="background-color:whitesmoke;">
                        <h5>M.Tech. (Networking and Communications)</h5>
                        <!-- <hr> -->
                        <p>Apart from Research and Academics, this course is designed to
                            build network analysts, network architects and network/security consultants.
                            <a type="button" class="btn btn-link" href="academics_details.php">Read More..</a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- <hr style="opacity: 0.1;padding-top: 0.1px;"> -->
            <button type="button" class="collapsible">Masters of Technology (Web Technology)</button>
            <div class="content">
                <div class="row">
                    <div class="mx-auto text-center col-sm-5" style="background-color:whitesmoke; padding:inherit;">
                        <img src="image/academics/logo/msccs.webp" alt="logo"
                            style="max-width: 100%; max-height: 100%;">
                    </div>
                    <div class="text-left col-sm-7" style="background-color:whitesmoke;">
                        <h5>M.Tech in Web Technology</h5>
                        <!-- <hr> -->
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi voluptatum corrupti fuga
                            soluta non
                            atque impedit perspiciatis doloremque consequunt
                            <a type="button" class="btn btn-link" href="academics_details.php">Read More..</a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- <hr style="opacity: 0.1;padding-top: 0.1px;"> -->
        </div>
        <div class="mr-12 imgl col-sm">
            <img src="image/academics/course/acadload.webp" alt="logo" style="max-width: 100%; max-height: 100%;">
        </div>
    </div>
    <script>
    // ? COLLAPSIBLE
    var coll = document.getElementsByClassName("collapsible");
    var i;
    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        });
    }
    </script>
    <!-- Footer -->
    <?php include "links/include/footer.php"?>
</body>

</html>