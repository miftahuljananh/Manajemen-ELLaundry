<?php
require 'koneksi.php';

$id = $_GET['id'];

// Hapus detail transaksi dulu (karena FK)
mysqli_query($conn, "DELETE FROM detail_paket WHERE id_paket = '$id'");

// Hapus transaksi utama
mysqli_query($conn, "DELETE FROM paket WHERE id_paket = '$id'");

// Setelah selesai, kembali ke halaman sebelumnya
echo "<script>
        alert('Transaksi berhasil dihapus!');
        window.location.href = 'paket.php';
      </script>";
?>
