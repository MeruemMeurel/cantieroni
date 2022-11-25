<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/index.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous">
    </script>
<script>
    $(function () {
        $("#header").load("header.php");
        $("#footer").load("footer.php");
        $("#listapresenze").load("listapresenze.php");
    });
</script>

</head>
<body>
    <!-- importo header -->
    <div id="header"></div>
   <!-- Inizio suddivisione pagina -->
   
<div class="container-fluid text-center ">
    <div class="row">
        <div class="col-3">
            
            <!-- Sezione di sinistra -->
            <div class="">
                    <!-- Sezione di sinistra  alto-->
                    <!-- calendario -->
                    <img src="../img/logo login.png" />
            </div>
            <div class="">
                    <!-- Sezione di sinistra  basso-->
                    <!-- lista presenze -->
                    <div id="listapresenze"></div>
            </div>

        </div>
        <div class="col-6">
                    <!-- Sezione Centrale -->
                    <img src="../img/logo login.png" />
        </div> 
        <div class="col-3">
                    <!-- Sezione di destra -->
                    <img src="../img/logo login.png" />
        </div>
    </div>
</div>


    <!-- importo footer -->
    <div id="footer"></div>
    <script src="../cdn/js/script.js">
    </script>
</body>
</html>