<?php
require 'koneksi.php';

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM detail_pengguna WHERE id_pengguna = '$id'");

mysqli_query($conn, "DELETE FROM pengguna WHERE id_pengguna = '$id'");

echo "<script>
        alert('Pengguna berhasil dihapus!');
        window.location.href = 'pengguna.php';
      </script>";
?>
