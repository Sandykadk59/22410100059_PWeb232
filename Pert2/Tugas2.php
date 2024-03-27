<!DOCTYPE html>

    <head>
        <title> TUGAS 2 </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="mycss.css">
    </head>

    <body>

        <a href="TambahBarang2.php" target="blank">  
            <button type="button" class="buttontambah">
                <i class="fa-solid fa-plus"></i> Tambah
            </button>
        </a>

        <br></br>

        <table>
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
                <td>200</td>
                <td>350</td>
                <td>
                    <a href="EditBarang2.php" target="_blank">  
                        <button type="button" class="buttonEdit">
                            <i class="fas fa-sync icon"></i> Edit
                        </button>
                    </a>
                </td>		
            </tr>

            <tr>
                <td>M02</td>
                <td>Bolpoin</td>
                <td>pcs</td>
                <td>300</td>
                <td>450</td>
                <td>
                    <a href="EditBarang2.php" target="_blank">  
                        <button type="button" class="buttonEdit">
                            <i class="fas fa-sync icon"></i> Edit
                        </button>
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
                    <a href="EditBarang2.php" target="_blank">  
                        <button type="button" class="buttonEdit">
                            <i class="fas fa-sync icon"></i> Edit
                        </button>
                    </a>
                </td>		
            </tr>
        </table>
    </body>
</html>