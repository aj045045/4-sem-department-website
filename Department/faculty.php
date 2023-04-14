<?php include "links/include/db.php"?>
<!doctype html>
<html lang="en">
<!-- // TODO: Faculty page 
-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include "links/include/link.php"?>
</head>
<style>
.size {
    padding-left: 20%;
    padding-right: 20%;
}

/** Cards [ faculty.html ] */
.card-body .card-title .badge {
    background-color: #016064;
}

.card {
    background-color: #ffffffd3;
    height: 317px;
    width: 200px;
    overflow: hidden;
    border-radius: 50%;
}

.card:hover {
    box-shadow: 4.2px 8.3px 8.3px hsl(0deg 0% 0% / 0.37);
    overflow: auto;
    z-index: 7;
}

.card:hover::-webkit-scrollbar {
    width: 5px;
    height: 5px;
}

.card:hover::-webkit-scrollbar-thumb {
    border-radius: 30px;
    background-color: grey;
}

.card-text {
    color: black;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}

.card-round {
    border-radius: 50%;
    width: 100%;
}
</style>

<body>
    <?php include "links/include/header.php"?>
    <div style="padding-right:7%;padding-left:7%;">
        <br>
        <ul class="breadcrumb" style="padding-top:130px;">
            <li><a href="home.php">Home</a></li>
            <li>Faculty</li>
        </ul>

        <span class="pill">FACULTY DETAILS</span>
        <div class="size">
            <div class="container">
                <br><br>
                <br>
                <div class="row row-sm-cols-1 row-cols-md-2 row-cols-xl-3 gx-1 gy-4 ">

                    <?php
                     $query = "SELECT u.user_name,u.user_profile,d.designation,f.faculty_id FROM user as u
INNER JOIN faculty as f
ON f.user_id=u.user_id
INNER JOIN designation as d
ON f.designation_id=d.designation_id";
  
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
            $faculty_id=$row["faculty_id"];
         ?>
                    <div class="col">
                        <div class="card"><a href="faculty_details.php?faculty_id=<?php echo $faculty_id ?>"
                                class="card-link">
                                <div data-bs-toggle="tooltip" title="CLICK TO KNOW MORE">

                                    <img src="<?php echo $faculty_profile;?>" class="p-4 card-round">
                                </div>
                            </a>
                            <div class="card-body">
                                <h5 class="card-title"><span class="badge"><?php echo $username;?></span></h5>
                                <p class="card-text">👤| <?php echo $designation;?></p>
                            </div>
                        </div>
                    </div>
                    <?php
        }
    } 
    else {
        echo "0 results";
    }
  
   $conn->close();
  
?>

                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    <?php include "links/include/footer.php"?>
</body>

</html>