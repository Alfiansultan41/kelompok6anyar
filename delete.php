<?php
// Include file database.php yang berisi koneksi ke database
include "db.php";

// Periksa apakah tombol hapusMahasiswa ditekan
if (isset($_POST['hapusMahasiswa'])) {
    // Ambil NIM yang akan dihapus dari input nimHps
    $nimHapus = $_POST['nimHps'];

    // Query untuk menghapus mahasiswa dari database berdasarkan NIM
    $query = "DELETE FROM students WHERE nim = '$nimHapus'";

    // Eksekusi query penghapusan
    if ($db->query($query)) {
        echo "Mahasiswa dengan NIM $nimHapus berhasil dihapus.";
    } else {
        echo "Gagal menghapus mahasiswa: " . $db->error;
    }

    // Redirect kembali ke halaman utama (index.php) setelah penghapusan
    header("Location: biodata.php");
    exit();
}
