<?php
$cookie_name = "user";
$cookie_value = "John Doe";
$cookie_expiration = time() + (86400 /* 1 day */ * 30);
setcookie($cookie_name, $cookie_value, $cookie_expiration, "/");

// Modify cookie
$cookie_value = "Jane Doe";
setcookie($cookie_name, $cookie_value, $cookie_expiration, "/");

// Delete cookie
setcookie($cookie_name, "", time() - 3600);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wow!</title>
</head>

<body>
    <h1>Welcome</h1>
    <?php require 'required.php' ?>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit dolor tempora ullam quisquam ipsum debitis molestias veniam amet, nihil libero culpa ut aspernatur expedita laborum recusandae tenetur nobis possimus commodi!</p>
    <?php # require 'missing.php' // remove # for this to take effect 
    ?>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit dolor tempora ullam quisquam ipsum debitis molestias veniam amet, nihil libero culpa ut aspernatur expedita laborum recusandae tenetur nobis possimus commodi!</p>

    <?php require 'file-manipulation.php';  ?>
    <p></p>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload image" name="submit">
    </form>

    <?php

    if (!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }

    ?>

    <?php include 'footer.php';  ?>
</body>

</html>