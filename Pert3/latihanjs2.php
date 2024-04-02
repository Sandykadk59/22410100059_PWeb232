<!DOCTYPE html>
<html>
    <head>
        <title>Latihan JS 2</title>
    </head>

    <body>
        <p id="isi"> isi </p>
        <p> mantap benar </p>
        <button type="button" onclick="myfungsi()"> Klik </button>
        <button type="button" onclick="myfungsi1()"> Klik </button>

        <script>
            document.getElementById("isi").innerHTML = 5 + 6;

            document.write(5+12);
            document.write("\n sip");

            function myfungsi(){
                window.alert("ERROR 404");
            }

            function myfungsi1(){
                console.log("Ini muncul di log");
            }

        </script>
    </body>
</html>