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
            // VARIABLES AND STRING MANIPULATIONS
                echo "<p>fathur itu ", $ganteng,"</p>";
                echo "<p>panjang tongkat itu adalah $panjang cm</p>";
                echo "<p>", str_repeat($jurusan, 2), "</p>";
                echo "<p>Fathur ", str_replace('banget', 'sekali', $ganteng), "<br></p";
                echo "<p>", substr($paragraf, 0, 40), "</p>";
            // CONTROL
                if (date('l') == 'Sunday') {
                    echo "<p>kami tutup</p>";
                } else {
                    echo "<p>kami buka dari jam 7</p>";
                }
                while ($panjang < 20) {
                    echo $panjang, "<br>";
                    $panjang++;
                }
                echo "<hr>";
                for ($i = 0; $i < 5; $i++) {
                    echo $i, "<br>";
                }
            ?>
        </div>
    </div>

</body>

</html>