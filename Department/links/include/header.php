
<?php
// TODO: Header
// Navbar code
echo '<nav class="navbar navbar-expand-sm navbar-dark " id="back-color">
<div class="container flex-start">
    <a class="navbar-brand" href="home.php">
        <img src="image/logos/logo1.webp" alt="Avatar Logo" style="width:65px;border-radius: 50%;"> 
    </a>
    <button class="navbar-toggler d-lg-none" type="button" style="color: aliceblue;" data-bs-toggle="collapse"data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
            <!--Add index.php-->
            <li class="nav-item">
                <a class="nav-link  text-light" href="home.php"><b>HOME</b></a>
            </li>
            <!--Add index.php-->
            <li class="nav-item">
                <a class="nav-link text-light" href="academics.php"><b>ACADEMICS</b></a>
            </li>
            <!--Add index.php-->
            <li class="nav-item">
                <a class="nav-link text-light" href="faculty.php"><b>FACULTY</b></a>
            </li>
            <!--Add index.php-->
            <li class="nav-item">
                <a class="nav-link text-light" href="event.php"><b>EVENTS</b></a>
            </li>
            <!--Add index.php-->
            <li class="nav-item">
                <a class="nav-link text-light" href="download.php"><b>SYLLABUS</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="about.php"><b>ABOUT</b></a>
            </li>';
            if($_SESSION['userType']=='Student'){
            echo ' <li class="nav-item">
                <a class="nav-link text-light" href="result.php"><b>RESULT</b></a>
            </li>';}
echo '</ul>
        <div class="top-header hidden-xs" style="padding:0px">
        <a  class="nav-link text-light p-2 ms-lg-5" href="signin.php" target="_self">
        <b>SIGN IN</b></a>
            <form  action="links/php/search.php" method="GET" style="padding-top:0px">
                <input type="text"  name="search">
                <input type="submit" value="Search" autocomplete="off">
            </form>
        </div>
</nav>
';
?>
