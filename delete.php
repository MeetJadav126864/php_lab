<?php
include'db.php';
$sql = "delete from student where course ='bca' ";
mysqli_query($conn,$sql);

echo "record delete";

?>
