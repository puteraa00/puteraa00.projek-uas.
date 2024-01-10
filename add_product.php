<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $image = $_FILES['image']['name'];
    $target_dir = "upload/";  // Ganti dengan direktori tempat menyimpan gambar
    $target_file = $target_dir . basename($_FILES['image']['name']);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
        $insertQuery = "INSERT INTO products (name, description, image, price) VALUES ('$name', '$description', '$target_file', '$price')";

        if ($conn->query($insertQuery) === TRUE) {
            echo "Produk berhasil ditambahkan!";
        } else {
            echo "Error: " . $insertQuery . "<br>" . $conn->error;
        }
    } else {
        echo "Error dalam mengunggah file.";
    }
}
?>

<!-- Form to add new product -->
<form method="post" action="add_product.php" enctype="multipart/form-data">
    <label for="name">Nama Produk:</label>
    <input type="text" id="name" name="name" required>

    <label for="description">Deskripsi Produk:</label>
    <textarea id="description" name="description" required></textarea>

    <label for="image">Unggah Gambar Produk:</label>
    <input type="file" id="image" name="image" accept="image/*" required>

    <label for="price">Harga Produk:</label>
    <input type="text" id="price" name="price" required>

    <input type="submit" value="Tambah Produk">
</form>
