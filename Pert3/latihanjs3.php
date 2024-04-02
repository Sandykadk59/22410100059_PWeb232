<!DOCTYPE html>
<html>
    <body>
        <h2> Kalkulator </h2>
        
        <form>
            Nilai 1 : 
            <input type="number" name="nilai1" id="nilai1">
            <br><br>
            Nilai 2 : 
            <input type="number" name="nilai2" id="nilai2">
            <br><br>
            <button type="button" onclick="myfungsi1()"> Tambah </button>
            <button type="button" onclick="myfungsi2()"> Kurang </button>
            <button type="button" onclick="myfungsi3()"> Kali </button>
            <button type="button" onclick="myfungsi4()"> Bagi </button>
            <br><br>
            <input type="number" name="hasil" id="hasil">
        </form>

        <script>
            // Fungsi Tambah
            function myfungsi1(){
                let x = document.getElementById("nilai1").value;
                let y = document.getElementById("nilai2").value;
                console.log(x);
                console.log(y);
                let z = parseInt(x) + parseInt(y);
                console.log(z);
                document.getElementById("hasil").value = z;
            }

            // Fungsi Kurang
            function myfungsi2(){
                let x = document.getElementById("nilai1").value;
                let y = document.getElementById("nilai2").value;
                console.log(x);
                console.log(y);
                let z = parseInt(x) - parseInt(y);
                console.log(z);
                document.getElementById("hasil").value = z;
            }

            // Fungsi Kali
            function myfungsi3(){
                let x = document.getElementById("nilai1").value;
                let y = document.getElementById("nilai2").value;
                console.log(x);
                console.log(y);
                let z = parseInt(x) * parseInt(y);
                console.log(z);
                document.getElementById("hasil").value = z;
            }

            // Fungsi Bagi
            function myfungsi4(){
                let x = document.getElementById("nilai1").value;
                let y = document.getElementById("nilai2").value;
                console.log(x);
                console.log(y);
                let z = parseInt(x) / parseInt(y);
                console.log(z);
                document.getElementById("hasil").value = z;
            }
        </script>
    </body>

</html>