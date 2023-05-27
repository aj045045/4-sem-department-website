<?php
    include "include/connection/db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Awards</title>
    <link rel="stylesheet" href="include/css/bootstrap.min.css">
</head>
<body>
    <header class="border border-1">
        <h3>Header</h3>
    </header>
    <div class="container">
        <h1>Awards:</h1>
        <br>
        <a href="add_award.php" class="btn btn-primary">Add Award</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>Award Winner:</th>
                    <th>Award Name:</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT `award_id`, `award_winner`,`award_name` FROM `achievement`";

                $result = $conn->query($query);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $award_id = $row["award_id"];
                        $award_winner = $row["award_winner"];
                        $award_name = $row["award_name"];
                ?>
                        <tr>
                            <td><?php echo $award_winner; ?></td>
                            <td><?php echo $award_name; ?></td>
                            <td>
                                <a href="edit_award.php?award_id=<?php echo $award_id; ?>" class="edit-award-btn btn btn-primary">Edit</a>
                                <button id="delete-<?php echo $award_id; ?>" class="delete-award-btn btn btn-primary">Delete</button>
                            </td>
                        </tr>
                <?php
                    }
                } else {
                ?>
                    <h3>No awards found</h3>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <footer class="border border-1">
        <h3>Footer</h3>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="include/js/bootstrap.bundle.min.js"></script>
    <script>
        // delete award
        $(".delete-award-btn").on("click", function () {
            var award_id = this.id.slice(7);
            console.log("click");
            console.log(award_id);
            $.ajax({
                type: "post",
                url: "delete_award.php",
                data: { award_id: award_id },
                success: function (response) {
                    alert("Award deleted");
                    location.reload();
                }
            });
        });
    </script>
</body>
</html>
