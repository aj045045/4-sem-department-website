<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="./../links/bs5/bs.min.css">
    <script src="./include/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./../links/css/tw.css">
</head>

<body class=" tw-flex-col tw-flex tw-p-20 tw-gap-y-10 tw-bg-gradient-to-br tw-from-indigo-500 tw-from-10% tw-via-sky-500 tw-via-30% tw-to-emerald-500 tw-to-90%">
    <!-- Div for Add / Update Data  -->
    <div class="tw-flex-col tw-flex tw-gap-y-4">
        <div class="tw-flex-row tw-flex tw-gap-x-10">
            <a href="event.php" class="tw-bg-white tw-rounded-lg tw-cursor-pointer hover:tw-shadow-md hover:tw-shadow-slate-300 tw-text-lg tw-pr-5 tw-py-2 tw-flex sm:tw-flex-row tw-flex-col tw-my-2">
                <img class="tw-hidden md:tw-block tw-w-6 tw-mx-2 tw-rounded-full tw-my-auto tw-h-6 " id="image' . $i . '-preview" src="./../image/logos/plus-icon.jpg" alt="Title">
                Do you like to add &nbsp;<strong>Event</strong>&nbsp; in department of computer science ?
            </a>
            <a href="news.php" class="tw-ml-auto tw-bg-white tw-rounded-lg tw-cursor-pointer hover:tw-shadow-md hover:tw-shadow-slate-300 tw-text-lg tw-pr-5 tw-py-2 tw-flex sm:tw-flex-row tw-flex-col tw-my-2 ">
                <img class="tw-hidden md:tw-block tw-w-6 tw-mx-2 tw-rounded-full tw-my-auto tw-h-6 " id="image' . $i . '-preview" src="./../image/logos/plus-icon.jpg" alt="Title">
                Click to add &nbsp;<strong>News</strong>&nbsp; for department 
            </a>
        </div>
        <div class="tw-flex-row tw-flex tw-gap-x-10">
            <a href="documents.php" class="tw-bg-white tw-rounded-lg tw-cursor-pointer hover:tw-shadow-md hover:tw-shadow-slate-300 tw-text-lg tw-pr-5 tw-py-2 tw-flex sm:tw-flex-row tw-flex-col tw-my-2">
                <img class="tw-hidden md:tw-block tw-w-6 tw-mx-2 tw-rounded-full tw-my-auto tw-h-6 " id="image' . $i . '-preview" src="./../image/logos/plus-icon.jpg" alt="Title">
                Do you like to add &nbsp;<strong>Result&nbsp;/&nbsp;Papers</strong>&nbsp; in department of computer science ?
            </a>
            <a href="news.php" class="tw-ml-auto tw-bg-white tw-rounded-lg tw-cursor-pointer hover:tw-shadow-md hover:tw-shadow-slate-300 tw-text-lg tw-pr-5 tw-py-2 tw-flex sm:tw-flex-row tw-flex-col tw-my-2 ">
                <img class="tw-hidden md:tw-block tw-w-6 tw-mx-2 tw-rounded-full tw-my-auto tw-h-6 " id="image' . $i . '-preview" src="./../image/logos/plus-icon.jpg" alt="Title">
                Click to add &nbsp;<strong>News</strong>&nbsp; for department 
            </a>
        </div>
        <div class="tw-flex-row tw-flex tw-gap-x-10">
            <a href="event.php" class="tw-bg-white tw-rounded-lg tw-cursor-pointer hover:tw-shadow-md hover:tw-shadow-slate-300 tw-text-lg tw-pr-5 tw-py-2 tw-flex sm:tw-flex-row tw-flex-col tw-my-2">
                <img class="tw-hidden md:tw-block tw-w-6 tw-mx-2 tw-rounded-full tw-my-auto tw-h-6 " id="image' . $i . '-preview" src="./../image/logos/plus-icon.jpg" alt="Title">
                Do you like to add &nbsp;<strong>Event</strong>&nbsp; in department of computer science ?
            </a>
            <a href="news.php" class="tw-ml-auto tw-bg-white tw-rounded-lg tw-cursor-pointer hover:tw-shadow-md hover:tw-shadow-slate-300 tw-text-lg tw-pr-5 tw-py-2 tw-flex sm:tw-flex-row tw-flex-col tw-my-2 ">
                <img class="tw-hidden md:tw-block tw-w-6 tw-mx-2 tw-rounded-full tw-my-auto tw-h-6 " id="image' . $i . '-preview" src="./../image/logos/plus-icon.jpg" alt="Title">
                Click to add &nbsp;<strong>News</strong>&nbsp; for department 
            </a>
        </div>
    </div>

    <!-- Div for Summary in cards  -->
    <div class=""></div>

    <!-- Div for Details of Faculty, Awards and collaborators -->
    <div class=" tw-bg-slate-100 tw-text-center tw-shadow-md tw-shadow-slate-300 tw-rounded-lg">
        <div class=" tw-capitalize tw-text-7xl tw-my-5" style="font-family: Brush Script MT;">Details</div>
        <div class=" tw-flex-col tw-flex tw-h-26 tw-bg-slate-300 tw-rounded-lg tw-m-5 tw-shadow-lg tw-shadow-slate-500">
            <div class=" tw-capitalize tw-text-center tw-font-serif tw-text-4xl tw-my-5">Faculty</div>
        </div>
        <div class=" tw-flex-col tw-flex tw-h-26 tw-bg-slate-300 tw-rounded-lg tw-m-5 tw-shadow-lg tw-shadow-slate-500">
            <div class=" tw-capitalize tw-text-center tw-font-serif tw-text-4xl tw-my-5">Awards</div>
        </div>
        <div class=" tw-flex-col tw-flex tw-h-26 tw-bg-slate-300 tw-rounded-lg tw-m-5 tw-shadow-lg tw-shadow-slate-500">
            <div class=" tw-capitalize tw-text-center tw-font-serif tw-text-4xl tw-my-5">collaborators</div>
        </div>
    </div>

  
</body>

</html>