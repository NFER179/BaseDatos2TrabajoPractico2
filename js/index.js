$("#_LogIn").submit(function(event) {
  event.preventDefault();
  var _usuario = $("#_usuarioLabel");
  var _pass = $("#_passLabel");

  if(!_usuario.val()) {
    alert("Debe ingresar un usuario valido.");
    _usuario.addClass("ErrorTextField");
  } else {
    if(!_pass.val()) {
      alert("Debe ingresar la contraseña.");
      _pass.addClass("ErrorTextField");
    } else {
        //var url = "http://localhost/TP2/phpFunctions/ValidarUsuario.php";
        var url = "phpFunctions/ValidarUsuario.php";
        $.post( url, { user : _usuario.val() , pass : _pass.val() })
          .done(function(data){
            if (data == 1) {
	      window.location = "main.php";
            } else {
              alert("El usuario o la contraseña es incorrecto.");
            }
          });
      }
  }
});

