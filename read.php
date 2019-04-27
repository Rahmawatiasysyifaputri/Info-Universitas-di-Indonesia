<?php


include '../connect.php';
 
$query = "SELECT * FROM wishlist";
$result = mysqli_query($connect, $query);
$num = mysqli_num_rows($result);

?>

<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="read.css">
<body>

    <table border='1'>
    <h2>Data Wishlist</h2>
    <table class="table1">
    <tr>
      <th>No.</th>
      <th>Nama</th>
      <th>Kampus Favorit</th>
      <th>Email</th>
    </tr>

    <?php
        if($num > 0)
        {
            $no = 1;
            while($data = mysqli_fetch_assoc($result))
            {
                echo "<tr>";
                echo "<td>" . $no . "</td>";
                echo "<td>" . $data['nama'] . "</td>";
                echo "<td>" . $data['kampus'] . "</td>";
                echo "<td>" . $data['email'] . "</td>";
                echo "<td><a href='delete.php?no=" . $data['no'] . "'onclick='return confirm(\"Apakah Anda yakin ingin menghapus data?\")'>Hapus</a></td>";
                echo "</tr>";
                $no++;
            }
        }
        else{
            echo"<td colspan = '3'>Tidak Ada Data";

        }
            
    ?>
    </table>
    </body>
</html>

