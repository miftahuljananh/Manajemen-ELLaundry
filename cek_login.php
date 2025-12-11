<?php
session_start();
$conn = mysqli_connect("localhost", "ellaundry_db", "ellaundry_db", "ellaundry_db");

if (!isset($_POST['username']) || !isset($_POST['password'])) {
    header("location:index.php?message=Invalid access");
    exit();
}

$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = md5($_POST['password']);
$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

if ($data) {

    $_SESSION['username'] = $data['username'];
    $_SESSION['user_id'] = $data['id_user'];
    $_SESSION['outlet_id'] = $data['outlet_id'];
    $_SESSION['role'] = $data['role'];

    if ($data['role'] == 'admin') {
        header("location:admin");
        exit();
    }

    if ($data['role'] == 'kasir') {
        header("location:kasir");
        exit();
    }

    if ($data['role'] == 'owner') {
        header("location:owner");
        exit();
    }

} else {
    header("location:index.php?message=Username atau password salah!");
    exit();
}
?>
