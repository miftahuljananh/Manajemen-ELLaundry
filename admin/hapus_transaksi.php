<?php
require 'koneksi.php';

$id = $_GET['id'];

// Hapus detail transaksi dulu (karena FK)
mysqli_query($conn, "DELETE FROM detail_transaksi WHERE id_transaksi = '$id'");

// Hapus transaksi utama
mysqli_query($conn, "DELETE FROM transaksi WHERE id_transaksi = '$id'");

// Setelah selesai, kembali ke halaman sebelumnya
echo "<script>
        alert('Transaksi berhasil dihapus!');
        window.location.href = 'transaksi.php';
      </script>";
?>
