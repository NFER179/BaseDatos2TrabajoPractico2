<html>
  <?php
    include 'phpFunctions/DBManage.php';
  ?>
  <head>
  </head>
  <body>
    <?php
      $_nombreCompleto = ObtenerNombre($_GET["usuario"]);
    ?>
    <div>
      <div>
        <form action="CambioContrase&#241a.php" method="post">
          <t><?php echo $_nombreCompleto?></t>
          <input type="submit" value="Cambiar Contrase&#241a">
        </form>
      </div>
      <div>
        <form method="post" action="DBManage.php">
        </form>
      </div>
      <div>
        <table> nico </table>
      </div>
    <div>
  </body>
</html>
