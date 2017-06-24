<html>
  <!--<?php
    include 'phpFunctions/DBManage.php';
    include 'phpFunctions/MainFunc.php';
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      if (!empty($_POST["peliculaInt"])) {
        $_saveStatus = GuardarPeliculasVistas($_GET["usuario"], $_POST["peliculaInt"]);
      }
    }
  ?>-->
  <head>
    <link rel="stylesheet" type="text/css" href="css/defaultStyle.css"></script>
    <link rel="stylesheet" type="text/css" href="css/mainStyle.css"></script>

    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

  </head>
  <body>
    <div id="principalDiv">
      <div id="headDiv">
        <div id="headInfDiv">
          <div id="imgDiv">
            <img src="img/camareIcon.jpg" alt="Smiley face" height="42" width="42">
          </div>
          <div id="labelDiv">
            <?php
              //$_nombreCompleto = ObtenerNombre($_GET["usuario"]);
              session_start();
              $_nombreCompleto = ObtenerNombre($_SESSION["user"]) . " (" . $_SESSION["user"] . ")";
            ?>
            <label><?php echo $_nombreCompleto?></label>
          </div>
        </div>
        <div id="spaceDiv">
        </div>
        <div id="headConfDiv">
          <div id="formDiv">
            <form action="CambioContrase&#241a.php" method="post">
              <input type="submit" value="Cambiar Contrase&#241a">
            </form>
          </div>
          <div id="aDiv">
            <a id="_LogOut" href="index.php">Log Out</a>
          </div>
        </div>
      </div>
      <div id="bodyDiv">
        <div id="agregarPeliDiv">
          <div id="nombrePeliculaDiv">
<!--            <form method="post" action="<?php echo htmlspecialchars($_SEVER["PHP_SELF"]);?>">  -->
  <!--            <input type="text" id="peliculaInt" name="peliculaInt" onkeypress="HandleKeyPress(event)">            <input type="button"   value="Agregar" onclick="AgregarPelicula()">-->
            <form method="post" id="_CargarPelicula">
              <input type="text" id="_pelicula" name="peliculaInt">
              <input type="submit" value="Agregar" onclick="AgregarPelicula()">
            </form>
            <!-- <?php
              if(!empty($_saveStatus)) {
                ?>
                <label><?php echo $_saveStatus?></label>
                <?php
              }
            ?> -->
  <!--          <form method="post" action="<?php echo htmlspecialchars($_SEVER["PHP_SELF"]);?>">            <table id="pelisAgregadasTbl">              <tr>                <th>Peliculas</th>              </tr>            </table>            <input type="button" id="GuardarPeliculas" value="Guardar">          </form> -->
          </div>
          <div id="pelisVistasDiv" class="datagrid">
            <table id="pelisVistasTbl">
              <thead>
                <tr>
                  <th>Peliculas Vistas</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  /*PeliculasVistas($_GET["usuario"]);*/
                  PeliculasVistas($_SESSION["user"]);
                ?>
              </tbody>
            </table>
          </div>
        </div>
        <div id="paresUsuariosDiv">
          <div class="datagrid">
            <?php
              ArmarTablaPeliculasVistas();
            ?>	
          </div>
        </div>
      </div>
    </div>
  </body>
  <script type="text/javascript" src="js/functions.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
</html>

