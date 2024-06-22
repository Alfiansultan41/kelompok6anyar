<?php

include "koneksi.php";
include "tambahMahasiswa.php";

#Tambah Mahasiswa
if (isset($_POST['tambahMahasiswa'])) {

    $file_name = $_FILES['foto']['name'];
    $file_tmp = $_FILES['foto']['tmp_name'];
    $target_dir = "inputImage/";
    $target_file = $target_dir . basename($file_name);

    if (move_uploaded_file($file_tmp, $target_file)) {
        echo "File berhasil diupload.";

        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $ttl = $_POST['ttl'];
        $alamat = $_POST['alamat'];
        $pendidikan = $_POST['pendidikan'];

        $sql = "INSERT INTO mhs (foto, nama, nim, ttl, alamat, pendidikan) VALUES ('$target_file', '$nama', '$nim', '$ttl', '$alamat', '$pendidikan')";

        if ($db->query($sql)) {
            echo "Data berhasil disimpan ke database.";
        } else {
            echo "Kesalahan saat menyimpan data: " . $db->error;
        }

        header("Location: biodata.php");
        exit();
    } else {
        echo "Maaf, terjadi kesalahan saat mengunggah file Anda.";
    }
}

// Hapus Mahasiswa
if (isset($_POST['hapusMahasiswa'])) {
    $nimHapus = $_POST['NimHps'];

    $sql = "DELETE FROM mhs WHERE nim = '$nimHapus'";

    if ($db->query($sql)) {
        echo "Mahasiswa dengan NIM $nimHapus berhasil dihapus.";
    } else {
        echo "Gagal menghapus mahasiswa: " . $db->error;
    }

    header("Location: biodata.php");
    exit();
}

// Update Mahasiswa
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['editMahasiswa'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $ttl = $_POST['ttl'];
        $alamat = $_POST['alamat'];
        $pendidikan = $_POST['pendidikan'];

        $nim = $db->real_escape_string($nim);
        $nama = $db->real_escape_string($nama);
        $ttl = $db->real_escape_string($ttl);
        $alamat = $db->real_escape_string($alamat);
        $pendidikan = $db->real_escape_string($pendidikan);

        $updateFoto = '';
        if (isset($_FILES['foto']) && $_FILES['foto']['error'] == UPLOAD_ERR_OK) {
            $target_dir = "inputImage/";
            $target_file = $target_dir . basename($_FILES["foto"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            $valid_extensions = array("jpg", "jpeg", "png", "gif");

            if (in_array($imageFileType, $valid_extensions)) {
                if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {

                    $foto = $db->real_escape_string($target_file);
                    $updateFoto = ", foto='$foto'";
                } else {
                    echo "Error mengunggah file.";
                }
            } else {
                echo "Format file tidak valid.";
            }
        }

        $sql = "UPDATE mhs SET nama='$nama', ttl='$ttl', alamat='$alamat', pendidikan='$pendidikan' $updateFoto WHERE nim='$nim'";

        if ($db->query($sql) === TRUE) {
            echo "Data mahasiswa berhasil diupdate.";
        } else {
            echo "Error mengupdate data: " . $db->error;
        }
    }
    header("Location: biodata.php");
    exit();
}

?>

<!doctype html>
<html lang="en">

<?php include "header.html" ?>

<body>

    <?php include "navbar.html" ?>

    <div class="customBio" id="customBio">
        <h1 class="text-center">Custom Biodata</h1>

        <?php include "form.html" ?>

        <div id="biodata" class="wrapper">
            <h1 class="text-center">BIODATA</h1>
            <div class="our_team">
                <div id="biodataContainer"></div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="#fffeff" fill-opacity="1" d="M0,160L48,186.7C96,213,192,267,288,256C384,245,480,171,576,149.3C672,128,768,160,864,192C960,224,1056,256,1152,272C1248,288,1344,288,1392,288L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                    </path>
                </svg>
            </div>
        </div>

        <?php include "ajax.html" ?>

        <script src="custom.js"></script>
    </div>
</body>

</html>