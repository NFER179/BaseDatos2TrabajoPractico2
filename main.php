<html>
  <?php
    include 'phpFunctions/DBManage.php';
  ?>
  <head>
    <link rel="stylesheet" type="text/css" href="css/estilos.css"></script>
    <link rel="stylesheet" type="text/css" href="css/mainStyle.css"></script>

    <script type="text/javascript" src="js/functions.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
  </head>
  <body>
    <div id="principalDiv">
      <div id="cabecera">
        <?php
          $_nombreCompleto = ObtenerNombre($_GET["usuario"]);
        ?>
        <form action="CambioContrase&#241a.php" method="post">
          <t><?php echo $_nombreCompleto?></t>
          <input type="submit" value="Cambiar Contrase&#241a">
        </form>
      </div>
      <div id="cuerpoDiv">
        <div id="agregarPeliDiv">
          <input type="text" id="peliculaInt" name="peliculaInt" onkeypress="HandleKeyPress(event)">
          <input type="button" value="Agregar" onclick="AgregarPelicula()">
          <form method="post" action="">
            <table id="pelisAgregadasTbl">
              <tr>
                <th>Peliculas</th>
              </tr>
            </table>
          </form>
        </div>
        <div id="pelisVistasDiv">
          <table id="pelisVistasTbl">
            <tr>
              <th>Peliculas que Vi<th>
            </tr>
          </table>
        </div>
        <div id="paresUsuariosDiv">
          <table> nico </table>
        </div>
      <div>
      <div id="pieDiv">
      </div>
    </div>
  </body>
</html>
