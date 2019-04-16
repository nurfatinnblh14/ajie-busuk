<?php

include 'config.php';

$query = "select id,nama,harga from barangmainan";
$result = mysqli_query($con,$query);
?>

<html>
    <head>
          <title>Senarai Barangan Kedai Dulu-Dulu</title>
    </head>
    <body>
    <center>
        <h2>SENARAI BARANGAN DAN HARGA</h2> 
        <fieldset>
            <table witdh='80%'border=0>
                <tr bgcolor='#CCCCCC'>
                    <td>Bil.</td>
                    <td>Nama Produk</td>
                    <td>Harga</td>
                    <td>Tindakan</td>
                </tr>

<?php
      
      
      while($res = mysqli_fetch_array($result)) {
        $id=$res['id'];
          echo "<tr>";  
          echo "<td>".$res['id']."</td>"; 
          echo "<td>".$res['nama']."</td>"; 
          echo "<td>".$res['harga']."</td>"; 
          echo "<td><a href=\"delete.php?id=$id\" onClick=\return confirm('Adakah anda pasti?')
                    \">hapus</a></td>";
          
      }
         ?>
            </table>
            <br><a href="add.php">Daftar Barang Baru</a>
    </center>
  </fieldset>
    </body>
</html>

