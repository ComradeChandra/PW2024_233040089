<?php
//  Menghitung total volume dua buah kubus

// sisi kubus A = 9 dan kubus  B = 4

// $sisi_a =9;
// $sisi_b =4;
// $volume_a = $sisi_a * $sisi_a * $sisi_a;
// $volume_b = $sisi_b * $sisi_b * $sisi_b;
// $total = $volume_a + $volume_b;

// echo "total volume kubus A & B = $total";

function total_volume_dua_kubus($a, $b)
{

    $volume_a = $a * $a * $a;
    $volume_b = $b * $b * $b;

    $total = $volume_a + $volume_b;
    return $total;
}
total_volume_dua_kubus(9, 4);

echo total_volume_dua_kubus(9, 4);
?>