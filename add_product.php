<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $image = $_POST['image']; // Anda mungkin ingin menangani upload gambar dengan benar
    $price = $_POST['price'];

    $insertQuery = "INSERT INTO products (name, description, image, price) VALUES ('$name', '$description', '$image', '$price')";
    
    if ($conn->query($insertQuery) === TRUE) {
        echo "Produk berhasil ditambahkan!";
    } else {
        echo "Error: " . $insertQuery . "<br>" . $conn->error;
    }
}
?>

<!-- Form to add new product -->
<form method="post" action="add_product.php" enctype="multipart/form-data">
    <label for="name">Nama Produk:</label>
    <input type="text" id="name" name="name" required>

    <label for="description">Deskripsi Produk:</label>
    <textarea id="description" name="description" required></textarea>

    <label for="image">URL Gambar Produk:</label>
    <input type="file" id="image" name="image" accept="pics/*" required>
    <input type="submit" value="Upload">

    <label for="price">Harga Produk:</label>
    <input type="text" id="price" name="price" required>

    <input type="submit" value="Tambah Produk">
</form>
