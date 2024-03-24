<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas6get</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: aqua;
            border: 1px solid black;
            display: flex;
            margin: 3px;
        }

        .kotak h2 {
            margin: auto;
        }

        .kotak1 {
            background-color: red;
        }

        .kotak2 {
            background-color: yellow;
        }

        .row {
            display: flex;
        }
    </style>

</head>

<body>
    <?php if (!isset ($_GET["number"])): ?>

        <h2>Variabel <i>"number"</i> belum dimasukkan, Silakan masukkan pada <b>URL</b> halaman ini
            (http://localhost/pw2024_233040089/tugas/tugas6/tugas6a.php).</h2>

        <hr>
        <p>Contoh: http://localhost/pw2024_233040089/tugas/tugas6/tugas6a.php<b><i>?number=3</i></b></p>

    <?php else: ?>

        <?php for ($i = $_GET["number"]; $i >= 1; $i--): ?>
            <div class="row">
                <?php for ($j = 1; $j <= $i; $j++): ?>

                    <?php if ($i % 2 == 0): ?>
                        <div class="kotak kotak1">
                            <h2>
                                <?= "$i" ?>
                            </h2>
                        </div>
                    <?php else: ?>
                        <div class="kotak kotak2">
                            <h2>
                                <?= "$i" ?>
                            </h2>
                        </div>
                    <?php endif; ?>
                    <?php if ($i == $j): ?>
                        <br>
                    <?php endif; ?>
                <?php endfor; ?>
            </div>
        <?php endfor; ?>

    <?php endif; ?>
</body>

</html>