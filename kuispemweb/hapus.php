<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "koneksi/db.php";

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); 

    $query = mysqli_query($conn, "DELETE FROM mahasiswa WHERE id=$id");

    if ($query) {
        header("Location: index.php");
        exit;
    } else {
        echo "Gagal menghapus data: " . mysqli_error($conn);
    }
} else {
    echo "ID tidak ditemukan di URL.";
}
?>
