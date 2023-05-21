<?php include "db.php" ?>

<?php
// TODO: Header
// Navbar code
echo ' <nav class="navbar navbar-expand-sm navbar-dark " id="back-color">
        <div class="container flex-start">
            <a class="navbar-brand" href="home.php">
                <img src="image/logos/logo1.webp" alt="Avatar Logo" style="width:65px;border-radius: 50%;">
            </a>
            <button class="navbar-toggler d-lg-none" type="button" style="color: aliceblue;" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="mt-2 navbar-nav me-auto mt-lg-0">
                    <!--Add index.php-->
                    <li class="nav-item">
                    <a class="nav-link text-light" href="home.php"><b>HOME</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="about.php"><b>ABOUT</b></a>
                        <ul>
                            <li><a href="mission&vision.php">Mission & Vision</a></li>
                            <li><a href="#">EPG Pathshala modules</a></li>
                            <li><a href="feedback.php">Feedback system</a></li>
                            <li><a href="student_diversity.php">Catering to Student Diversity</a></li>
                            <li><a href="mentor_mentee.php">Mentor Mentee system</a></li>
                        </ul>
                    </li>
                    <!--Add index.php-->
                    <li class="nav-item">
                        <a class="nav-link text-light" href="academics.php"><b>ACADEMICS</b></a>
                        <ul>';
$query = "SELECT `course_id`, `course_name` FROM `course`;";

// FETCHING DATA FROM DATABASE
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // OUTPUT DATA OF EACH ROW
    while ($row = $result->fetch_assoc()) {
        $course_id = $row["course_id"];
        $course_name = $row["course_name"];
        echo '<li><a href="academics_details.php?course_id=' . $course_id . '">' . $course_name . '</a></li>';
    }
} else {
    echo "0 results";
}
echo '</ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="event.php"><b>WHY DCS</b></a>
                        <ul>
                            <li><a href="#">State of Art Infrastructure</a></li>
                            <li><a href="placement.php">100% placements</a></li>
                            <li><a href="no_one.php">No 1 in gujarat</a></li>
                            <li><a href="hpc_system.php">Availability of HPC systems</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="event.php"><b>STUDENT</b></a>
                        <ul>
                            <li><a href="#">syllabus</a></li>
                            <li><a href="#">results</a></li>
                            <li><a href="#">old papers</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="faculty.php"><b>RESEARCH</b></a>
                        <ul>
                            <li><a href="#">projects ongoing</a></li>
                            <li><a href="#">collaborations</a></li>
                            <li><a href="#">research outcomes</a></li>
                            <li><a href="#">awards</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="https://www.gujaratuniversity.ac.in/details/18"><b>FACULTY</b></a>
                    </li>
                 <!--  <li class="nav-item">
                        <a class="nav-link text-light" href="broucher.php"><b>COURSES</b></a>
                    </li>-->
                    <!--Add index.php-->
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#"><b>HAPPENINGS</b></a>
                        <ul>
                            <li><a href="news.php">News</a></li>
                            <li><a href="event.php">Events</a></li>
                            <li><a href="#">Circular</a></li>
                            <li><a href="#">gallary</a></li>
                        </ul>
                    </li>                    
</nav>
';
echo '<button class=" tw-animate-bounce" onclick="topFunction()" id="myBtn" title="Go to top">Top</button>';
?>