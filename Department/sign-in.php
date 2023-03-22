<!doctype html>
<html lang="en">

<head>
    <title>SIGN IN</title>
    <!-- Requireds meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include "links/include/link.php"?>
    <style>
    .card-img-top {
        margin: 1ch 30%;
        max-width: 150px;
    }
    .card-body{
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
    margin:0px auto;
        width: 60%;
        display: block;
    }
    .form-control{
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
        <?php include "links/include/header.php"?>  
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-7 col-xl-6">
                    <div class="card text-black" style="border-radius: 25px;">
                        <img src="image/logos/bgfreelogo.webp" class="card-img-top"
                            alt="department o computer science logos">
                        <h4 class="card-title " style="color: #657388;padding-left:10px">Maharishi pingla, School of
                            advance
                            computing and
                            information technology</h4>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div>
                                    <p class="text-center h1 fw-bold mb-4 mx-md-3 ">Sign in</p>
                                    <form class="mx-1 mx-md-4" action="./links/php/user-mgmt.php" method="POST">
                                        <div class="d-flex flex-row align-items-center mb-2">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="form3Example1c" class="form-control"
                                                    placeholder="User Name" name="name" required autocomplete="off" />
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center mb-2">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" id="form3Example4c" class="form-control"
                                                    placeholder="Password" name="password" minlength="6" required
                                                    autocomplete="off" />
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <input type="submit" class="btn btn-primary " name="sign-in"
                                                value="submit" />
                                        </div>
                                        <div class="linkers">Don't have an account?<a class="text-primary"
                                                href="sign-up.php" target="_self"> Signup now</a></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>