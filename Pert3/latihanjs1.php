<!-- Latihan Javascript -->

<!DOCTYPE html>
<html>
    <head>
        <Script>
            function myfungsi() {
                document.getElementById("isi1").innerHTML = "Javascript is good";
            }
        </Script>
    </head>

    <body>
        <h2>Javascript</h2>

        <p id="isi"> Welcome </p>
        <p id="isi1"> On Javascript</p>
        <button type="button" onclick="myfungsi()"> Klik </button>

        <Script>
            document.getElementById("isi").innerHTML = "Helo Javascript";
        </Script>
    </body>
</html>