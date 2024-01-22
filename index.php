<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./style.css">

</head>
<?php include_once 'time.php'; ?>
<?php include_once 'variables.php'; ?>
<?php include_once 'variables2.php'; ?>
<?php include_once 'functions.php'; ?>

<body>
    <nav>
        <ul>
            <?php include 'navbar.php'; ?>
        </ul>
    </nav>

    <div class="container">
        <div class="paper">
            <p>malam tahun baru tersisa <?php echo "$days" ?> hari lagi</p>
            <?php
            include_once 'practice.php';
            ?>
        </div>
    </div>

</body>

</html>