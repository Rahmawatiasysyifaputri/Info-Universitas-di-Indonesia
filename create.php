<?php

include '../connect.php';

$nama = $_POST['nama'];
$kampus = $_POST['kampus'];
$email = $_POST['email'];

$query = "INSERT INTO wishlist (nama, kampus, email)
          VALUES ('$nama','$kampus','$email')";

$result = mysqli_query($connect,$query);

$num = mysqli_affected_rows($connect);

if($num > 0)
{ echo "Berhasil tambah data"; }
else
{ echo "Gagal tambah data"; }

echo "<a href='read.php'>Lihat Data</a>";
?>