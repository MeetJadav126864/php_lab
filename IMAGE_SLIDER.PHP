<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image upload</title>
</head>
<body>
    <form method="POST" enctype= "multipart/form-data" >
      Select an image to upload:<input name="img" type="file">
        <input type="submit">
    </form>
</body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $image = $_FILES["img"];
    $name = $image["name"];
    $tmp = $image["tmp_name"];
    $error = $image["error"];

    if (!is_dir("uploads")) {
        mkdir("uploads");
    }

    if ($error) {
        echo "error occured";
    }

    move_uploaded_file($tmp, "uploads/" . $name);

    echo "Image Uploaded Successfully!";

}
?>