<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "dcsdb";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die('Database connection error: ' . mysqli_connect_error());
}

$query = "SELECT photo_document FROM photos";
$result = mysqli_query($conn, $query);

$photos = array();
while ($row = mysqli_fetch_assoc($result)) {
    $photos[] = $row;
}
?>

<!DOCTYPE html>
<html>

<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Photo Gallery</title>
    <?php include "links/include/link.php" ?>
    <style>
        .gallery-container {
            /* Adjust this value based on your navbar height */
            padding-bottom: 60px;
            /* Adjust this value based on your footer height */
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: flex-start;
        }

        .gallery-item {
            width: 400px;
            height: 200px;
            margin: 10px;
            overflow: hidden;
            position: relative;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            cursor: pointer;
        }


        .enlarged-image {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80%;
            max-height: 80%;
            background-color: rgba(0, 0, 0, 0.8);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 999;
        }

        .enlarged-image img {
            width: 100%;
            height: 90%;
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }
    </style>
</head>

<body>
    <?php include "links/include/header.php" ?>
    <?php include "links/include/db.php" ?>
    <div style="padding-right:40%;padding-left: 5%;">
        <ul class="breadcrumb" style="padding-top: 130px;">
            <li><a href="home.php">Home</a></li>
            <li>Gallery</li>
        </ul>
        <div class="pill">Gallery</div>
        <br>
    </div>
    <div class="gallery-container">
        <?php foreach ($photos as $photo) : ?>
            <div class="gallery-item">
                <img src="<?php echo $photo['photo_document']; ?>" data-aos="zoom-in" data-aos-easing="ease-in-cubic" data-aos-duration="1000">

            </div>
        <?php endforeach; ?>
    </div>

    <div class="enlarged-image">
        <div class="image-container">
            <img src="" alt="Enlarged Photo">
        </div>
    </div>

    <?php include "links/include/footer.php" ?>
    <script>
        $(document).ready(function() {
            $('.gallery-item img').click(function() {
                var imageUrl = $(this).attr('src');
                $('.enlarged-image img').attr('src', imageUrl);
                $('.enlarged-image').fadeIn(1000);
            });

            $('.enlarged-image').click(function() {
                $('.enlarged-image').fadeOut();
            });
        });
    </script>
</body>

</html>