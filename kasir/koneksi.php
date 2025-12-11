<?php
session_start();
if ($_SESSION) {
    if ($_SESSION['role'] == 'admin') {
    } else {
        header("location:../index.php");
    }
} else {
    header('location:../index.php');
}

$conn = mysqli_connect("localhost", "ellaundry_db", "ellaundry_db", "ellaundry_db");

if (mysqli_connect_error()) {
    echo "Koneksi ke database gagal : " . mysqli_connect_error();
}
