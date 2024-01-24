<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="./style.css">
</head>
    <?php
        include_once 'createdb.php';
        include_once 'functions.php'; 
        include_once 'variables.php'; 
        include_once 'variables2.php'; 
    ?>

<body>
    <nav>
        <ul> <?php include 'navbar.php'; ?></ul>
    </nav>

    <div class='container'>
        <div class='paper'>
            <?php include_once 'practice_page1.php'; ?>
        </div>
    </div>
</body>

</html>