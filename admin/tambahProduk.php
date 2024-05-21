<?php
include "../config/config.php";

if(isset($_POST["submit"])){
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $qty = $_POST['pquantity'];
    $id_category = $_POST['id_category'];
    $image = $_FILES['image']['name'];
    $description = $_POST['description'];
    $source = $_FILES['image']['tmp_name'];

    // Lokasi dan nama file tujuan
    $destination = '../img/' . $_FILES['image']['name'];

    // Pindahkan file dari sumber ke tujuan
    if (move_uploaded_file($source, $destination)) {
        echo "File berhasil diunggah.";
    } else {
        echo "Gagal mengunggah file.";
    }

    // Tampilkan informasi tentang file yang diunggah
    echo "<pre>";
    print_r($_FILES['image']);
    echo "</pre>";

    $sql = "insert into produk (id_category, nama_produk, description, image, harga, pquantity) values ($id_category, '$nama_produk', '$description', '$image', $harga, '$qty')";
    $result = mysqli_query($is_connect, $sql);
    if($result->num_rows > 0){
        echo "nice";
    }else{
        header("Location: admin.php");
       
    }
}
?>



