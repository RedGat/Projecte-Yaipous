var giradas = 0; 

function girar( b ){

	// Accion por defecto para Buttons;
	//document.body.style.background='red';

	var carta = ( b.id ); //guardem en la variable carta el id del element que ens han clicat, es a dir, la carta
	b.className='girada'; //cambiem la clase a girada, per trobar despres la unica cara
	b.src='reversocarta.jpg'; //cambiem la imatge de la carta per la del revers
	//carta

	//alert (carta);
	contador_giradas();
}

function contador_giradas() {
	giradas+=1; //cada cop que una carta es gira suma 1 al contador
	//alert(giradas);
	if (giradas==15) { //com son 16 cartes, quan arribem a la 15 parem i comparem cartes
		comparar_cartas();
	}

}


function comparar_cartas() {
	var ultima_carta = document.getElementsByClassName("cara"); //agafem la unica carta que te com a class cara
	//alert (ultima_carta[0]);
	var carta_servidor = document.getElementById('escollida'); //agafem la carta del servidor que te id escollida
	if (ultima_carta[0].id==carta_servidor.getAttribute('escollida')) {
		//comparem el id de la ultima carta, que es el nom de la carta, amb l'atribut escollida de la carta del servidor, que tambe es el nom de la carta
		alert("HAS GUANYAT");
	}
	else {
		alert ("HAS PERDUT");
	}
}