<?php 

include('koneksi.php');

$id = $_GET['id_mahasiswa'];

mysqli_query($conn, "DELETE FROM mahasiswa WHERE id_mahasiswa = '$id' ");

echo"<script> alert('Data Ini Berhasil dihapus')</script>";
echo"<meta http-equiv='refresh' content='0; URL=mahasiswa.php'>";
?>