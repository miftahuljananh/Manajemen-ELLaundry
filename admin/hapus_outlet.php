<?php
require 'koneksi.php';

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM detail_outlet WHERE id_outlet = '$id'");

mysqli_query($conn, "DELETE FROM outlet WHERE id_outlet = '$id'");

echo "<script>
        alert('Transaksi berhasil dihapus!');
        window.location.href = 'outlet.php';
      </script>";
?>
