<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lanzar dados</title>
</head>
<body style="text-align: center;">
    <h1 style="color: purple;"> Presiona el botón y lanza los dados </h1>

    <!--    ////////////PHP//////////             -->
    <?php
    
      $n1 = rand(1, 6);
      $n2 = rand(1, 6);
      if(isset($_POST['boton'])) {
          echo "<h2> El resultado de tus dados es {$n1} y {$n2}</h2>";
      }

    ?>
    <!--    ///////////////////////////          -->

    <form method="post">
        <input type="submit" name="boton" value=" Lanzar dados "/>
    </form>
</body>
</html>