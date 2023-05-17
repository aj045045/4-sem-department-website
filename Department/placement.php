<!-- //  TODO: About page
-->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include "links/include/link.php" ?>
<style>
        .scroll_bar::-webkit-scrollbar {
            height: 5px;
        }

        img.img {
            align-items: center;
            max-height: 80px;
            margin: auto;
        }

        .scroll_bar {
            height: 1in;
            padding-left: 7%;
            padding-right: 7%;
            margin: 4px, 4px;
            /* background-color: whitesmoke; */
            width: 100%;
            overflow-x: auto;
            overflow-y: hidden;
            white-space: nowrap;
            writing-mode: vertical-lr;
        }

        .scroll_bar:hover::-webkit-scrollbar-thumb {
            border-radius: 50px;
            background-color: grey;
        }
        p {
            text-align: justify;
        }
        </style>
    <a href="./../"></a>

</head>

<body>

    <!-- Scroll button -->
    <?php include "links/include/header.php" ?>
    <div style="padding-right:7%;padding-left:7%;">
        <br>
        <ul class="breadcrumb" style="padding-top:130px">
            <li>WHY DCS</li>
            <li>Placements</li>
        </ul>
        <div class="container">
            <div class="pill">100% placements</div>
            <br>
           <p>Over the last decades, the Department has emerged as one of the most favoured destination for hiring fresh talent from the campuses. It endeavours to provide industry compliant talent and emphasises on quality, discipline, self-learning, and ethics.
            </p>
            <br>
            <p>The placement model at Department is a stage process, involving the Pre-placement activities, Career Guidance, Executing Placement and Post-placement reviews.</p>
            <br>
            <p>The University is one of the most preferred campus for job placements by leading corporates. It has corporate linkages with over 80 companies which regularly conduct campus recruitment..</p>
        </div>
        <br><br><br>
        <div class="pill "> collaborators</div><br>
        <div class="scroll_bar">
            <img class="img" src="image/collaborators/1scr.webp">
            <img class="img" style="max-width:200px" src="image/collaborators/2scr.webp">
            <img class="img" src="image/collaborators/3scr.webp">
            <img class="img" src="image/collaborators/4scr.webp">
            <img class="img" src="image/collaborators/5scr.webp">
            <img class="img" src="image/collaborators/6scr.webp">
            <img class="img" src="image/collaborators/7scr.webp">
            <img class="img" src="image/collaborators/8scr.webp">
            <img class="img" src="image/collaborators/9scr.webp">
            <img class="img" src="image/collaborators/10scr.webp">
            <img class="img" src="image/collaborators/11scr.webp">
            <img class="img" src="image/collaborators/12scr.webp">
            <img class="img" src="image/collaborators/13scr.webp">
        </div>

    </div>
    <br><br><br>
    <?php include "links/include/footer.php" ?>
</body>

</html>