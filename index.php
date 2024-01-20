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
            // VARIABLES AND STRING MANIPULATIONS
                echo "<p>fathur itu ", $ganteng,"</p>";
                echo "<p>panjang tongkat itu adalah $panjang cm</p>";
                echo "<p>", str_repeat($jurusan, 2), "</p>";
                echo "<p>Fathur ", str_replace('banget', 'sekali', $ganteng), "<br></p";
                echo "<p>", substr($paragraf, 0, 40), "</p>";
            // CONTROL
                if (date('l') == 'Saturday') {
                    echo "<p><strong>kami tutup</strong></p>";
                } else {
                    echo "<p>kami buka dari jam 7</p>";
                }
                echo "<p>WHILE LOOP</p>";
                while ($panjang < 20) {
                        echo $panjang, "<br>";
                        $panjang++;
                }
                echo "<p>FOR LOOP</p>";
                echo "<hr>";
                for ($i = 0; $i < 5; $i++) {
                    echo $i, "<br>";
                }
                
                echo $cantik, "<br>";
                echo $dia;
                nl();
                echo gettype($suhu);
                var_dump($ujan);
                print_r($hewan);
            ?>
        </div>
    </div>

</body>

</html>