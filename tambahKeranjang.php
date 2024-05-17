<?php
include 'config/config.php'; // Pastikan path ke config benar

header('Content-Type: application/json'); // Mengatur header konten sebagai JSON

if (isset($_POST['productForm'])) {
    // Mengambil data dari POST request
    $produkId = $_POST['produkID'];

    // Ambil data produk dari database berdasarkan ID
    $query = "SELECT * FROM produk WHERE id = '$produkId'";
    $run = mysqli_query($is_connect, $query);
    
    if (mysqli_num_rows($run) > 0) {
      while($row = $run->fetch_assoc()){
        echo $row['id'];
      }
        echo json_encode(['status' => 'success', 'message' => 'Produk berhasil ditambahkan ke keranjang.']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Produk tidak ditemukan.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Metode tidak valid.']);
}
