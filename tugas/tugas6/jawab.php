<?php

function cetak_bintang($angka)
{
    for ($i = 0; $i < $angka; $i++) {

        for ($j = 0; $j < $angka; $j++) {

            echo "*";
        }
        echo "* <br>";

    }
    return cetak_bintang(3);
}

?>