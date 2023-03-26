<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "links/include/link.php" ?>
    <title>Document</title>
</head>

<body>
<style>
a{
    color:#7cced0;
    text-decoration:none;
}
a:hover
{
    color:white;
}
header{
    width:80px;
}
</style>
<div class="footer">
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-6 footer-links">
            <div class="header">Quick Links</div>
            <div class="row small">
                <div class="col-lg-6 col-md-6 footer-link text-start">
                    <b>Academics</b>
                    <ul style="font-size: smaller;">
                        <li><a href="phd.php">Ph.D</a></li>
                        <li><a href="mca.php">MCA</a></li>
                        <li><a href="pgdca.php">PGDCA</a></li>
                        <li><a href="aiml.php">M.sc AI & ML</a></li>
                        <li><a href="aimld.php">M.Sc AI & ML & D</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="msccs.php">5 Years Integrated M.Sc-CS</a></li>
                        <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">M.Sc AI & ML & D</a></li> -->
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 footer-links text-start">
                    <b>Download</b>
                    <ul style="font-size: smaller;">
                    <li><a
                    href="https://www1.gujaratuniversity.ac.in/custom/student/syllabus">Syllabus</a>
                    </li>
                    </ul>
                    <b>Faculties</b>
                    <ul style="font-size: smaller;">
                    <li><a
                                href="faculty.php">Faculties</a>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 footer-links">
            <h6>CONTACT US</h6>
            <div class="tdrow">
                <img src="image/logos/imap.webp" style="width:20px; display:inline-block;" >|
                Gujarat University, Near Ambedkar Gate, University Area, Ahmedabad, Gujarat 380009
            </div>
            <div class="tdrow">📞| 09727797105</div>
            <div class="tdrow">📧| admissions.dcs@gmail.com</div>
            <div class="tdrow">
                <table>
                    <tr>
                        <td><a rel="noreferrer"
                                href="https://www.facebook.com/M-Sc-Artificial-Intelligence-Machine-Learning-at-Rollwala-GU-654124395030598/"
                                target="_blank"><img class="nav-img" src="image/logos/flogo.png"></a>
                        </td>
                        <td><a rel="noreferrer"
                                href="https://www.instagram.com/msc_computerscience_gu/?next=%2F"
                                target="_blank"><img class="nav-img" src="image/logos/insta.png"></a>
                        </td>
                        <td>
                            <a rel="noreferrer"
                                href="https://www.google.com/maps/place/Department+of+Computer+Science,+Maharshi+Pingal+-+School+of+Advanced+Computing+and+Information+Technology/@23.0362486,72.545091,19.77z/data=!4m5!3m4!1s0x395e859c09adf79f:0xe1d87bc33ed48fe7!8m2!3d23.0360673!4d72.5452956"
                                target="_blank"><img class="nav-img" src="image/logos/imap.webp"></a>
                    </tr>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
';
echo'<script>
let mybutton = document.getElementById("myBtn");
window.onscroll = function() {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

</script>';
</body>

</html>