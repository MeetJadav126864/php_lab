<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Page</title>
</head>
<body>
    <form method="post">
        <label>Name</label>
        <input type="text" name="name">
        <br>

        <label for="">GR NO</label>
        <input type="number" name="gr">
        <br>

        <label for="">Course</label>
        <input type="text" name="course">
        <br>
        
        <label for="">Email</label>
        <input type="email" name="email">
        <br>

        <input type="submit">
    </form>
</body>
</html>

<?php

    include "db.php";
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $name = $_POST['name'];
        $gr = $_POST['gr'];
        $course = $_POST['course'];
        $email = $_POST['email'];

        $sql="INSERT INTO `student`(`name`, `grno`, `course`, `email`) VALUES ('$name','$gr','$course','$email')";

        mysqli_query($conn,$sql);


        $sel = "select * from student";
        $result = mysqli_query($conn,$sel);
            
        if ($result -> num_rows>0) {
            while ($row = $result -> fetch_assoc()) {
                echo $row['email']." ".$row['grno']." ".$row['course']."<br>";
            }   
        }
                
    }           
            
?>