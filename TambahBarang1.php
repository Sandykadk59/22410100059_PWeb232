<!DOCTYPE html>
<html>
    <style>

    </style>

    <head>
        <title> Tambah Barang </title>
    </head>

    <body>
        <form action="/proses_form.php" method="post">
            <label for="kode">Kode</label><br>
            <input type="text" id="kode" name="kode"><br><br>

            <label for="nama">Nama</label><br>
            <input type="text" id="nama" name="nama"><br><br>

            <label for="satuan">Satuan</label><br>
            <input type="text" id="satuan" name="satuan"><br><br>

            <label for="beli">Beli</label><br>
            <input type="text" id="beli" name="beli"><br><br>

            <label for="jual">Jual</label><br>
            <input type="text" id="jual" name="jual"><br><br>

            <a href="tugas1.php" target="_blank">
                <input type="button" value="Tambah">   
            </a>        

            <a href="tugas1.php" target="_blank">
                <input type="button" value="Cancel">
            </a>
        </form>
    </body>
</html>