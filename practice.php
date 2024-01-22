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
nl();
tp($nama[0]); // print string dari huruf index ke-0
tp($nama[-1]); // print string dari huruf index terakhir
$cantik[0] = 'm'; nl(); // ganti satu huruf di string
tp($cantik); nl();
$cantik = <<<TEXT
nama
saya
fathur
TEXT; // MULTILINE STRING Heredoc
tp(nl2br($cantik)); // nl2br = buat kasih newline ke string berjajar
