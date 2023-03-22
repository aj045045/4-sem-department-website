<!doctype html>
<html lang="en">

<head>
    <title>Sign up</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include "links/include/link.php" ?>
    <style>
        input[type=number]::-webkit-outer-spin-button,
        input[type=number]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .form-control {
            width: 9cm;
        }

        .card-body {
            display: block;
            margin: 0px auto;
        }

        .row>* {
            padding: 0px;
        }

        .card-img-top {
            margin: 1ch 30%;
            max-width: 150px;
        }

        .text-primary:link {
            text-decoration: none;
        }

        .text-primary:hover {
            text-decoration: underline;
        }

        .linkers {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 60%;
            display: block;
        }

        .card {
            background-color: #ffffffd3;
            height: 8in;
            width: auto;
            overflow: hidden;
            margin-bottom: 1in;
        }
    </style>
    <script>
        $(document).ready(function() {
            $("#hide").hover(function() {
                $("#option").hide();
            });
            $("#show").click(function() {
                $("#option").show();
            });
            $("#forcehide").click(function() {
                $("#option").hide();
            });

        });
    </script>
</head>

<body style="background-color: #eee" id="hide">
    <div style="padding-bottom: 2in;"></div>
    <?php include "links/include/header.php" ?>
    <section class="vh-100">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100 ">
                <div class="col-lg-7 col-xl-6">
                    <div class="card text-black" style="border-radius: 25px;">
                        <img src="image/logos/bgfreelogo.webp" class="card-img-top" alt="department o computer science logos">
                        <h4 class="card-title " style="color: #657388;padding-left:10px;">Maharishi pingla, School of
                            advance
                            computing and
                            information technology</h4>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div>
                                    <p class="text-center h1 fw-bold mb-2 mx-md-3 ">Sign up</p>
                                    <!--TODO: Form for sign-up -->
                                    <form action="./links/php/user-mgmt.php" method="POST" id="form">
                                        <div class="d-flex flex-row align-items-center mb-2">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="form3Example1c" class="form-control" placeholder="User Name" name="name" minlength="4" required autocomplete="off" />
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center mb-2">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="email" name="mail" class="form-control" placeholder="Mail" required autocomplete="off" />
                                            </div>
                                        </div>
                                        <div class="row ms-3 mb-2">
                                            User is a:<div>
                                            </div>
                                            <div class="row">
                                                <div class="col-1"></div>
                                                <div class="col-3">
                                                    <input class="form-check-input" type="radio" id="forcehide" value="1" name="role"><label for="role"></label>
                                                    Faculty
                                                    <br>
                                                    <input class="form-check-input" type="radio" id="show" value="2" name="role">
                                                    Student <div class="d-flex flex-row mb-2">
                                                        <div class="form-outline flex-fill mb-0">
                                                            <select class="form-select" required id="option" style="display:none; width:100%;" autocomplete="off" name="course">
                                                                <option selected disabled value="0" id="option">Course
                                                                </option>
                                                                <option value="1">Doctor of Philosophy [ PHD ]</option>
                                                                <option value="2">Master of Science in Computer Science
                                                                    [ MSC(cs) ]</option>
                                                                <option value="3">Artificial Intelligence & Machine
                                                                    Learning [ AIML ]</option>
                                                                <option value="4">M. Tech in Networking & Communication
                                                                    [ M.TECH NC ]</option>
                                                                <option value="5">M. Tech in Web Technology [ M.TECH WT
                                                                    ]</option>
                                                                <option value="6">Masters in Computer Application [ MCA
                                                                    ]</option>
                                                                <option value="7"> Post Graduate Diploma in Computer
                                                                    Science and Applications [ PGDCSA ]</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center mb-2">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" class="form-control" placeholder="Password" name="pswd" minlength="6" maxlength="10" required autocomplete="off" />
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center mb-2">
                                            <i class="fas fa-check fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" class="form-control" placeholder="Confirm your password" name="confirm_pswd" minlength="6" maxlength="10" required autocomplete="off" />
                                            </div>
                                        </div>
                                        <!-- <div class="d-flex flex-row align-items-center mb-2">
                                            <i class="fas fa-address-book fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="number" min="9999999999" max="9999999999" class="form-control" placeholder="Contact number" name="contacts" required autocomplete="off" />
                                            </div>
                                        </div> -->
                                        <div class="d-flex justify-content-center mx-4 mb-2 mb-lg-0">
                                            <input type="submit" class="btn btn-primary" name="sign-up" value="Submit" />
                                        </div>
                                        <div class="linkers">Already have an account?<a class="text-primary" href="sign-in.php" target="_self"> Signin now</a></div>
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
        function pswd_visible() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>

</html>