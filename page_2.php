<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
    <link rel="stylesheet" href="./style.css">
</head>
    <?php
        include_once 'createdb.php';
        include_once 'functions.php'; 
        include_once 'variables.php'; 
        include_once 'variables2.php'; 
        include_once 'class.php'; 
        $root = dirname(__DIR__) . DIRECTORY_SEPARATOR;
        ?>
<body>
    <nav>
        <ul> <?php include 'navbar.php'; ?></ul>
    </nav>

    <div class="container">
        <div class="paper">
            <div class="inside">
                <?php 
                include_once 'match_switch.php';
                echo '<p>FILE MANIPULATION</p>';
                include_once 'file_practice.php';
                include_once 'class_practice.php';
                include_once 'transaction.php';
                include_once './inheritance2.php';
           ?>
           </div>
        </div>
    </div>
</body>

</html>