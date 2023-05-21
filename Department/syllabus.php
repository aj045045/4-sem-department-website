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
            margin:0px;
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


        .hoverables:hover {
            color: white;
        }

        .hoverables {
            color: black;
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
                    <a href="<?php echo $course_document; ?>" class="hoverables" target="_self" rel="noopener noreferrer">
                        <div type="button" class="collapsible">
                            <?php echo $course_name; ?>
                        </div>
                    </a>
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
    <!-- Footer -->
<br>
<br>
<br>

    <?php include "links/include/footer.php" ?>
</body>

</html>