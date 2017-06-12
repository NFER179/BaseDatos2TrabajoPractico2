<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/estilos.css"></script>
    <script type="text/javascript" src="js/functions.js"></script>
  </head>
  <body>
    <form method="post" action="<?php echo htmlspecialchars($_SEVER["PHP_SELF"]);?>">
      <label>Contrase&#241a Actual:</label>
      <input type="password">
      <br>
      <label>Nueva Contrase&#241a:</label>
      <input type="password" id="pass" class="DefaultTextField">
      <br>
      <label>Repita contrase&#241a:</label>
      <input type="password" id="repPass" class="DefaultTextField" onblur="ControlPassword('pass', 'repPass')" onkepress="ControlarPass('pass', 'repPass')">
      <br>
      <input type="submit" value="Cambiar">
    </form>
  </body>
</html>
