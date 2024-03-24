<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas6get</title>
    <style>
        .box {
            width: 50px;
            height: 50px;
            background-color: aqua;
            border: 1px solid black;
            display: flex;
            margin: 3px;
        }

        .box h2 {
            margin: auto;
        }

        .boxI {
            background-color: red;
        }

        .boxII {
            background-color: yellow;
        }

        .row {
            display: flex;
        }
    </style>

</head>

<body>
    <?php if (!isset ($_GET["nomber"])): ?>

        <h2>Variabel <i>"nomber"</i> belum dimasukkan, Silakan masukkan pada <b>URL</b> halaman ini
            (http://localhost/pw2024_233040089/tugas/tugas6/tugas6a.php).</h2>

        <hr>
        <p>Contoh: http://localhost/pw2024_233040089/tugas/tugas6/tugas6a.php<b><i>?number=3</i></b></p>

    <?php else: ?>

        <?php for ($i = $_GET["nomber"]; $i >= 1; $i--): ?>
            <div class="row">
                <?php for ($j = 1; $j <= $i; $j++): ?>

                    <?php if ($i % 2 == 0): ?>
                        <div class="box boxI">
                            <h2>
                                <?= "$i" ?>
                            </h2>
                        </div>
                    <?php else: ?>
                        <div class="box boxII">
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