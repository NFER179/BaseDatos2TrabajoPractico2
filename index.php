<html>
  <head>
    <?php
      include 'phpFunctions/DBManage.php';
      include 'phpFunctions/registroFunc.php';
    ?>

    <link rel="stylesheet" type="text/css" href="css/defaultStyle.css"></script>
    <link rel="stylesheet" type="text/css" href="css/indexStyle.css"></script>

    <script type="text/javascript" src="js/functions.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
  </head>
  <body>
    <div id="headDiv">
      <a href="registro">Registrarse</a>
    </div>
    <div id="bodyDiv">
      <?php
      $_mensajeError = "";
      $_usuario = $_POST["usuario"];
      $_pass = $_POST["pass"];
      if (!empty($_usuario) and !empty($_pass)) {
        if(ExisteUsuario($_usuario)) {
          if (LogInFor($_usuario, $_pass)) {
            header('Location: main.php?usuario='. $_POST["usuario"]);
          }
          else {
            $_mensajeError = "La password ingresada no es la correcta.";
          }
        }
        else {
          $_mensajeError = "No Ingreso un nombre de usuario correcto";
        }
      }
      ?>
      <form method="post" action="<?php echo htmlspecialchars($_SEVER["PHP_SELF"]); ?>">
        <br>
        <t>Usuario: </t>
        <input type="text" name="usuario"/>
        <br>
        <t>Password: </t>
        <input type="password" name="pass"/>
        <input type="submit" value="Ingresar">
      </form>
      <p class="textError"><?php echo $_mensajeError;?></p>
    </div>
  </body>
</html>
