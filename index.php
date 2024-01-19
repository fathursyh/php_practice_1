<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./style.css">

</head>
<?php include 'time.php'; ?>
<?php include 'variables.php'; ?>

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
                echo "<p>fathur itu ", $fathur,"</p>";
                echo "<p>panjang tongkat itu adalah $panjang cm</p>"
            ?>
        </div>
    </div>

</body>

</html>