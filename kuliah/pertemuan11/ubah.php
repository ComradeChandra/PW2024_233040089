<?php
require 'functions.php';

$id = $_GET['ID'];
$mhs = query("SELECT * FROM mahasiswa WHERE ID =$id")[0];

if (isset($_POST['ubah'])) {

    if (ubah($_POST) > 0) {
        echo "<script>
        
                    alert('data berhasil diubah!');
                    document.location.href = 'index.php';

                </script>";
    }



}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Ubah Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>

    <div div class="container col-8">

        <h1>Ubah Data Mahasiswa</h1>
        <form action=" " method="POST">
            <input type="hidden" name="ID" value="<?= $mhs['ID'] ?> ">
            <div class="mb-3">
                <label for="nama" class="form-label">NAMA</label>
                <input type="text" class="form-control" id="nama" name="NAMA" value="<?= $mhs['NAMA'] ?>" required>

            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control" id="nim" name="NIM" value="<?= $mhs['NIM'] ?> " required>

            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">EMAIL</label>
                <input type="text" class="form-control" id="email" name="EMAIL" value="<?= $mhs['EMAIL'] ?> " required>

            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">JURUSAN</label>
                <input type="text" class="form-control" id="Jurusan" name="JURUSAN" value="<?= $mhs['JURUSAN'] ?> "
                    required>

            </div>
            <button type="submit" name="ubah" class="btn btn-primary">Ubah Data</button>
        </form>
    </div>
</body>

</html>