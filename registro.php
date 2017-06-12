<html>
  <?php
    include 'phpFunctions/DBManage.php';
  ?>
  <head>
    <link rel="stylesheet" type="text/css" href="css/estilos.css"></script>
    <script type="text/javascript" src="js/functions.js"></script>
    
  </head>
  <body>
    <?php
    $name = $apellido = "";
    $nameErr = $apellidoErr = "";
    $_registrar = TRUE;
    if ($_SERVER["REQUEST_METHOD"] == "POST"){

      $_nombre = $_POST["name"];
      $_apellido = $_POST["apellido"];
      $_usuario = $_POST["usuario"];
      $_clave = $_POST["pass"];
      $_repClave = $_POST["repPass"];

      if (empty($_nombre)) {
        $nameErr = "Campo Obligatorio.";
        $_registrar = FALSE;
      } else { 
      }
      if (empty($_apellido)){
        $apellidoErr = "Campo obligatorio.";
        $_registrar = FALSE;
      } else {
      }

      if(!$_registrar){
        echo "<h2>regstrar</h2>";
      }

      if ($_clave != $_repClave | !$_registrar) {

      }
      else{
        RegistrarPersona($_nombre, $_apellido, $_usuario, $_clave);
      }
    }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SEVER["PHP_SELF"]);?>">
      <label>* Nombres: </label>
      <input type="text" id="nombreInp" name="name">
      <span class="error"><?php echo $nameErr; ?></span>
      <br>
      <label>* Apellido: </label>
      <input type="text" id="apellidoInp" name="apellido">
      <span class="error"><?php echo $apellidoErr; ?></span>
      <br>
      <label>* Usuario: </label>
      <input type="text" id="usuaroInp" name="usuario">
      <span class="error"><?php echo $usuarioErr ?></span>
      <br>
      <label>* Password: </label>
      <input type="password" class="DefaultTextField" id="passInp" name="pass">
      <span class="error"><?php echo $passErr; ?></span>
      <br>
      <label>* Repita Password: </label>
      <input type="password" class="DefaultTextField" id="repPassInp" name="repPass" onblur="ControlPassword()">
      <span class="error"><?php echo $repPassErr; ?></span>
      <br>
      <input type="submit" value="Registrar">
      <input type="button" value="Cancelar" onclick="GoBack()">
    </form>
  </body>
</html>
