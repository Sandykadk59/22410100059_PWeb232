<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container mt-3">
    <div class="card">  
    <div class="card-header"><button type="button" id="tambahpenjualan" class="btn btn-success"> + </button><b> PENJUALAN</b></div>

    <div class="card-body">
    <table class="table" id="tabelpenjualan">
        <thead>
        <tr>
            <th>Invoice</th>
            <th>Tanggal</th>
            <th>Konsumen</th>
            <th>Telp</th>
            <th>Total</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>T01K0012024089620106214</td>
            <td>28-05-2024</td>
            <td>Sandyka</td>
            <td>089620106214</td>
            <td>20000</td>
            <td><button type="button" class="btn btn-success">
                V
            </button></td>
        </tr>
        <tr>
            <td>T01K0012024089620106214</td>
            <td>28-05-2024</td>
            <td>Sandyka</td>
            <td>089620106214</td>
            <td>30000</td>
            <td><button type="button" class="btn btn-success">
                V
            </button></td>
        </tr>
        <tr>
            <td>T01K0012024089620106214</td>
            <td>28-05-2024</td>
            <td>Sandyka</td>
            <td>089620106214</td>
            <td>40000</td>
            <td><button type="button" class="btn btn-success">
                V
            </button></td>
        </tr>
        <tr>
            <td>T01K0012024089620106214</td>
            <td>28-05-2024</td>
            <td>Sandyka</td>
            <td>089620106214</td>
            <td>50000</td>
            <td><button type="button" class="btn btn-success">
                V
            </button></td>
        </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3">TOTAL</td>
                <td></td>
                <td>3000000</td>
                <td></td>
            </tr>
        </tfoot>
    </table>
    </div>
    </div>

    <script>
    $(document).ready(function(){
        $('#tabelpenjualan').DataTable();
       
        $("#tambahpenjualan").click(function(){
            $('#isiutama').load('tambahpenjualan.php');    
        });
    });
    </script>

</body>
</html>