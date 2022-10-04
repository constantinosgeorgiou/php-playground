<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessioons</title>
</head>

<body>
    <?php
    echo "Favorite color is " . $_SESSION["favcolor"] . "<br>";
    echo "Favorite animal is " . $_SESSION["favanimal"] . "<br>";
    print_r($_SESSION);
    $_SESSION["favcolor"] = "yellow";
    print_r($_SESSION);
    session_unset(); // Remove all session variables
    print_r($_SESSION);
    session_destroy();
    print_r($_SESSION);
    ?>
</body>

</html>