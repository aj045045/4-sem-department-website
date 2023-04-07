<!doctype html>
<html lang="en">

<head>
    <title>Sign up</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include "./links/include/link.php" ?>
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
            margin: 0px 80px;
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
            height: 9in;
            width: auto;
            overflow: hidden;
            margin-bottom: 1in;
        }

        input[type="file"] {
            display: none;
        }


        .preview>#file-preview {
            width: 200px;
            border: 50%;
        }
    </style>
</head>

<body style="background-color: #eee" id="hide">
    <div style="padding-bottom: 2in;"></div>
    <?php include "./links/include/header.php" ?>
    <section class="vh-100">

        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100 ">
                <div class="col-lg-7 col-xl-6">
                    <div class="text-black card" style="border-radius: 25px;">
                        <div class="preview">
                            <img src="image/logos/bgfreelogo.webp" id="file-preview" class="center" alt="department o computer science logos">
                        </div>
                        <?php
                            include "./links/php/user-mgmt.php";
                            echo $error;
                        ?>
                        <h4 class="card-title " style="color: #657388;padding-left:10px;">Maharishi pingla, School of
                            advance
                            computing and
                            information technology</h4>
                        <div class="card-body">
                            <div class="row justify-content-center ">
                                <p class="mb-2 text-center h1 fw-bold mx-md-3 ">Sign up</p>
                                <!--TODO: Form for sign-up -->
                                <form action="./links/php/user-mgmt.php" method="POST" id="form" enctype="multipart/form-data">
                                    <label class="inline-block w-80 h-10 p-2 my-2 ml-10 bg-white border-gray-300 rounded-md border-1 sm:ml-12 text-md">Select Your avatar
                                        <input type="file" name="profile" accept="image/jpg, image/png,image/jpeg, image/webp" onchange="showPreview(event);">
                                    </label>
                                    <div class="flex-row mb-2 d-flex align-items-center">
                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="mb-0 form-outline flex-fill">
                                            <input type="text" id="form3Example1c" class="form-control" placeholder="User Name" name="name" minlength="4" required autocomplete="off" />
                                        </div>
                                    </div>
                                    <div class="flex-row mb-2 d-flex align-items-center">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="mb-0 form-outline flex-fill">
                                            <input type="email" name="mail" class="form-control" placeholder="Mail" required autocomplete="off" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="flex flex-row">
                                            <div class="mb-2 ml-14 sm:ml-16 sm:w-52 ">
                                                <select class="form-select " required id="option" autocomplete="off" name="course">
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
                                            <input type="number" class="w-16 p-2 mb-2 ml-4 text-sm bg-white border-gray-300 rounded-md sm:ml-8 sm:w-24 h-9 border-1 focus:ring focus:ring-blue-200 focus:outline-none" id="semester" placeholder="Semester" name="semester" min="1" max="10" required autocomplete="off" />
                                        </div>
                                    </div>
                                    <div class="flex flex-row mx-auto" >
                                    <i class="fa fa-address-card" ></i>
                                    <input type="text" class="w-2/3 p-1 mb-2 ml-6 text-sm border-gray-300 rounded-md sm:w-2/4 border-1 focus:ring focus:ring-blue-200 focus:outline-none h-9 "name="address" placeholder="Address">    
                                    <input type="number" class="w-20 p-1 mb-2 ml-4 text-sm border-gray-300 rounded-md border-1 focus:ring focus:ring-blue-200 focus:outline-none h-9" name="batch" placeholder="Batch Year">
                                    </div>
                                    <div class="flex-row mb-2 d-flex align-items-center">
                                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                        <div class="mb-0 form-outline flex-fill">
                                            <input type="password" id="pswd_input1" class="form-control" placeholder="Password" name="password" minlength="6" maxlength="10" required autocomplete="off" />
                                        </div>
                                    </div>
                                    <div class="flex-row mb-2 d-flex align-items-center">
                                        <i class="fas fa-check fa-lg me-3 fa-fw"></i>
                                        <div class="mb-0 form-outline flex-fill">
                                            <input type="password" id="pswd_input2" class="form-control" placeholder="Confirm your password" name="confirm_password" minlength="6" maxlength="10" required autocomplete="off" />
                                        </div>
                                    </div>
                                    <div class="flex-row mb-2 d-flex align-items-center">
                                        <div class="mb-0 form-outline flex-fill">
                                            <input type="checkbox" id="checkes" onclick="pswd_visible()" style="margin:0px 3%;  width:15px; height:15px;"> Show Password
                                        </div>
                                    </div>
                                    <div class="mx-4 mb-2 d-flex justify-content-center mb-lg-0">
                                        <input type="submit" class="px-3 py-1 text-blue-600 capitalize border-blue-500 rounded-lg border-1 hover:bg-blue-700 hover:text-white" name="student-request" value="Request" />
                                    </div>
                                    <div class="linkers">Already have an account?<a class="text-primary" href="sign-in.php" target="_self"> Sign-in now</a></div>
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
        var x1 = document.getElementById("pswd_input1");
        var x2 = document.getElementById("pswd_input2");

        function pswd_visible() {
            if (x1.type === "password" && x2.type === "password") {
                x1.type = "text";
                x2.type = "text";
                setTimeout(MakeCheckNull, 2000);
            } else {
                x1.type = "password";
                x2.type = "password";
            }
        }

        function MakeCheckNull() {
            var x = document.getElementById("checkes");
            if (x.checked == true) {
                x.checked = false;
                x1.type = "password";
                x2.type = "password";
            }
        }

        function showPreview(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-preview");
                preview.src = src;
                preview.style.display = "block";
            }
        }
    </script>
</body>

</html>