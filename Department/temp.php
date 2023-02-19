<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "links/include/link.php"?>
    <style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 20px;
    }

    #myBtn {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        font-size: 18px;
        border: none;
        outline: none;
        background-color: red;
        color: white;
        cursor: pointer;
        padding: 15px;
        border-radius: 4px;
    }

    #myBtn:hover {
        background-color: #555;
    }
    </style>
</head>

<body>
    <?php include "links/include/header.php";?>
    </head>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

    <div style="background-color:black;color:white;padding:30px">Scroll Down</div>
    <div style="background-color:lightgrey;padding:30px 30px 2500px">This example demonstrates how to create a "scroll
        to top" button that becomes visible
        <strong>when the user starts to scroll the page</strong>.
    </div>

    <script>
    let mybutton = document.getElementById("myBtn");
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
    </script>
    <?php include "links/include/footer.php";?>
</body>

</html>