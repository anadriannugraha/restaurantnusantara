<?php
$mysqli = new mysqli('localhost', 'root', '', 'restaurant_db');
if ($mysqli->connect_error) {
    die('Koneksi gagal: ' . $mysqli->connect_error);
}
$hash = password_hash('admin123', PASSWORD_DEFAULT);
$sql = "UPDATE tbl_admin SET password_admin = '$hash' WHERE username_admin = 'admin'";
if ($mysqli->query($sql) === TRUE) {
    echo "Password admin berhasil diupdate!<br>Hash: $hash";
} else {
    echo "Error: " . $mysqli->error;
}
$mysqli->close(); 