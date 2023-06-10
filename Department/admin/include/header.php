<?php
echo '<nav class="navbar navbar-expand-sm navbar-dark" id="back-color">
        <div class="container flex-start">
            <a class="navbar-brand" href="index.php">
                <img src="./../image/logos/logo1.webp" alt="Avatar Logo" style="width:65px;border-radius: 50%;">
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
                    <a class="nav-link text-light" href="index.php"><b>HOME</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="event.php"><b>Event</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="academics.php"><b>Courses</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="admission_enquiry.php"><b>Admission Enquiries</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="news.php"><b>News</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="awards.php"><b>Awards</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="documents.php"><b>Documnets</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="feedback.php"><b>Feedback</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="" href="logout.php"><b>Logout</b></a>
                    </li>
                </ul>
            </div>
        </div>
</nav>';
?>