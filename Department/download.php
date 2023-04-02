<!-- TODO: Download pdf files
-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include "links/include/link.php"?>
    <style>
        th {
            text-align: center;
        }
    .btn-outline-primary{
        max-height:35px;
        color: #002147;;
    }
    .icon-input-btn{
        display:inline-block;
        position: relative;
    }
    .icon-input-btn input[type="submit"]{
        padding-left: 2em;
    }
    .icon-input-btn .fa{
        display: inline-block;
        position: absolute;
        left: 0.30em;
        top: 30%;
    }
    .view{
        padding:3% 10%;
    }
    @media only screen and (min-width: 800px) {
    .view{
        padding:2% 30%;
    }
}
    </style>
    <script>
        $(document).ready(function(){
            $(".icon-input-btn").each(function(){
                var btnFont = $(this).find(".btn").css("font-size");
                var btnColor = $(this).find(".btn").css("color");
                $(this).find(".fa").css({'font-size': btnFont, 'color': btnColor});
            });
        });
        </script>
</head>
<body>
    <!-- Scroll button -->
    <?php include "links/include/header.php"?>
    <div class="view">
        <br>
        <ul class="breadcrumb" style="padding-top:100px;">
            <li><a href="home.html">Home</a></li>
            <li>  Syllabus</li>
        </ul>
        <div class="pill">  Syllabus</div><br>
        <table class="table table-borderless">
            <thead class="thead-inverse" style="background-color:#034087;color:white;">
                <tr>
                    <th colspan="2">Doctor Of Philosophy (Ph.D)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="row"><b>Semister 1 Syllabus :
                        <form action="">
                        <input type="hidden" name="course" value="1">
                        <input type="hidden" name="sem" value="1">
                        <span class="icon-input-btn"><i class="fa fa-download"></i>
                        <input type="submit" class="btn btn-outline-primary" name="download-pdf" value="  Downloads"></b></td>
                            </span></b></td>
                    </form>
                    <td></td>
                </tr>
                <tr>
                    <td class="row"><b>Semister 2 Syllabus :<form action="">
                        <input type="hidden" name="course" value="1">
                        <input type="hidden" name="sem" value="2">
                        <span class="icon-input-btn"><i class="fa fa-download"></i>
                        <input type="submit" class="btn btn-outline-primary" name="download-pdf" value="  Downloads"></b></td>
                            </span></b></td>
                    </form>
                    <td></td>
                </tr>
                <tr>
                    <td class="row"><b>Semister 3 Syllabus :<form action="">
                        <input type="hidden" name="course" value="1">
                        <input type="hidden" name="sem" value="3">
                        <span class="icon-input-btn"><i class="fa fa-download"></i>
                        <input type="submit" class="btn btn-outline-primary" name="download-pdf" value="  Downloads"></b></td>
                            </span></b></td>
                    </form>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <table class="table table-borderless">
            <thead class="thead-inverse" style="background-color:#034087;color:white;">
                <tr>
                    <th colspan="2">M.Sc in Computer Science (M.Sc(cs))</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="row"><b>Semister 1 Syllabus :
                        <form action="">
                            <input type="hidden" name="course" value="2">
                            <input type="hidden" name="sem" value="1">
                            <span class="icon-input-btn"><i class="fa fa-download"></i>
                        <input type="submit" class="btn btn-outline-primary" name="download-pdf" value="  Downloads"></b></td>
                            </span>
                        </form>
                    <td></td>
                </tr>
                <tr>
                    <td class="row"><b>Semister 2 Syllabus :
                        <form action="">
                            <input type="hidden" name="course" value="2">
                            <input type="hidden" name="sem" value="2">
                            <form action="">
                        <input type="hidden" name="course" value="msc(cs)">
                        <input type="hidden" name="sem" value="3">
                        <span class="icon-input-btn"><i class="fa fa-download"></i>
                        <input type="submit" class="btn btn-outline-primary" name="download-pdf" value="  Downloads"></b></td>
                            </span></b></td>
                    </form>
                        </form>
                    <td></td>
                </tr>
                <tr>
                    <td class="row"><b>Semister 3 Syllabus :
                        <form action="">
                        <input type="hidden" name="course" value="2">
                        <input type="hidden" name="sem" value="3">
                        <span class="icon-input-btn"><i class="fa fa-download"></i>
                        <input type="submit" class="btn btn-outline-primary" name="download-pdf" value="  Downloads"></b></td>
                            </span></b></td>
                    </form>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <table class="table table-borderless">
            <thead class="thead-inverse" style="background-color:#034087;color:white;">
                <tr>
                    <th colspan="2">
                        M.Sc in Artificial Intelligence & Machine Learning (M.Sc(AI & ML))</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="row"><b>Semister 1 Syllabus :<form action="">
                        <input type="hidden" name="course" value="3">
                        <input type="hidden" name="sem" value="1">
                        <span class="icon-input-btn"><i class="fa fa-download"></i>
                        <input type="submit" class="btn btn-outline-primary" name="download-pdf" value="  Downloads"></b></td>
                            </span></b></td>
                    </form>
                    <td></td>
                </tr>
                <tr>
                    <td class="row"><b>Semister 2 Syllabus :<form action="">
                        <input type="hidden" name="course" value="3">
                        <input type="hidden" name="sem" value="2">
                        <span class="icon-input-btn"><i class="fa fa-download"></i>
                        <input type="submit" class="btn btn-outline-primary" name="download-pdf" value="  Downloads"></b></td>
                            </span></b></td>
                    </form>
                    <td></td>
                </tr>
                <tr>
                    <td class="row"><b>Semister 3 Syllabus :<form action="">
                        <input type="hidden" name="course" value="3">
                        <input type="hidden" name="sem" value="3">
                        <span class="icon-input-btn"><i class="fa fa-download"></i>
                        <input type="submit" class="btn btn-outline-primary" name="download-pdf" value="  Downloads"></b></td>
                            </span></b></td>
                    </form>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <br><br><br>
        <table class="table table-borderless">
            <thead class="thead-inverse" style="background-color:#034087;color:white;">
                <tr>
                    <th colspan="2">
                        Master of Technology in network & communication (M.tech-nc)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="row"><b>Semister 1 Syllabus :<form action="">
                        <input type="hidden" name="course" value="4">
                        <input type="hidden" name="sem" value="1">
                        <span class="icon-input-btn"><i class="fa fa-download"></i>
                        <input type="submit" class="btn btn-outline-primary" name="download-pdf" value="  Downloads"></b></td>
                            </span></b></td>
                    </form>
                    <td></td>
                </tr>
                <tr>
                    <td class="row"><b>Semister 2 Syllabus :<form action="">
                        <input type="hidden" name="course" value="4">
                        <input type="hidden" name="sem" value="2">
                        <span class="icon-input-btn"><i class="fa fa-download"></i>
                        <input type="submit" class="btn btn-outline-primary" name="download-pdf" value="  Downloads"></b></td>
                            </span></b></td>
                    </form>
                    <td></td>
                </tr>
                <tr>
                    <td class="row"><b>Semister 3 Syllabus :<form action="">
                        <input type="hidden" name="course" value="4">
                        <input type="hidden" name="sem" value="3">
                        <span class="icon-input-btn"><i class="fa fa-download"></i>
                        <input type="submit" class="btn btn-outline-primary" name="download-pdf" value="  Downloads"></b></td>
                            </span></b></td>
                    </form>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <br><br><br>
        <table class="table table-borderless">
            <thead class="thead-inverse" style="background-color:#034087;color:white;">
                <tr>
                    <th colspan="2">
                        Master of Technology in web Technology (M.tech-wt)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="row"><b>Semister 1 Syllabus :<form action="">
                        <input type="hidden" name="course" value="5">
                        <input type="hidden" name="sem" value="1">
                        <span class="icon-input-btn"><i class="fa fa-download"></i>
                        <input type="submit" class="btn btn-outline-primary" name="download-pdf" value="  Downloads"></b></td>
                            </span></b></td>
                    </form>
                    <td></td>
                </tr>
                <tr>
                    <td class="row"><b>Semister 2 Syllabus :<form action="">
                        <input type="hidden" name="course" value="5">
                        <input type="hidden" name="sem" value="2">
                        <span class="icon-input-btn"><i class="fa fa-download"></i>
                        <input type="submit" class="btn btn-outline-primary" name="download-pdf" value="  Downloads"></b></td>
                            </span></b></td>
                    </form>
                    <td></td>
                </tr>
                <tr>
                    <td class="row"><b>Semister 3 Syllabus :<form action="">
                        <input type="hidden" name="course" value="5">
                        <input type="hidden" name="sem" value="3">
                        <span class="icon-input-btn"><i class="fa fa-download"></i>
                        <input type="submit" class="btn btn-outline-primary" name="download-pdf" value="  Downloads"></b></td>
                            </span></b></td>
                    </form>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <br><br><br>
        <table class="table table-borderless">
            <thead class="thead-inverse" style="background-color:#034087;color:white;">
                <tr>
                    <th colspan="2">
                        Master Of Computer Applications (MCA)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="row"><b>Semister 1 Syllabus :<form action="">
                        <input type="hidden" name="course" value="6">
                        <input type="hidden" name="sem" value="1">
                        <span class="icon-input-btn"><i class="fa fa-download"></i>
                        <input type="submit" class="btn btn-outline-primary" name="download-pdf" value="  Downloads"></b></td>
                            </span></b></td>
                    </form>
                    <td></td>
                </tr>
                <tr>
                    <td class="row"><b>Semister 2 Syllabus :<form action="">
                        <input type="hidden" name="course" value="6">
                        <input type="hidden" name="sem" value="2">
                        <span class="icon-input-btn"><i class="fa fa-download"></i>
                        <input type="submit" class="btn btn-outline-primary" name="download-pdf" value="  Downloads"></b></td>
                            </span></b></td>
                    </form>
                    <td></td>
                </tr>
                <tr>
                    <td class="row"><b>Semister 3 Syllabus :<form action="">
                        <input type="hidden" name="course" value="6">
                        <input type="hidden" name="sem" value="3">
                        <span class="icon-input-btn"><i class="fa fa-download"></i>
                        <input type="submit" class="btn btn-outline-primary" name="download-pdf" value="  Downloads"></b></td>
                            </span></b></td>
                    </form>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <br><br><br>
        <table class="table table-borderless">
            <thead class="thead-inverse" style="background-color:#034087;color:white;">
                <tr>
                    <th colspan="2">
                        Post Graduate Diploma in Computer Science & Applications (PGDCSA)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="row"><b>Semister 1 Syllabus :<form action="">
                        <input type="hidden" name="course" value="7">
                        <input type="hidden" name="sem" value="1">
                        <span class="icon-input-btn"><i class="fa fa-download"></i>
                        <input type="submit" class="btn btn-outline-primary" name="download-pdf" value="  Downloads"></b></td>
                            </span></b></td>
                    </form>
                    <td></td>
                </tr>
                <tr>
                    <td class="row"><b>Semister 2 Syllabus :<form action="">
                        <input type="hidden" name="course" value="7">
                        <input type="hidden" name="sem" value="2">
                        <span class="icon-input-btn"><i class="fa fa-download"></i>
                        <input type="submit" class="btn btn-outline-primary" name="download-pdf" value="  Downloads"></b></td>
                            </span></b></td>
                    </form>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <br><br><br>
    </div>
    <?php include "links/include/footer.php"?>
</body>
</html>
