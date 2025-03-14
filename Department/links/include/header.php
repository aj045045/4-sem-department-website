<?php include "db.php" ?>

<?php
// TODO: Header
// Navbar code
echo '
<nav class="navbar navbar-expand-sm navbar-dark" id="back-color">
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
                        <a class="nav-link text-light"><b>ABOUT</b></a>
                        <ul>
                            <li><a href="about.php">About</a></li>
                            <li><a href="mission&vision.php">Mission & Vision</a></li>
                            <li><a href="epg_pathshala.php">EPG Pathshala modules</a></li>
                            <li><a href="feedback.php">Feedback</a></li>
                            <li><a href="student_diversity.php">Catering to Student Diversity</a></li>
                            <li><a href="mentor_mentee.php">Mentor Mentee system</a></li>
                            </ul>
                            </li>
                            <!--Add index.php-->
                            <li class="nav-item">
                            <a class="nav-link text-light"><b>ACADEMICS</b></a>
                            <ul>
                            <li><a href="academics.php">Academics</a></li>';
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
                        <a class="nav-link text-light"><b>WHY DCS</b></a>
                        <ul>
                            <li><a href="#">State of Art Infrastructure</a></li>
                            <li><a href="placement.php">100% placements</a></li>
                            <li><a href="no_one.php">No 1 in gujarat</a></li>
                            <li><a href="hpc_system.php">Availability of HPC systems</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light"><b>STUDENT</b></a>
                        <ul>
                            <li><a href="syllabus.php">Syllabus</a></li>
                            <li><a href="results.php">Results</a></li>
                            <li><a href="papers.php">Old papers</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light"><b>RESEARCH</b></a>
                        <ul>
                            <li><a href="https://www.gujaratuniversity.ac.in/researchproject?deptid=18">Projects & Research outcomes</a></li>
                            <li><a href="award.php">Awards</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="https://www.gujaratuniversity.ac.in/details/18"><b>FACULTY</b></a>
                    </li>
                    <!--Add index.php-->
                    <li class="nav-item">
                        <a class="nav-link text-light"><b>HAPPENINGS</b></a>
                        <ul>
                            <li><a href="news.php">News</a></li>
                            <li><a href="event.php">Events</a></li>
                            <li><a href="circulars.php">Circular</a></li>
                            <li><a href="gallery.php">Gallery</a></li>
                        </ul>
                    </li>     
                </ul>
            </div>
        </div>               
</nav>
';
echo '<button class="animate-bounce" onclick="topFunction()" id="myBtn" title="Go to top">Top</button>';
?>