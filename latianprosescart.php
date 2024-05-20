<?php
session_start();
include "config/config.php";

if (isset($_SESSION['id'])) {
    $idu = $_SESSION['id'];
    $_SESSION['cart'] = $idu;

    if (isset($_SESSION['cart']) && isset($_GET['id'])) {
        $id_produk = $_GET['id'];

        // Periksa apakah produk sudah ada di keranjang
        $query = "SELECT * FROM keranjang WHERE id_user = $idu AND id_produk_beli = $id_produk";
        $result = $is_connect->query($query);

        if ($result->num_rows > 0) {
            // Produk sudah ada di keranjang, tingkatkan kuantitasnya
            $update_query = "UPDATE keranjang SET quantity = quantity + 1 WHERE id_user = $idu AND id_produk_beli = $id_produk";
            $is_connect->query($update_query);
            
        } else {
            // Produk belum ada di keranjang, tambahkan ke keranjang
            $insert_query = "INSERT INTO keranjang (id_user, id_produk_beli, quantity) VALUES ($idu, $id_produk, 1)";
            $is_connect->query($insert_query);
           
        }
    }
}
// Query untuk menampilkan detail produk dengan inner join
// $query_detail_produk = "SELECT id_user, id_produk_beli, quantity, nama_produk, harga from keranjang inner join produk on produk.id = keranjang.id_produk_beli where id_user =" .$idu. "and id_produk_beli = " .$id_produk;
// $result_detail_produk = $is_connect->query($query_detail_produk);

    
   

    

