<?php
include "./../links/include/db.php";
if (isset($_POST['userIdApproved'])) {
    $user_id = $_POST['userIdApproved'];
    $sql = "UPDATE `user` SET  `use_category_id` = 3 WHERE user_id = $user_id ";
    $result = $conn->query($sql);
}
if (isset($_POST['userIdDeclined'])) {
    $user_id = $_POST['userIdDeclined'];
    $sql = "CALL delete_student('$user_id')";
    $result = $conn->query($sql);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../links/css/output.css">
    <title>Admin</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>

<body class=" bg-slate-300">
<!-- Student request -->
    <?php
    $sql = "SELECT u.user_id, u.user_name, u.user_email,s.student_batch_year, s.student_sem, c.course_name 
        FROM user u 
        INNER JOIN student s ON u.user_id= s.user_id 
        INNER JOIN course c ON s.course_id = c.course_id 
        WHERE u.use_category_id = 0;";
    $sqlQuery = $conn->query($sql);
    if ($sqlQuery->num_rows > 0) {
    ?>
        <div class="w-4/5 mx-auto bg-white rounded-lg shadow-lg ">
            <table class="w-8/12 mx-auto mt-10 text-sm text-justify table-auto sm:w-11/12 font-sanserif sm:text-md ">
                <thead class="font-bold text-center capitalize">
                    <tr class="border-b-2 border-gray-400 sm:border-b-2 ">
                        <td class="py-4">Status</td>
                        <td class="py-4">Name</td>
                        <td class="py-4">Email</td>
                        <td class="py-4">Course</td>
                        <td class="py-4">Semester</td>
                        <td class="py-4">Batch</td>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php
                    while ($row = $sqlQuery->fetch_assoc()) {
                    ?>
                        <tr class="font-sans hover:bg-slate-200 ">
                            <td class="py-2">
                                <form action="" method="post" id="approved">
                                    <input checked type="checkbox" name="userIdDeclined" value="<?php echo $row['user_id']; ?>" class="w-4 h-4 accent-blue-500">
                                    <input checked type="checkbox" name="userIdApproved" value="<?php echo $row['user_id']; ?>" class="w-4 h-4 sm:ml-4 accent-red-500 l-2">
                                </form>
                            </td>
                            <td class="py-2"><?php echo ucfirst($row['user_name']); ?></td>
                            <td class="py-2"><?php echo $row['user_email']; ?></td>
                            <td><?php echo $row['course_name']; ?></td>
                            <td><?php echo $row['student_sem']; ?></td>
                            <td><?php echo $row['student_batch_year']; ?></td>
                        </tr>
                <?php
                    }
                }
                ?>
                </tbody>
            </table>
        </div>
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
        </script>
</body>

</html>