<?php
require 'koneksi.php';

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM detail_pelanggan WHERE id_pelanggan = '$id'");

mysqli_query($conn, "DELETE FROM pelanggan WHERE id_pelanggan = '$id'");

echo "<script>
        alert('Pelanggan berhasil dihapus!');
        window.location.href = 'pelanggan.php';
      </script>";
?>
