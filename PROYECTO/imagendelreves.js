var giradas = 0; 

function girar( b ){

	// Accion por defecto para Buttons;
	//document.body.style.background='red';

	var carta = ( b.id );
	b.className='girada';
	b.src='reversocarta.jpg';
	//carta

	//alert (carta);
	contador_giradas();
}

function contador_giradas() {
	giradas+=1;
	//alert(giradas);
	if (giradas==15) {
		comparar_cartas();
	}

}


function comparar_cartas() {
	var ultima_carta = document.getElementsByClassName("cara");
	//alert (ultima_carta[0]);
	var carta_servidor = document.getElementById('escollida');
	if (ultima_carta.id==carta_servidor.getAttribute('escollida')) {
		alert("HAS GUANYAT");
	}
	else {
		alert ("HAS PERDUT");
	}
}