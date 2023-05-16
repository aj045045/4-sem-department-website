<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "dcsdb";

    $connection = mysqli_connect($host, $username, $password, $database);

    if (mysqli_connect_errno()) {
        die("Connection failed: " . mysqli_connect_error());
    }




$query = "SELECT seat_number, boys_fees, girls_fees FROM course WHERE course_id = 5";
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
    echo "No data found for course with ID 1";
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
</head>

<body class="mx-3 sm:mx-5">
    <div class="flex flex-initial h-20 px-10 mt-6 bg-green-900 sm:px-32 sm:h-32 ">
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
            <img src="./image/slideshows/3slide.webp" alt="Department of computer science "
                class="w-full h-20 rounded-lg sm:h-36">
            <div
                class="mt-6 font-semibold text-center text-white rounded-lg bg-gradient-to-r from-blue-100 to-green-900">
                <div class="text-lg sm:text-2xl">PGDSA</div>
                <div class="font-serif text-sm font-thin sm:text-xl">(Post Graduate Diploma in Computer Science &
                    Applications)</div>
            </div>
        </div>
    </div>
    <!-- TABLE 1 -->
    <table class="w-full mx-auto mt-10 font-serif text-sm text-justify capitalize table-auto sm:text-lg">
        <thead class="text-center text-white bg-green-800 ">
            <tr>
                <th class="py-2 pr-5">Admission</th>
                <th class="py-2 pr-5"> Post Graduate Diploma in Computer Science & Applications</th>
                <th class="py-2 pr-5"> About PGDCSA</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <ul>
                        <li>
                            Admission Process through Gujarat University online Admission Portal:
                            <href a="https://www.gujaratuniversity.ac.in/">Click here to enroll now</href>
                        </li>

                </td>
                <td class="px-6 pt-0"> In this course, students learn variety of subjects such as Basic Computer
                    Operations,Office Suite,Operating System,Programming skill and logic development using C
                    language,Object Oriented Concepts and its implementation using Python,Database Management Systems
                    ,Web Designing and Web Application Development through PHP,Tally and many more</td>
                <td>
                    <ul class="list-disc sm:pl-6">
                        <li>1-year Post Graduate Diploma Course with <B>System Development Project work</B>
                        </li>
                        <li><u>Number of Seats: <h3 class="fs-3"><?php  echo  $seatNumber . "<br>"; ?></h3>
                           
                            
                        </u></li>
                        </li>
                    </ul>
                </td>
            </tr>
        </tbody>
    </table>
    <!-- TABLE 2 -->
    <table class="w-full mx-auto mt-10 font-serif text-sm text-justify capitalize table-auto sm:text-lg">
        <thead class="text-center text-white bg-green-800 ">
            <tr>
                <th class="py-2 pr-5">Eligibility</th>
                <th class="py-2 pr-5"> Career Prospects</th>
                <th class="py-2 pr-5"> Fee Structure</th>
            </tr>
        </thead>
        <tbody>
            <tr>

                <td class="px-5"> <b>Graduate:</b> in any Discipline</td>
                <td class="px-6">
                    <ul>
                        <li>
                            Software Programmer,Web Designer and Web Application Developer,Tally Programmer etc.

                        </li>

                    </ul>
                </td>

                <td class="px-6">
                    <ul>
                        <li>
                            <b>Boys:</b><?php echo  $boysFees . "per Semester". "<br>";?>
                        </li>
                        <li>
                            <b>Girls:</b><?php  echo  $girlsFees . "per Semester"."<br>";?>
                        </li>
                    </ul>
                </td>

            </tr>
        </tbody>
    </table>
    <!-- TABLE 3 -->
    <table class="w-full mx-auto mt-10 font-serif text-sm text-justify capitalize table-auto sm:text-lg">
        <thead class="text-center text-white bg-green-800 ">
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
        <thead class="text-center text-white bg-green-800 ">
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
</body>

</html>