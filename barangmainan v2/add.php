<?php

include 'config.php';

if(isset($_POST['Submit'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    
    $result = mysqli_query($con, "INSERT INTO barangmainan(id,nama,harga)
             VALUES('$id','$nama','$harga')");
    
    echo "<script>alert('Tambah maklumat berjaya');"
    . "window.location='index.php'</script>";
    
}
else
{
    ?>
<html>
    <head>
        <title>TAMBAH REKOD</title>
    </head>
    <body>
    <center> <h2>TAMBAH REKOD BARANGAN DAN HARGA</h2>
        <fieldset>
            <form action="add.php" method="post" name="form1">
                <table width="25%" border="0">
                    <tr>
                        <td>Id</td>
                        <td><input type="text" name="id"></td>
                    </tr>
                        <td>Nama Produk</td>
                        <td><input type="text" name="nama"></td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td><input type="text" name="harga"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="Submit" value="Add"></td>
                    </tr>
                </table>
            </form>
            
            <BR><a href="index.php">Kembali ke Laman Utama</a>
        </fieldset>
        </center>
<?php
}
?>
    </body>
</html>

