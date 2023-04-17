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
    <br>
    <div style="padding-right:40%;padding-left: 5%;">
        <ul class="breadcrumb" style="padding-top: 130px;">
            <li><a href="home.php">Home</a></li>
            <li><a href="academics.php">Academics</a></li>
            <li>MCA</li>
        </ul>
        <div class="pill">Master of Computer Applications</div>
        <br>    
    </div>
    <div class="container content">
                <div class="row">
                    <div class="mx-auto text-center col-12" style="background-color:whitesmoke;">
                        <img src="image/academics/logo/mca.webp" alt="logo" class="mx-auto" style="max-width: 100%; max-height: 100%;">
                    </div>
                    <div class="text-left p-5 pt-0 col-12" style="background-color:whitesmoke;">
                        <h3 class="fs-3">Masters of Computer Applications (MCA)</h3>
                        <!-- <hr> -->
                        <p style="font-size: 18px;">The MCA program prepares the student to take up high profile
                            positions in the IT industry as analysts, system designers, developers and project managers
                            in
                            any area of Computer applications as well as prepares student for research and academics.
                            This
                            course also grooms students to become entrepreneurs.
                        </p>
                        <h3 class="fs-3 pt-2">Syllabus</h3>
                            <a id="course-download-btn" class=" mt-2 btn btn-primary" target="_blank"  href="documents/syllabus/MCA-Scheme_&_Syllabus_Final.pdf">MCA</a>

                    </div>
                </div>
            </div>
    </div>
    <!-- Footer -->
    <?php include "links/include/footer.php"?>
</body>

</html>