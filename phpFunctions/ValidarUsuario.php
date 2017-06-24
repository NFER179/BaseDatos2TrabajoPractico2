<?php
  include 'DBManage.php';

  session_start();

  $_usuario = $_POST["user"];
  $_pass = $_POST["pass"];

  if (LogInFor($_usuario, $_pass)) {
    $_SESSION["user"] = $_usuario;
    echo TRUE;
  } else {
    echo FALSE;
  }
?>
