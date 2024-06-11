<div class="container mt-3"></div>

<div class="card">
    <div class="card-header"><b>PEMBELIAN</b></div>
        <div class="card-body">
            <div class="card">
            <div class="card-header"><b>PEMBELIAN</b></div>
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
            <input type="text" class="form-control" id="kode" name="kode" readonly data-bstoggle="modal" data-bs-target="#myModal">
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
        </div>
    </div>
</div>
