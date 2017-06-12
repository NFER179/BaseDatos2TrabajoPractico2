<html>
<?php
if (empty($_POST["usuario"])) {
}
else {
  header('Location: main.php?usuario='. $_POST["usuario"]);
}
?>
  <head>
  </head>
  <body>
    <a href="registro">Registrarse</a>
    <form method="post" action="<?php echo htmlspecialchars($_SEVER["PHP_SELF"]); ?>">
      <br>
      <t>Usuario: </t>
      <input type="text" name="usuario"/>
      <br>
      <t>Password: </t>
      <input type="password"/>
      <input type="submit" value="Ingresar">
    </form>
  </body>
</html>
