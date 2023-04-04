<?php include "links/include/db.php"?>
<?php
    $faculty_id=$_GET["faculty_id"];
?>

<?php
$query = "SELECT u.user_name,u.user_profile,
f.faculty_experience,f.faculty_qualification,f.faculty_specialization,
d.designation FROM user as u
INNER JOIN faculty as f
ON f.user_id=u.user_id
INNER JOIN designation as d
ON f.designation_id=d.designation_id
where f.faculty_id=$faculty_id";
  
  // FETCHING DATA FROM DATABASE
  $result = $conn->query($query);
  
    if ($result->num_rows > 0) 
    {
        // OUTPUT DATA OF EACH ROW
        while($row = $result->fetch_assoc())
        {
            $username=$row["user_name"];
            $faculty_profile=$row["user_profile"];
            $designation=$row["designation"];
            $faculty_experience=$row["faculty_experience"];
            $faculty_qualification=$row["faculty_qualification"];
            $faculty_specialization=$row["faculty_specialization"];
            $faculty_experience=$row["faculty_experience"];
        }
    }else{
        echo "not found";
    }
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include "links/include/link.php"?>
</head>

<body>
    <?php include "links/include/header.php"?>
    <div style="padding-right:7%;padding-left: 7%;">
        <ul class="breadcrumb" style="padding-top:150px;">
            <li><a href="home.php">Home</a></li>
            <li><a href="faculty.php">Faculty</a></li>
            <li><?php echo $username;?></li>
        </ul>

        <div class="container-fluid">
            <div class="bg_img">
                <img class="center" src="image/logos/logo.webp" style="height: auto;width: 90px; padding-bottom: 60px;">
                <img class="center" src="<?php echo $faculty_profile;?>" style="border-radius:50%;">
                <h4 class="pr_center"><?php echo $username;?></h4>
                <p class="pr_center"><?php echo $designation;?></p>
                <p class="pr_center"><?php echo $faculty_qualification;?></p>
            </div><br><br>

            <div class="fd-center">
                <!-- Experinc-->
                <div class="pill ">Teaching Experience</div><br>
                <table class="table table-borderless table-inverse table-responsive">
                    <thead class="thead-inverse" style="background-color:cadetblue;color:white;">
                        <tr>
                            <th>YEAR</th>
                            <th>ORGANIZATION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">Since <?php echo date("Y")-$faculty_experience;?></td>
                            <td>
                                <dd>
                                <dt>PROFESSOR</dt>
                                <dl>Gujarat University</dl>
                                </dd>
                            </td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <br><br>

                <!-- AWARDS -->
                <div class="pill">Awards</div><br>
                <table class="table table-borderless table-responsive">
                    <thead class="thead-inverse" style="background-color:cadetblue;color:white;">
                        <tr>
                            <th>ORGANIZATION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">REGIONAL TECHNICAL COORDINATOR - VIRTUAL LABS IIT BOMBAY</td>
                        </tr>
                        <tr>
                            <td scope="row">SENIOR MEMBER IEEE</td>
                        </tr>
                        <tr>
                            <td scope="row">LIFE MEMBER CSAI</td>
                        </tr>

                    </tbody>
                </table>
                <br><br>

                <!-- RESEARCH -->

                <div class="pill "> Research Works</div>
                <br>
                <table class="table table-borderless table-responsive">
                    <thead class="thead-inverse" style="background-color:cadetblue;color:white;">
                        <tr>
                            <th>CATEGORY</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="2" style="text-align:center;">No of Publication <span
                                    class="badge bg-danger">28</span></td>
                        </tr>
                        <tr>
                            <td scope="row">Research paper</td>
                            <td><b>28</b></td>
                        </tr>
                        <tr>
                            <td scope="row">Books</td>
                            <td><b>0</b></td>
                        </tr>
                        <tr>
                            <td scope="row">Books Chapter</td>
                            <td><b>0</b></td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <br><br><br>
    <?php include "links/include/footer.php"?>
</body>

</html>