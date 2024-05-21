<?php
session_start();
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['produkId'])) {
    $produkId = $_POST['produkId'];
    
    // Tambahkan produk ke keranjang (misalnya, menggunakan session)
    if (!isset($_SESSION['cart'][$produkId])) {
      $_SESSION['cart'] = [];
    }
    if (isset($_SESSION[$produkId])){
      $_SESSION[$produkId]['quantity']++;
    } else {
      $_SESSION['cart'][$produkId]['quantity'] = 1;
    }

    echo json_encode([
      'status' => 'success', 
      'message' => 'Produk berhasil ditambahkan ke keranjang',
      'produkId' => $produkId // Kirim kembali ID produk
    ]);
  } else {
    echo json_encode(['status' => 'error', 'message' => 'ID produk tidak ditemukan']);
  }
} else {
  echo json_encode(['status' => 'error', 'message' => 'Metode permintaan tidak valid']);
}
