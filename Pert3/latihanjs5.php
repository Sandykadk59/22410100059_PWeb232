<!DOCTYPE html>
<html>
    <head>
        <title>Latihan JS 5</title>
    </head>

    <body>
        <h2> JavaScript For Loop </h2>

        <form>
            Start <br>  
            <input type="number" name="start" id="start"><br><br>
            End <br>
            <input type="number" name="end" id="end"><br><br>

            <button type="button" onclick="tampil()"> Tampil </button><br><br>
        </form>

        <p id="isi"> </p>

        <script>
            function tampil(){
                var text = '';
                let start = parseInt(document.getElementById("start").value);
                let end = parseInt(document.getElementById("end").value);
                console.log(start);
                console.log(end);

                for(var i=start ; i<=end ; i++){
                    text += i + "<br>";
                }

                document.getElementById("isi").innerHTML = text;               
            }
        </script>
    </body>
</html>