//compruebo que este bien enlazado
//alert("Hola");



const ivaNormal = 21;
const ivaReducido = 10;
const ivaSuperreducido = 4;

//SABER SI HAY LIBRO
let haylibro = false;


function enviar1(nombre, precio, tipoIva){

	let bodyCestaElement = document.getElementById("bodyCesta");
	let contenidoCesta = bodyCestaElement.innerHTML;

	let porcentajeIva = 0;
	let cantidadIva = 0;
	let subTotal = 0;


	/*los libros tienen un 4 % de IVA
	 los alimentos un 10% 
	  el resto un 21 %*/

	switch(tipoIva){
		case "ivaNormal":
			porcentajeIva = ivaNormal;
			break;
		case "ivaReducido":
			porcentajeIva = ivaReducido;
			break;
		default:
			haylibro = true;
			porcentajeIva = ivaSuperreducido;
	}

	subTotal = precio * (1 - (porcentajeIva / 100));

	cantidadIva = precio - subTotal;




	contenidoCesta += "<tr><td>" + nombre + "</td><td>" + subTotal.toFixed(2) + "€</td><td>" + porcentajeIva.toFixed(2) + " %</td><td>" + cantidadIva.toFixed(2) + " €</td><td class='totalItem'>" + precio.toFixed(2) + " €</td></tr>";

	bodyCestaElement.innerHTML = contenidoCesta;
	
}





function calcularTotal(){
	let totales = document.getElementsByClassName("totalItem");
	
	let total = 0;


	for (let i = 0; i < totales.length; i++) {
		let precioItem = parseFloat(totales[i].innerHTML.replace(" €", ""));
		total += precioItem;
}

let bodyGastosEnvio = document.getElementById("bodyGastosEnvio");
let bodyGastosEnvioF = bodyGastosEnvio.innerHTML;	

	if( (total >= 50 || haylibro == true) ){

		bodyGastosEnvioF += "<tr><td>" + "Gastos de Envio" + "</td><td>" + ""  + "</td><td>" + "" + " </td><td>" + ""  + " </td><td>" + "0" + " €</td></tr>";
		bodyGastosEnvio.innerHTML = bodyGastosEnvioF;
	
	}else{
		bodyGastosEnvioF += "<tr><td>" + "Gastos de Envio" + "</td><td>" + ""  + "</td><td>" + "" + " </td><td>" + ""  + " </td><td>" + "5.99" + " €</td></tr>";
		bodyGastosEnvio.innerHTML = bodyGastosEnvioF;
		total+=5.99;

		
	}




	let bodyCestaSumaTotal = document.getElementById("bodyCestaSumaTotal");
	let contenidoCestaSumaTotal = bodyCestaSumaTotal.innerHTML;	

	contenidoCestaSumaTotal += "<tr><th>" + "TOTAL: " + "</tdh><td>" + ""  + "</td><td>" + "" + " </td><td>" + ""  + " </td><td class='totalItem'>" + total + " €</td></tr>";
	bodyCestaSumaTotal.innerHTML = contenidoCestaSumaTotal;

	

}


let contenidoOriginal = ""; // Variable para guardar el contenido original

function mensajeDeLosiento() {
	// Guarda el contenido original antes de reemplazarlo
	contenidoOriginal = document.getElementById("tablaCesta").innerHTML;

	// SUSTITUYE EL CONTENIDO TB CON textContent
	document.getElementById("tablaCesta").innerHTML = "<center><i>Lo sentimos, su sesión ha expirado</i></center>" +
		"<center><input type='button' value='Volver a la página de compra' onclick='VolverDondeEstaba()'></center>";
}

window.onload = function () {
	//solo lo hace una vez
	//setTimeout(mensajeDeLosiento, 90000); // 5 segundos

	//lo hace CADA 90 seg
	setInterval(mensajeDeLosiento, 5000); 
}

function VolverDondeEstaba() {
	// Restaura el contenido original
	document.getElementById("tablaCesta").innerHTML = contenidoOriginal;
}



