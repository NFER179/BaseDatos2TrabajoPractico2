$("#_Registro").submit(function(event) {

  event.preventDefault();
  var _crear = false;
  var _errorMessage = "";

  var _nombre = $("#nombreInp");
  var _apellido = $("#apellidoInp");
  var _usuario = $("#usuaroInp");
  var _password = $("#passInp");
  var _repPassword = $("#repPassInp");

  if (!_nombre.val() || !_apellido.val() || !_usuario.val() || !_password.val() || !_repPassword.val()){
    _crear = false;
    /*preguntar cuales estan sin valor*/;
    alert(_errorMessage);
  } else { 
    if ( _password.val() === _repPassword.val() ) {
      var _url = "phpFunctions/RegistrarUsuario.php";
      $.post( _url, { nombre : _nombre.val() , apellido : _apellido.val() , usuario : _usuario.val() , pass : _password.val() })
        .done(function(data){
          if ( data == 1 ) {
            alert("Gracias por Registrarse.");
            window.location = "main.php";
          } else {
            alert(data);
          }
        })
    } else {
      _errorMessage = "Error al volver a escribir la contraseña.";
      alert(_errorMessage);
    }
  }
});

