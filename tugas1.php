<!DOCTYPE html>
    <head>
        <title>TES123</title>
    </head>

    <body>

        <a href="TambahBarang1.php" target="_blank">  
            <input type="button" name="Tambah" value="Tambah"> 
        </a>

        <br></br>

        <table border="1">
            <tr>
                <th rowspan="2">Kode</th>
                <th rowspan="2">Nama Barang</th>
                <th rowspan="2">Satuan</th>
                <th colspan="2">Harga</th>	   
                <th rowspan="2">Action</th>	
            </tr>

            <!-- ini baris 2 -->

            <tr>             
                <td>Beli</td>
                <td>Jual</td>
            
            <tr>
                <td>M01</td>
                <td>Spidol</td>
                <td>pcs</td>
                <td>3000</td>
                <td>5000</td>
                <td>
                    <a href="EditBarang1.php" target="_blank">
                        <input type="button" name="Update" value="Update">
                    </a>
                </td>		
            </tr>

            <tr>
                <td>M02</td>
                <td>Bolpoin</td>
                <td>pcs</td>
                <td>1000</td>
                <td>2000</td>
                <td>
                    <a href="EditBarang1.php" target="_blank">
                        <input type="button" name="Update" value="Update">
                    </a>
                </td>		
            </tr>

            <tr>
                <td>M03</td>
                <td>VGA</td>
                <td>pcs</td>
                <td>400</td>
                <td>550</td>
                <td>
                    <a href="EditBarang1.php" target="_blank">
                        <input type="button" name="Update" value="Update">
                    </a>
                </td>		
            </tr>
        </table>
    </body>
</html>