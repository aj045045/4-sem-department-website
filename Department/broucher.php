<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "links/include/link.php" ?> 
</head>
<body>

    <?php include "links/include/header.php" 
    print_r( scandir('/links/courses/'));
    echo $scan;
    foreach($scan as $file) {
       if (!is_dir("/links/courses/$file")) {
          echo $file.
          "";
       }
    }
    
    include "links/include/footer.php" ?>
    
    
</body>
</html>
 
