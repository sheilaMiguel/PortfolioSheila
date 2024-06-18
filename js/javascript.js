let posicion=1;
	function siguiente(){
	if (posicion<3){
	posicion=posicion+1;
	document.getElementById("foto").src="img/foto"+posicion+".png";
	}
	else {document.getElementById("foto").src="img/foto1.png";
	posicion=1;}
	}


