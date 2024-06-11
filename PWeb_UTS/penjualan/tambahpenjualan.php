<div class="container mt-3"> 
 <div class="card">
 <div class="card-header">  <h2> ADD PENJUALAN</h2></div>
 <div class="card-body">
 
 <div class="row mb-2 mt-2">
 <div class="col-sm-1">
 <label for="tanggal" class="form-label">Tanggal:</label>
</div>
<div class="col-sm-4">
 <input type="date" class="form-control" id="tanggal" placeholder="Enter Tanggal"
name="tanggal" value="<?php echo date("Y-m-d");?>">
</div>
 </div>

 <div class="row mb-2 mt-2">
 <div class="col-sm-1">
 <label for="konsumen" class="form-label">Konsumen:</label>
</div>
<div class="col-sm-4">
 <input type="text" class="form-control" id="konsumen" placeholder="Enter Konsumen"
name="konsumen">
</div>
 </div>

 <div class="row mb-2 mt-2">
 <div class="col-sm-1">
 <label for="telp" class="form-label">Telp:</label>
</div>
<div class="col-sm-4">
 <input type="text" class="form-control" id="telp" placeholder="Enter Telp" name="telp">
</div>
 </div>

 <div class="row mb-2 mt-2">
 <div class="col-sm-6">
 <label for="keterangan">Keterangan:</label>
 <textarea class="form-control" rows="2" id="keterangan" name="text"></textarea>
 </div>
 </div>

<div class="row mb-2 mt-2">
 <div class="col-sm-2">
 <div class="mb-1 mt-1">
 <label for="kode" class="form-label">Kode:</label>
 <input type="text" class="form-control" id="kode" name="kode" readonly data-bs-toggle="modal" data-bs-target="#myModal">
 </div>
 </div>

 <div class="col-sm-3">
 <div class="mb-1 mt-1">
 <label for="nama" class="form-label">Nama:</label>
 <input type="text" class="form-control" id="nama" name="nama" readonly>
 </div>
 </div>

 <div class="col-sm-2">
 <div class="mb-1 mt-1">
 <label for="satuan" class="form-label">Satuan:</label>
 <input type="text" class="form-control" id="satuan" name="satuan" readonly>
 </div>
 </div>

 <div class="col-sm-2">
 <div class="mb-1 mt-1">
 <label for="harga" class="form-label">Harga:</label>
 <input type="number" class="form-control" id="harga" name="harga" readonly>
 </div>
 </div>

 <div class="col-sm-1">
 <div class="mb-1 mt-1">
 <label for="jumlah" class="form-label">Jumlah:</label>
 <input type="number" class="form-control" id="jumlah" name="jumlah" value="0">
 </div>
 </div>

 <div class="col-sm-1">
 <div class="mb-1 mt-3">
<br>
 <button type="button" id="tambah" class="btn btn-primary btn-sm">+</button>
 </div>
 </div>

</div>
<div class="row mb-2 mt-2">
 <table class="table table-bordered" >
 <thead>
 <tr align="center">
 <th>Kode</th>
 <th>Nama</th>
 <th>Satuan</th>
<th>Harga</th>
<th>Jumlah</th>
<th>Total</th>
<th>Action</th>
 </tr>
 </thead>
 <tbody id="tableisi">
</tbody>
</table>
</div>
 <div class="row mb-2 mt-2">
 <div class="col-sm-9" align="right">
 <label for="total" class="form-label">Grand Total:</label>
</div>
<div class="col-sm-3">
 <div class="input-group">
<span class="input-group-text">Rp</span>
 <input type="number" class="form-control" id="grandtotal" name="grandtotal" value="0"
readonly align="right">
</div>
</div>
 </div>

 <div class="row mb-2 mt-2">
 <div class="col-sm-9" align="right">
 <label for="bayar" class="form-label">Bayar:</label>
</div>
<div class="col-sm-3">
 <div class="input-group">
<span class="input-group-text">Rp</span>
 <input type="number" class="form-control" id="bayar" name="bayar" value="0" align="right">
</div>
</div>
 </div>

 <div class="row mb-2 mt-2">
 <div class="col-sm-9" align="right">
 <label for="kembali" class="form-label">Kembali:</label>
</div>
<div class="col-sm-3">
<div class="input-group">
<span class="input-group-text">Rp</span>
 <input type="number" class="form-control" id="kembali" name="kembali" value="0" readonly
align="right">
</div>
</div>
 </div>

 </div> <!-- body-->
 
 <div class="card-footer">
 <div class="row mb-2 mt-2">
 <div class="col-sm-8">
 </div>
 <div class="col-sm-4">
 <button type="button" id="save" class="btn btn-success btn-sm">SAVE</button>
 <button type="button" id="cancel" class="btn btn-danger btn-sm">CANCEL</button>
 </div>
 </div>
 </div>
 
</div>


</div>


<!-- The Modal -->
<div class="modal" id="myModal">
 <div class="modal-dialog">
 <div class="modal-content">
 <!-- Modal Header -->
 <div class="modal-header">
 <h4 class="modal-title">Barang</h4>
 <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
 </div>
 <!-- Modal body -->
 <div class="modal-body">

 <table class="table table-bordered" >
 <thead>
 <tr align="center">
 <th>Kode</th>
 <th>Nama</th>
 <th>Satuan</th>
 <th>Harga</th>
 <th>Action</th>
 </tr>
 </thead>
 <tbody id="tablebrg">
