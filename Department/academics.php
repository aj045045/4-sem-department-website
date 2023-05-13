<!--  // TODO: Academics web pages
-->
<?php include "links/include/db.php" ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include "links/include/link.php" ?>
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

        .collapsible:last-of-type {
            margin-bottom: 1in;
        }

        .imgl {
            margin: 1px 5px 0px;
        }

        .collapsible:hover {
            border-radius: 15px;
            background-color: #099f9f;
            font-weight: 600;
            color: white;
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

    <?php include "links/include/header.php" ?>
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

            <?php
            $query = "SELECT `course_id`, `course_name`, `course_duration`, `course_details`, `course_document`, `course_image` FROM `course`;";

            // FETCHING DATA FROM DATABASE
            $result = $conn->query($query);

            if ($result->num_rows > 0) {
                // OUTPUT DATA OF EACH ROW
                while ($row = $result->fetch_assoc()) {
                    $course_id = $row["course_id"];
                    $course_name = $row["course_name"];
                    $course_duration = $row["course_duration"];
                    $course_details = $row["course_details"];
                    $course_document = $row["course_document"];
                    $course_image = $row["course_image"];
            ?>
                    <button type="button" class="collapsible"><?php echo $course_name; ?></button>
                    <div class="content">
                        <div class="row">
                            <div class="mx-auto text-center col-sm-5" style="background-color:whitesmoke;padding: inherit;">
                                <img src="<?php echo $course_image ?>" alt="logo" style="max-width: 100%; max-height: 100%;">
                            </div>
                            <div class="text-left col-sm-7" style="background-color:whitesmoke;">
                                <h5><?php echo $course_name; ?> </h5>
                                <hr>
                                <p style="font-size: 18px;"><?php echo $course_details; ?>
                                    <a type="button" class="btn btn-link" href="academics_details.php?course_id=<?php echo $course_id; ?>">Read More.. </a>
                                </p>
                            </div>
                        </div>
                    </div>
            <?php
                }
            } else {
                echo "0 results";
            }


            ?>

        </div>
        <div class="mr-12 imgl col-sm">
            <img data-aos="fade-left" data-aos-duration="3000" src="image/academics/course/acadload.webp" alt="logo" style="max-width: 100%; max-height: 100%;">
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
    <?php include "links/include/footer.php" ?>
</body>

</html>