<!--  // TODO: Academics web pages
-->

<!doctype html>
<html lang="en">

<head>
    <style>
        #course-download-btn{
            background-color: rgb(11, 64, 124);
        }
        #course-download-btn:hover{
            background-color: #2babd0;
        }
    </style>
</head>

<body>
    
    <?php include "links/include/header.php"?>
    <?php include "links/include/db.php"?>
<?php
    $course_id=$_GET["course_id"];
?>

<?php
$query = "SELECT `course_id`, `course_name`, `course_duration`, `course_details`, `course_document`, `course_image` FROM `course` where `course_id`=$course_id";

  // FETCHING DATA FROM DATABASE
$result = $conn->query($query);

    if ($result->num_rows > 0) 
    {
        // OUTPUT DATA OF EACH ROW
        while($row = $result->fetch_assoc())
        {
            $course_id=$row["course_id"];
            $course_name=$row["course_name"];
            $course_duration=$row["course_duration"];
            $course_details=$row["course_details"];
            $course_document=$row["course_document"];
            $course_image=$row["course_image"];
        }
    }else{
        echo "not found";
    }    
?>

    <br>
    <div style="padding-right:40%;padding-left: 5%;">
        <ul class="breadcrumb" style="padding-top: 130px;">
            <li><a href="home.php">Home</a></li>
            <li><a href="academics.php">Academics</a></li>
            <li><?php echo $course_name; ?></li>
        </ul>
        <div class="pill"><?php echo $course_name; ?></div>
        <br>    
    </div>
    <div class="container content">
                <div class="row">
                    <div class="mx-auto text-center col-12" style="background-color:whitesmoke;">
                        <img src="<?php echo $course_image; ?>" alt="logo" class="mx-auto" style="max-width: 100%; max-height: 100%;">
                    </div>
                    <div class="text-left p-5 pt-0 col-12" style="background-color:whitesmoke;">
                        <h3 class="fs-3"><?php echo $course_name; ?></h3>
                        <!-- <hr> -->
                        <p style="font-size: 18px;"><?php echo $course_details; ?>
                        </p>
                        <h3 class="fs-3 pt-2">Syllabus</h3>
                            <a id="course-download-btn" class=" mt-2 btn btn-primary" target="_blank"  href="<?php echo $course_document;?>"><?php echo $course_name; ?></a>

                    </div>
                </div>
            </div>
    </div>
    <!-- Footer -->
    <?php include "links/include/footer.php"?>
</body>

</html>