<tr>
<td>m001</td>
<td>CPU</td>
<td>unit</td>
<td>2000</td>
 <td><button type="button" class="btn btn-success btn-sm" id="pilih" data-bs-dismiss="modal">Pilih</button></td>
</tr>
 <tr>
<td>m002</td>
<td>VGA</td>
<td>unit</td>
<td>3000</td>
 <td><button type="button" class="btn btn-success btn-sm" id="pilih" data-bs-dismiss="modal">Pilih</button></td>
</tr>
<tr>
<td>m003</td>
<td>RAM</td>
<td>unit</td>
<td>4000</td>
 <td><button type="button" class="btn btn-success btn-sm" id="pilih" data-bs-dismiss="modal">Pilih</button></td>
</tr>
</tbody>
</table>
 </div>
 <!-- Modal footer -->
 <div class="modal-footer">
<button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Close</button>
 </div>
 </div>
 </div>
</div>

<script>
    $("#tambah").hide();
    $("#save").hide();
    $("#tablebrg tr").on('click',function(){
        var isikode = $(this).find("td:eq(0)").text();
        var isinama = $(this).find("td:eq(1)").text();
        var isisatuan = $(this).find("td:eq(2)").text();
        var isiharga = $(this).find("td:eq(3)").text();
        $("#kode").val(isikode);
        $("#nama").val(isinama);
        $("#satuan").val(isisatuan);
        $("#harga").val(isiharga);
        $("#jumlah").val("1");
        $("#tambah").show();
    });

    $("#tambah").on('click',function(){
        var total=0;
        var kembalian=0;
        var bayaran = Number($('#bayar').val());
        var panjang = $('#tableisi tr').length;
        var kode = $('#kode').val();
        var nama = $('#nama').val();
        var satuan = $('#satuan').val();
        var harga = $('#harga').val();
        var jumlah = $('#jumlah').val();
        var total1 = jumlah * harga;
        $('#tableisi').append("<tr><td>"+kode+"</td><td>"+nama+"</td><td>"+satuan+"</td><td align=\"right\">"+harga+"</td><td align=\"right\">"+jumlah+"</td><td align=\"right\">"+total1+"</td><td align=\"center\"> <button id=\"id"+panjang+"\" class=\"btn btn-danger remove\">x</button></tr>");
        $('#tableisi tr').each(function(){
            var currentrow = $(this);
            total = total + Number(currentrow.find("td:eq(5)").text());
        });
        kembalian = bayaran - total;
        $("#grandtotal").val(total);
        $("#kembali").val(kembalian);

        $('#kode').val('');
        $('#nama').val('');
        $('#satuan').val('');
        $('#harga').val('');
        $('#jumlah').val('');
        $('#tambah').hide();
        $("#save").show();
    });

    $("#tableisi").on('click','.remove',function(){
        var kembalian=0;
        var total = 0;
        var bayaran = Number($('#bayar').val());
        $(this).closest('tr').remove();
        $('#tableisi tr').each(function(){
            var currentrow = $(this);
            total = total + Number(currentrow.find("td:eq(5)").text());
        });
        if(total > 0) {
            $("#save").show();
        } else {
            $("#save").hide();
        }
        kembalian = bayaran - total;
        $("#grandtotal").val(total);
        $("#kembali").val(kembalian);
    });

    $("#cancel").on('click',function(){
        $('#isi').load("penjualandata.php");
    });

    $("#bayar").change(function(){
        var kembalian=0;
        var total = 0;
        var bayaran = Number($('#bayar').val());
        $('#tableisi tr').each(function(){
            var currentrow = $(this);
            total = total + Number(currentrow.find("td:eq(5)").text());
        });
        if(total > 0) {
            $("#save").show();
        } else {
            $("#save").hide();
        }
        kembalian = bayaran - total;
        $("#grandtotal").val(total);
        $("#kembali").val(kembalian);
    });

    $("#save").on('click', function() {
        var tanggal = $("#tanggal").val();
        var konsumen = $("#konsumen").val();
        var telp = $("#telp").val();
        var keterangan = $("#keterangan").val();
        var grandtotal = $("#grandtotal").val();
        var bayar = $("#bayar").val();
        var kembali = $("#kembali").val();

        var items = [];
        $('#tableisi tr').each(function() {
            var row = $(this);
            var item = {
                kode: row.find("td:eq(0)").text(),
                nama: row.find("td:eq(1)").text(),
                satuan: row.find("td:eq(2)").text(),
                harga: row.find("td:eq(3)").text(),
                jumlah: row.find("td:eq(4)").text(),
                total: row.find("td:eq(5)").text()
            };
            items.push(item);
        });

        $.ajax({
            url: 'save_data.php',
            type: 'POST',
            data: {
                tanggal: tanggal,
                konsumen: konsumen,
                telp: telp,
                keterangan: keterangan,
                items: items,
                grandtotal: grandtotal,
                bayar: bayar,
                kembali: kembali
            },
            success: function(response) {
                var res = JSON.parse(response);
                if (res.status === 'success') {
                    alert(res.message);
                    // Lakukan sesuatu setelah berhasil menyimpan data
                } else {
                    alert(res.message);
                }
            },
            error: function(response) {
                alert('Error saving data');
            }
        });
    });
</script>

 </div>
 </div>  
</div>