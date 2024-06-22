<?php

include "db.php";

if (isset($_POST['tambahMahasiswa'])) {
    // Ambil informasi file yang diunggah
    $file_name = $_FILES['foto']['name'];
    $file_tmp = $_FILES['foto']['tmp_name'];
    $target_dir = "file/";
    $target_file = $target_dir . basename($file_name);

    // Pindahkan file yang diunggah ke direktori tujuan
    if (move_uploaded_file($file_tmp, $target_file)) {
        echo "File berhasil diupload.";

        // Ambil informasi lainnya dari formulir
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $ttl = $_POST['ttl'];
        $alamat = $_POST['alamat'];
        $pendidikan = $_POST['pendidikan'];

        // Simpan informasi file dan data lainnya ke database
        $sql = "INSERT INTO students (foto, nama, nim, ttl, alamat, pendidikan) VALUES ('$target_file', '$nama', '$nim', '$ttl', '$alamat', '$pendidikan')";

        if ($db->query($sql)) {
            echo "Data berhasil disimpan ke database.";
        } else {
            echo "Kesalahan saat menyimpan data: " . $db->error;
        }

        // Alihkan kembali ke index.php
        header("Location: biodata.php");
        exit();
    } else {
        echo "Maaf, terjadi kesalahan saat mengunggah file Anda.";
    }
}
