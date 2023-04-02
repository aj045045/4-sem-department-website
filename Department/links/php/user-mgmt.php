<?php
    // SIGN-UP
    if (isset($_POST['sign-up'])) {
        $name = $_POST['name'];
        $mail = $_POST['mail'];
        $dep_role = $_POST['role'];
        $dep_course = $_POST['course'];
        $pswd = $_POST['pswd'];
        $con_pswd = $_POST['confirm_pswd'];
        if (($pswd == $conpwd)) {
            $ok = true;
            //! FETCH DATA FROM TABLE
            $sql = "SELECT * FROM user";
            $results = $conn->query($sql);
            if ($results->num_rows > 0) {
                while ($row = $results->fetch_assoc()) {
                    $v_name = $row['username'];
                    $v_mail = $row['mail'];
                                                                            // ? CHECK NAME AND EMAIL ID IS EXIST OR NOT
                    if (($v_name == $_SESSION['sname']) || ($v_mail == $_SESSION['email'])) {
                        $ok = false;
                    }
                } $conn->close();
            }
            if ($ok == false) {
                $error = "<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                            <button type=\"button\" class=\"btn-close \" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            ERROR: We have same account try to change your user name or use other e-mail id <br>PLEASE TRY AGAIN
                            </div>";
            } else {
                $error = "<script>
                        setTimeout(function() {
                        window.open('otp.php', '_self');
                        }, 100);
                        </script>";
                    }
        } else {
            $error = " <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                    <button type=\"button\" class=\"btn-close \" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    ERROR: Password and confirm password are not same <br>TRY AGAIN
                    </div>";
        }}
    // SIGN-IN
    
    // FORGET-PASSWORD


    class student{
    }
?>