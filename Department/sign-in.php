<?php
session_start();
include "./links/include/db.php";
?>
<!doctype html>
<html lang="en">

<head>
    <title>SIGN IN</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include "links/include/link.php" ?>
    <style>
        .card-img-top {
            margin: 1ch 30%;
            max-width: 150px;
        }

        .card-body {
            display: block;
            margin: 0px auto;
        }

        .text-primary:link {
            text-decoration: none;
        }

        .text-primary:hover {
            text-decoration: underline;
        }

        .linkers {
            display: block;
            margin: 0px auto;
            width: 60%;
            display: block;
        }

        .form-control {
            width: 9cm;
        }

        .card {
            background-color: #ffffffd3;
            height: 6in;
            width: auto;
            overflow: hidden;
        }
    </style>
</head>
</head>

<body style="background-color: #eee">
    <section class="vh-100">
        <div style="padding-top:1in"></div>
        <?php include "links/include/header.php" ?>
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-7 col-xl-6">
                    <div class="text-black card" style="border-radius: 25px;">
                        <img src="image/logos/bgfreelogo.webp" class="card-img-top" alt="department o computer science logos">
                        <h4 class="card-title " style="color: #657388;padding-left:10px">Maharishi pingla, School of
                            advance
                            computing and
                            information technology</h4>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div>
                                    <p class="mb-4 text-center h1 fw-bold mx-md-3 ">Sign in</p>
                                    <?php
                                    try {
                                        if (isset($_POST['sign-in'])) {
                                            $userName = $_POST['userName'];
                                            $password = $_POST['password'];
                                            $sql = "SELECT user_name,user_password,user_profile,use_category_id from user where user_name = '$userName' and user_password = '$password';";
                                            $sqlQuery = $conn->query($sql);
                                            if ($sqlQuery->num_rows > 0) {
                                                while ($row = $sqlQuery->fetch_assoc()) {
                                                    $_SESSION['userProfile'] = $row['user_profile'];
                                                    switch ($row['use_category_id']) {
                                                        case 1:
                                                            $_SESSION['userType'] = "admin";
                                                            break;
                                                        case 2:
                                                            $_SESSION['userType'] = "faculty";
                                                            break;
                                                        case 3:
                                                            $_SESSION['userType'] = "student";
                                                            break;
                                                        default:
                                                                throw new Exception("Please Sign In");
                                                            break;
                                                    }
                                                }
                                            }
                                        }
                                    } catch (Exception $ex) {
                                        echo " <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                                <button type=\"button\" class=\"btn-close \" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        ERROR:  <strong>" . $err->getMessage() . "</strong> <br>TRY AGAIN
                                </div>";
                                    }

                                    ?>

                                    <form class="mx-1 mx-md-4" action="" method="POST">
                                        <div class="flex-row mb-2 d-flex align-items-center">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="mb-0 form-outline flex-fill">
                                                <input type="text" class="form-control" placeholder="User Name" name="userName" required autocomplete="off" />
                                            </div>
                                        </div>
                                        <div class="flex-row mb-2 d-flex align-items-center">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="mb-0 form-outline flex-fill">
                                                <input type="password" id="pswd_input" class="form-control" placeholder="Password" name="password" minlength="6" required autocomplete="off" />
                                            </div>
                                        </div>
                                        <div class="flex-row mb-2 d-flex align-items-center">
                                            <div class="mb-0 form-outline flex-fill">
                                                <input type="checkbox" id="checkes" onclick="pswd_visible()" style="margin:0px 3%;  width:15px; height:15px;"> Show Password
                                            </div>
                                        </div>
                                        <div class="mx-4 mb-3 d-flex justify-content-center mb-lg-4">
                                            <input type="submit" class="px-3 py-1 text-blue-600 capitalize border-blue-500 rounded-lg bg-trasparent border-1 hover:bg-blue-700 hover:text-white " name="sign-in" value="submit" />
                                        </div>
                                        <div class="linkers">Don't have an account?<a class="text-primary" href="sign-up.php" target="_self"> Signup now</a></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        var x = document.getElementById("pswd_input");

        function pswd_visible() {
            if (x.type === "password") {
                x.type = "text";
                setTimeout(MakeCheckNull, 2000);
            } else {
                x.type = "password";
            }
        }

        function MakeCheckNull() {
            var chk = document.getElementById("checkes");
            if (chk.checked == true) {
                chk.checked = false;
                x.type = "password";
                x.type = "password";
            }
        }
    </script>
</body>

</html>