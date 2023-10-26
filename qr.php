<html>
    <head>
        <title>Ejemplo de QR</title>
    </head>
    <body>
        <h1>Generador de QR básico con la API de google chart</h1>

        <form action="qr.php" method="POST">
            Texto: <input type="text" name="texto">
            <input type="submit" name="enviar">
        </form>
        <?php if(isset($_REQUEST['enviar'])){

        echo "<img src='https://chart.apis.google.com/chart?chs=150x150&cht=qr&chl=$_REQUEST[texto]'>";
         } ?>
    </body>
</html>