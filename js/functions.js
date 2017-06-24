//Funcion para corraborrar contraseña.
/*function ControlPassword(tag1, tag2){
	//document.getElementById("nombreInp").value = document.getElementById("passInp").value;
	//var x = document.getElementById("passInp").value;
	//var y = document.getElementById("repPassInp");

        var x = document.getElementById(tag1);
        var y = document.getElementById(tag2);

        if ( x.value == y.value ) {
		/*y.classList.remove("DefaultTextField");*/
/*		y.className="CorrectTextField";
	}
	else {
		/*y.classList.remove("DefaultTextField");*/
                //y.addEventListener("onkeydown", ControlarPass(x.value, y));
/*                y.className="ErrorTextField";
	}
}

function ControlarPass(element1,  element2) {
alert("dd");
	if ( element2.className == "ErrorTextField" ) {
		if ( element1.value == element2.value ) {
			element2.className="CorrectTextField";
		}
		else {
			element2.className="ErrorTextField";
		} 
	}
}
*/
//Funcion para retornar a la pagina anterior;
function GoBack() {
	window.history.back();
}

