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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>

<body class=" tw-flex-col tw-flex tw-p-10 tw-gap-y-10">

    <!-- Div for Add / Update Data  -->
    <div class="tw-flex-col tw-flex tw-gap-y-4">
        <div class="tw-flex-row tw-flex">
            <div class="">Col</div>
            <div class="">Col</div>
        </div>
        <div class="tw-flex-row tw-flex">
            <div class="">Col</div>
            <div class="">Col</div>
        </div>
        <div class="tw-flex-row tw-flex">
            <div class="">Col</div>
            <div class="">Col</div>
        </div>
    </div>

    <!-- Div for Summary in cards  -->
    <div class="">ANSH</div>

    <!-- Div for Details of Faculty, Awards and collaborators -->
    <div class=" tw-bg-slate-400 tw-text-center tw-shadow-lg tw-shadow-slate-500 tw-rounded-md">
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

    <!-- @audit-info Jquery to form submit on click 
            <script>
            $(document).ready(
                function() {
                    $("input:checkbox").change(
                        function() {
                            if ($(this).prop("checked", false)) {
                                $("#approved").submit();
                            }
                        }
                    )
                }
            );
        </script> -->
</body>

</html>