
            
 <!-- Iframes --> 
    <?php
    $scan = (scandir('./links/courses/'));
    foreach ($scan as $file) {
        if (is_file("./links/courses/$file") ) {
            echo '<div class="w-2/4 pl-40 mx-auto text-white bg-blue-600 ">NEW COURSES</div><iframe src= ./links/courses/'. $file .'></iframe><br>';
            
        }
    }
    ?>




    <!-- Footer -->
    <?php include "links/include/footer.php"?>
</body>

</html>