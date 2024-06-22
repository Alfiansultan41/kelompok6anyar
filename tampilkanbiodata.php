<?php

include "dh.php";

$sql = "SELECT * FROM students";

$result = $db->query($sql);

if ($result->num_rows > 0) {
    while ($data = $result->fetch_assoc()) {
        $mahasiswaArray[] = array(
            "nama" => $data["nama"],
            "nim" => $data["nim"],
            "ttl" => $data["ttl"],
            "alamat" => $data["alamat"],
            "pekerjaan" => $data["pendidikan"],
            "foto" => $data["foto"]
        );
    }
} else {
    echo "tidak ada";
}
