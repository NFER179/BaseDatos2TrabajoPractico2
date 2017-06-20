<html>
  <?php
    include 'phpFunctions/DBManage.php';
    include 'phpFunctions/MainFunc.php';
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      if (!empty($_POST["peliculaInt"])) {
        $_saveStatus = GuardarPeliculasVistas($_GET["usuario"], $_POST["peliculaInt"]);
      }
    }
  ?>
  <head>
    <link rel="stylesheet" type="text/css" href="css/defaultStyle.css"></script>
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
        <a href="index.php">Log Out</a>
      </div>
      <div id="cuerpoDiv">
        <div id="agregarPeliDiv">
          <form method="post" action="<?php echo htmlspecialchars($_SEVER["PHP_SELF"]);?>">
<!--            <input type="text" id="peliculaInt" name="peliculaInt" onkeypress="HandleKeyPress(event)">            <input type="button" value="Agregar" onclick="AgregarPelicula()">-->
            <input type="text" name="peliculaInt">
            <input type="submit" value="Agregar">
          </form>
          <?php
            if(!empty($_saveStatus)) {
              ?>
              <label><?php echo $_saveStatus?></label>
              <?php
            }
          ?>
<!--          <form method="post" action="<?php echo htmlspecialchars($_SEVER["PHP_SELF"]);?>">            <table id="pelisAgregadasTbl">              <tr>                <th>Peliculas</th>              </tr>            </table>            <input type="button" id="GuardarPeliculas" value="Guardar">          </form> -->
        </div>
        <div id="pelisVistasDiv">
          <table id="pelisVistasTbl">
            <tr>
              <th>Peliculas Vistas</th>
            </tr>
            <?php
              PeliculasVistas($_GET["usuario"]);
            ?>
          </table>
        </div>
        <div id="paresUsuariosDiv">
          <?php
            ArmarTablaPeliculasVistas();
          ?>	
        </div>
      <div>
      <div id="pieDiv">
      </div>
    </div>
  </body>
</html>
