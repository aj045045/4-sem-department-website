<?php
include "links/include/db.php";


if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT fee, seat_number FROM course";
$result = mysqli_query($conn, $sql);


mysqli_close($conn);
?>


<script>
<?php while($row = mysqli_fetch_assoc($result)): ?>
  document.getElementById("fee").innerHTML = "<?php echo $row['fee']; ?>";
  document.getElementById("seat-number").innerHTML = "<?php echo $row['seat_number']; ?>";
<?php endwhile; ?>
</script>






