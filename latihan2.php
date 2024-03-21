<!DOCTYPE html>
<html>

<head>
    <style>
        table, th, td {
            border: 1px solid blue;
            padding: 15px;
            border-spacing: 10px;
            border-radius: 10px;
        }
        th {
            background-color: #0000FF;
            text-align: center
        }
        td {
            background-color: #96D4D4;
        }    
    </style>
    <title>TUGAS</title>
    <link rel="icon" type="image/x-icon" href="an.jpg">
</head>

<body style="background-color:white;">
    <p>test</p>
    <img src="an.jpg" alt="Anjing">
    <table border="1" style="width:100%; height: 200px">
    <caption>Product</caption>
        <tr>  
            <th style="width:10%">Kode</th>
            <th style="width:20%">Nama</th>
            <th style="width:40%">Satuan</th>    
            <th style="width:30%" colspan="2">Harga</th>
        </tr>
        <tr>   
            <td rowspan="2">M001</td>
            <td>CPU</td>
            <td>pcs</td>    
            <td>2000</td>
            <td>2500</td>
        </tr>
        <tr>  
            <td>RAM</td>
            <td>pcs</td>    
            <td>3000</td>
            <td>3500</td>
        </tr>
    </table>    
</body>
</html>