<!DOCTYPE html>
<html>
    <head>
        <title>Latihan JS 4</title>
    </head>

    <body>
        <h2> JavaScript if </h2>
        
        <p> PROGRAM HITUNG NILAI </p>

        <form>
            30% UTS <br>  
            <input type="number" name="uts" id="uts"><br><br>
            30% UAS <br>
            <input type="number" name="uas" id="uas"><br><br>
            40% TUGAS <br>
            <input type="number" name="tugas" id="tugas"><br><br>

            <button type="button" onclick="hitung()"> Hitung </button><br><br>

            <input type="number" name="total" id="total">
        </form>

        <script>
            function hitung(){
                let uts = document.getElementById("uts").value;
                let uas = document.getElementById("uas").value;
                let tugas = document.getElementById("tugas").value;
                
                console.log(uts);
                console.log(uas);
                console.log(tugas);

                let total = parseInt(uts)*0.3 + parseInt(uas)*0.3 + parseInt(tugas)*0.4;
                console.log(total);
                
                document.getElementById("total").value = total;
                abjad();
            }

            function abjad(){
                let nilai = document.getElementById("total").value;
                console.log(nilai);

                if(nilai>=80){
                    document.getElementById("huruf").innerHTML = "Huruf : A";
                } else if(nilai>=70){
                    document.getElementById("huruf").innerHTML = "Huruf : B";
                } else if(nilai>=60){
                    document.getElementById("huruf").innerHTML = "Huruf : C";
                } else{
                    document.getElementById("huruf").innerHTML = "Huruf : D";
                }
            }
        </script>
        
        <p id="huruf"></p>
    </body>
</html>