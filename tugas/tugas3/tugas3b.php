<?php 

function urutanAngka($angka) {
    $k = 1;
    for ($i = 1; $i <= $angka ; $i++) {
        for($j = 1; $j <= $i; $j++) {
            echo "$k ";
            $k++;
            if ($j == $i) {
                echo "<br>";
            }
        }
    }
}

urutanAngka(5);