<?php
include '../config/database.php';

$data = json_decode(file_get_contents("php://input"));

$nim = $data->nim;
$nama = $data->nama;
$prodi = $data->prodi;
$angkatan = $data->angkatan;

$sql = "INSERT INTO mahasiswa(nim,nama,prodi,angkatan)
        VALUES('$nim','$nama','$prodi','$angkatan')";

if(mysqli_query($conn,$sql)){
    echo json_encode([
        "message" => "Data berhasil ditambahkan"
    ]);
}
?>