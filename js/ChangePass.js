$("#_changePass").submit(function(event) {

  event.preventDefault();
  var _cambiar = false;
  var _errorMessage = "";

  var _oldPass = $("#_oldPass");
  var _newPass = $("#_newPass");
  var _repNewPass = $("#_repNewPass");

  if (!_oldPass.val() || !_newPass.val() || !_repNewPass.val()){
    _cambiar = false;
    /*preguntar cuales estan sin valor*/;
    alert(_errorMessage);
  } else { 
    if ( _newPass.val() == _repNewPass.val() ) {
      var _url = "phpFunctions/ChangePass.php";
      $.post( _url, { oldPass : _oldPass.val() , newPass : _newPass.val() })
        .done(function(data){
          if ( data == 1 ) {
            alert("Se realizo el cambio de contraseña.");
            window.location = "main.php";
          } else {
            alert(data);
          }
        })
    } else {
      _errorMessage = "Error al volver a escribir la nueva contraseña.";
      alert(_errorMessage);
    }
  }
});

