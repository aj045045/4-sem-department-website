<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "dcsdb";

$connection = mysqli_connect($host, $username, $password, $database);

if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
}




$query = "SELECT seat_number, boys_fees, girls_fees FROM course WHERE course_id = 8";
$result = mysqli_query($connection, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($connection));
}

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $seatNumber = $row["seat_number"];
    $boysFees = $row["boys_fees"];
    $girlsFees = $row["girls_fees"];

    // echo "Seat Number: " . $seatNumber . "<br>";
    // echo "Boys Fees: " . $boysFees . "<br>";
    // echo "Girls Fees: " . $girlsFees . "<br>";
} else {
    echo "No data found for course with ID 8";
}


?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./links/css/output.css">
    <?php include "links/include/link.php" ?>
</head>

<body>
    <?php include "links/include/header.php" ?>
    <br>
    <br>
    <br>
    <br>
    <div class=" mx-7 bg-white rounded-xl flex flex-col ">
        <div class="flex flex-initial h-20 px-10 overflow-hidden mt-6 bg-blue-900 rounded-t-lg sm:px-32 sm:h-32 ">
            <div class="flex flex-initial w-full font-serif bg-white">
                <img src="./image/logos/logo.webp" alt="University Tower" class="h-auto mr-4 w-14 sm:mr-10 sm:w-24 ">
                <div class="flex flex-col ">
                    <div class="text-lg font-semibold sm:text-3xl ">
                        Department of computer science
                    </div>
                    <div class="text-sm sm:text-xl">
                        Gujarat University <br>
                        Navrangpura, Ahmedabad - 380009 <br>
                    </div>
                </div>
            </div>

        </div>
        <div class="flex flex-initial mx-10 mt-6 sm:mx-32 ">
            <img src="./image/logos/Tower.png" alt="University Tower" class="items-start w-16 h-auto sm:w-20">
            <div class="w-full ">
                <img src="./image/slideshows/3slide.webp" alt="Department of computer science " class="w-full h-20 rounded-lg sm:h-36">
                <div class="mt-6 font-semibold text-center text-white rounded-lg bg-gradient-to-r from-blue-100 to-blue-900">
                    <div class="text-lg sm:text-2xl">5 Year Integrated Msc(Computer Science)</div>
                    <div class="font-serif text-sm font-thin sm:text-xl">(Master of Science-Computer Science)</div>
                </div>
            </div>
        </div>
        <!-- TABLE 1 -->
        <table class="w-full mx-auto mt-10 font-serif text-sm text-justify capitalize table-auto sm:text-lg">
            <thead class="text-center text-white bg-blue-800 ">
                <tr class=" grid grid-cols-3">
                    <th class="py-2 pr-5">Eligibility</th>
                    <th class="py-2 pr-5"> About Five Year Integrated Msc(Computer Science) </th>
                    <th class="py-2 pr-5"> Subject Taught</th>
                </tr>
            </thead>
            <tbody>
                <tr class="grid grid-cols-3 overflow-x-auto">
                    <td>
                        <li>
                            12th Science(A,B,AB group) or Commerce
                        </li>

                        <li>A student should have passed the qualifying examination with the following subjects.</li>

                        <li>English</li>
                        <li>Mathematics or Physics or Chemistry or Statistics or Accountancy</li>

                    </td>
                    <td class="px-6 pt-0">

                        <ul>
                            <li>
                                5 year Integrated Course with multiple specialization options available . The course is
                                designed as per NEP 2020 guidelines.Multiple entry and exit options are available . Exit
                                options available for students after 3 years with B.Sc. degree.
                            </li>
                            <li>
                                <u> Number of Seats:</u><?php echo  $seatNumber . "<br>"; ?>
                            </li>

                            <li>
                                </b> Fee Structure:<?php echo  $boysFees . "<br>"; ?></b>
                            </li>
                        </ul>
                    </td>
                    <td class="px-6">
                        <ul class="list-disc sm:pl-6">
                            <li>
                                In this course ,students learn variety of subjects such as Programming skills and logic
                                development (using C++,Advanced JAVA,Adv Python, Android and PHP),Data Analytics,Cloud
                                Computing ,Web Security,Artificial Intelligence and Machine Learning,Advanced Networking
                                ,Full Stack Development,DBMS and many more.
                            </li>
                    </td>
                    </ul>
                    </li>
                    </ul>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- TABLE 2 -->
        <table class="w-full mx-auto mt-10 font-serif text-sm text-justify capitalize table-auto sm:text-lg">
            <thead class="text-center text-white bg-blue-800 ">
                <tr>
                    <th class="py-2 pr-5">Admission Process</th>
                    <th class="py-2 pr-5"> Career Prospects</th>

                </tr>
            </thead>
            <tbody>
                <tr>

                    <td class="px-6">
                        <ul>
                            <li>
                                Admission process through Gujarat University
                                online admission Portal</li>
                            <li>
                                <a href="https://www.gujaratuniversity.ac.in/" class=" text-black hover:text-blue-500">Click here for more</a>
                            </li>
                        </ul>

                    </td>
                    <td class="px-6">
                        <ul>
                            <li>
                                Software Developer ,Software Craftsmen ,Full Stack , Application Developer,Data Analysis
                                ,Quality Analyst ,Website Designer/Developer Mobile app developer,AI developer,Business
                                Analyst,Database Administrator,Game Developer,Research Fellow

                            </li>

                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- TABLE 3 -->
        <table class="w-full mx-auto mt-10 font-serif text-sm text-justify capitalize table-auto sm:text-lg">
            <thead class="text-center text-white bg-blue-800 ">
                <tr>
                    <th class="py-2 pr-5 ">About Department of Computer Science</th>
                    <th class="py-2 pr-5 ">About Gujarat University</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>With consistent placement record of 100% the department is one of the premium and Pioneer institute
                        of Gujarat in computer education. With highly qualified ( Ph.D ) and experienced ( 20+ years )
                        faculties providing student centric learning, the department is known to produce well acclaimed
                        computer science professionals. It has a strong alumni base around the globe. With research-oriented
                        infrastructure and support, the department has tie ups with various research institutes</td>
                    <td class="pl-5 ">Gujarat University was established in 1949. The University is a public state
                        university located at Ahmedabad. Gujarat, India. The university is an affiliating university at the
                        under-graduated level and a teaching university at the post-graduated level. The GUSEC department is
                        boon for start-ups.</td>
                </tr>
            </tbody>
        </table>
        <!-- TABLE 4 -->
        <table class="w-full mx-auto mt-10 font-serif text-sm text-justify capitalize table-auto sm:text-lg">
            <thead class="text-center text-white bg-blue-800 ">
                <tr>
                    <th class="py-2 pr-5" colspan="2">Strength of Department of Computer Science</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <ul class="pl-4 list-disc">
                            <li>Emphasis on strengthening core subjects and programming skills</li>
                            <li>Hands on experience on all practical subject</li>
                            <li>Syllabus of subjects designed and offered as per industry demands</li>
                            <li>Ample technical infrastructure adn e-practices followed</li>
                            <li>Research oriented learning</li>
                        </ul>
                    </td>
                    <td>
                        <ul class="pl-6 list-disc">
                            <li>Cohesive family like environment in department</li>
                            <li>Transparency in overall academia activities</li>
                            <li>Remedial coaching for weak students</li>
                            <li>Campus Recruitment</li>
                            <li>Frequent expert sessions from industry giants</li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
</div>
        <br>
        <br>
        <br>
        <br>
        <?php include "links/include/footer.php" ?>
</body>

</html>