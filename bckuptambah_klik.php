<?php
include "config/config.php";

// Baca data dari body permintaan sebagai JSON
$input = file_get_contents("php://input");
$data = json_decode($input);

// Periksa apakah data id_produk ada dalam objek JSON yang diterima
if (isset($data->idProduk)) {
    $idProduk = $data->idProduk;

    // Update jumlah klik di tabel produk
    $queryUpdate = "UPDATE produk SET jumlah_klik = jumlah_klik + 1 WHERE id = '$idProduk'";
    $resultUpdate = mysqli_query($is_connect, $queryUpdate);

    if ($resultUpdate) {
        // Kirim respons berhasil dalam format JSON
 // Set kode status OK
        echo json_encode(["message" => "Jumlah klik produk berhasil diperbarui"]);
      } else {
        // Kirim respons gagal dalam format JSON // Set kode status Internal Server Error
        echo json_encode(["message" => "Gagal memperbarui jumlah klik produk"]);
      }
    } else {
      // Kirim respons data tidak valid dalam format JSON
      echo json_encode(["message" => "Data tidak valid"]);
    }
    