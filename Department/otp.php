<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>otp</title>
    <?php include "links/include/link.php" ?>
</head>

<body class=" bg-gray-200">
    <?php echo $_SESSION['mail']; ?>
    <?php include "links/include/header.php" ?>
    <div class=" bg-white my-56 mx-auto sm:w-96 w-4/5 shadow-xl rounded-xl px-3">
        <p class=" capitalize mx-5 pt-3 text-xl ">e-mail verification</p>
        <p class=" italic "> We have sent a verification code to your email - </p>
        <form action="" method="post">
            <div class="mx-auto px-10">
                <input type="number" name="verified-otp" class="border-1 border-gray-500 rounded-md mt-5 w-full p-2 text-sm focus:ring focus:outline-none focus:outline-offset-4 focus: ring-blue-300" placeholder="Enter verification code"><br>
                <input type="submit" class="w-full bg-blue-600 rounded-md my-3 text-white focus:ring focus:outline-none focus:ring-blue-400 focus:ring-offset-8" value="Submit">
            </div>
        </form>
    </div>
    <?php include "links/include/footer.php" ?>
</body>

</html>