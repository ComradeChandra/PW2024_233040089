<?php

function koneksi()
{

    // koneksi ke database

    $conn = mysqli_connect('localhost', 'root', '', 'pw2024_233040089');
    return $conn;
}


function query($query)
{
    // koneksi ke database
    $conn = koneksi();

    // query ke tabel mahasiswa
    $result = mysqli_query($conn, $query);

    // menyiapkan data mahasiswa
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;

}

function tambah($data)
{
    $conn = koneksi();


    $nama = htmlspecialchars($data['NAMA']);
    $nim = htmlspecialchars($data['NIM']);
    $email = htmlspecialchars($data['EMAIL']);
    $jurusan = htmlspecialchars($data['JURUSAN']);

    $querry = "INSERT INTO mahasiswa
                VALUES (null, '$nama', '$nim' ,  '$email' , '$jurusan')   
                            ";

    mysqli_query($conn, $querry) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);

}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);

}

function ubah($data)
{
    $conn = koneksi();

    $id = htmlspecialchars($data['ID']);
    $nama = htmlspecialchars($data['NAMA']);
    $nim = htmlspecialchars($data['NIM']);
    $email = htmlspecialchars($data['EMAIL']);
    $jurusan = htmlspecialchars($data['JURUSAN']);

    $querry = "UPDATE mahasiswa SET
                NAMA= '$nama', 
                NIM=  '$nim',  
                EMAIL= '$email', 
                JURUSAN='$jurusan'
WHERE  ID= $id
                            ";

    mysqli_query($conn, $querry) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);

}


?>