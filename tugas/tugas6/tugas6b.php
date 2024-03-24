<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
    <style>
        .box {
            width: 50px;
            height: 50px;
            background-color: aqua;
            border: 1px solid black;
            display: flex;
            margin: 3px;
            border-radius: 0px 10px 0px 0px;
            transition: 300ms all;
        }

        .box:hover {
            transform: scale(120%);
        }

        .box h2 {
            margin: auto;
        }

        .boxI {
            background-color: brown;
        }

        .boxII {
            background-color: green;
        }

        .row {
            display: flex;
        }

        button {
            background-color: #000;
            border-radius: 10px 2px 10px 2px;
            color: #fff;
            transition: 1s all;
            cursor: pointer;
        }

        button:hover {
            transform: scale(90%);
        }
    </style>

</head>

<body>

    <form action="" method="post">
        <label for="nomor"><b>Masukkan nomor angka : </b></label>
        <input type="text" name="nomor" id="nomor">
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php if (!isset ($_POST["nomor"])): ?>

        <p>Silakan Masukkan Variabel angka di dalam box sebelah "Submit"</p>

    <?php else: ?>

        <?php for ($i = $_POST["nomor"]; $i >= 1; $i--): ?>
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