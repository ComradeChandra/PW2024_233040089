<?php
echo "<h4>Menghitung luas lingkaran</h4>";
function hitungLuasLingkaran($r) {
    echo "Jari-jari = $r <br>";
    $l = ($r * $r) * 3.14;
    echo "Luas lingkaran = $l cm²";
}

hitungLuasLingkaran(10);

echo "<hr />";
echo "<h4>Menghitung keliling lingkaran</h4>";
function hitungKelilingLingkaran($r) {
    echo "Jari-jari = $r <br>";
    $c = 2 * 3.14 * $r;
    echo "Keliling lingkaran = $c cm";
}

hitungKelilingLingkaran(20);