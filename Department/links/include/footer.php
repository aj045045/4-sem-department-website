<?php
include "link.php";
// TODO: Footer
echo '<style>

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
            <div class="pb-2 ">QUICK LINKS</div>
            <div class="row small">
                <div class="col-lg-4 col-md-6 footer-link text-start"><br>
                    <b>ACADEMIC</b>
                    <ul style="font-size: smaller;">
                        <li><a href="academics.php">Programs</a></li>
                        <li><a href="phd.php">Ph.D</a></li>
                        <li><a href="mca.php">MCA</a></li>
                        <li><a href="pgdcsa.php">PGDCSA</a></li>
                        <li><a href="aiml.php">M.sc AI & ML</a></li>
                        <li><a href="aimld.php">M.Sc AI & ML & D</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="msc.php">5 Years Integrated M.Sc-CS</a></li>
                        <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">M.Sc AI & ML & D</a></li> -->
                    </ul><br>
                    <b>STUDENTS</b>
                    <ul style="font-size: smaller;">
                    <li><a
                    href="syllabus.php">Syllabus</a>
                    </li>
                    <li><a
                    href="papers.php">Reference Papers</a>
                    </li>
                    <li><a
                    href="placement.php">Placement</a>
                    </li>
                    </ul>
                    </div>
                    <div class="col-lg-4 col-md-6 footer-links text-start"><br>
                    <b>EXAMINATION</b>
                    <ul style="font-size: smaller;">
                    <li><a
                    href="results.php">Result</a>
                    </li>
                    <li><a
                    href="results.php">Diversity</a>
                    </li>
                    <li><a
                    href="circulars.php">Circular</a>
                    </li>
                    </ul>
                </div>
                    <div class="col-lg-4 col-md-6 footer-links text-start"><br>
                    <b>DEPARTMENT</b>
                    <ul style="font-size: smaller;">
                     <li><a
                    href="no_one.php">No.1 in Gujarat</a>
                    </li>
                     <li><a
                                href="about.php">About</a>
                    </li>
                    <li><a
                    href="faculty.php">Faculty</a>
                    </li>
                     <li><a
                    href="mentor_mentee.php">Mentor Mentee System</a>
                    </li>
                     <li><a
                    href="project_ongoing.php">Projects ongoing</a>
                    </li>
                     <li><a
                    href="research.php">Research</a>
                    </li>
                     <li><a
                    href="award.php">Awards</a>
                    </li>
                    <li><a
                                href="news.php">News</a>
                    </li>
                    <li><a
                                href="event.php">Events</a>
                    </li>
                    <li><a
                                href="circulars.php">Circulars</a>
                    </li>
                    <li><a
                                href="gallery.php">Gallery</a>
                    </li>
                    <li><a
                                href="feedback.php">Feedback</a>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 footer-links">
            <div class="pb-4 uppercase ">CONTACT US</div>
             <div class="flex flex-row">
                        <div class="flex flex-row block italic font-semibold"><img src="image/logos/imap.webp" style="width:30px; height:20px; margin-top:5px; display:inline-block;" >|&nbsp;</div>
                        <div >&nbsp;
                Gujarat University, Near Ambedkar Gate, University Area, Ahmedabad, Gujarat 380009

                        </div>
                    </div>
            <div class="tdrow">📞| 07926300877</div>
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
echo '<script>
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
?>