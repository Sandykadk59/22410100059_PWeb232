<!DOCTYPE html>
<html>
    <body>
        <h2> JavaScript For Loop </h2>

        <form>
            Start <br>  
            <input type="number" name="start" id="start"><br><br>
            End <br>
            <input type="number" name="end" id="end"><br><br>

            <button type="button" onclick="tampil()"> Tampil </button><br><br>
        </form>

        <script>
            function tampil(){
                let text = '';
                let start = document.getElementById("start");
                let end = document.getElementById("end");
                console.log(start);
                console.log(end);

                for(let i=0  ; i<=5 ; i++){
                    text = text + i + "<br>";
                }

                document.getElementById("isi").innerHTML = text;               

                <p id="isi"> </p>
            }
        </script>
    </body>
</html>