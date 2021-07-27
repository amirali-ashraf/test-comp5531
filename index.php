<?php 
    session_start();
    $var = 'Someone';
    if(isset($_SESSION["logged_in"]) &&  $_SESSION["logged_in"] == true) {
        $status = "Logged in.";
    } else {
        $status = "Not logged in.";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hello <?= $var?> !</h1>
    <h2>Status: <?= $status?> </h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam ratione vero sapiente. Deserunt nesciunt assumenda, tempora perspiciatis at odit voluptatum. Quam labore explicabo voluptates, facere qui consequuntur ut itaque aliquid!</p>
</body>
</html>