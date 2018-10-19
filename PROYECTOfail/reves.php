<!DOCTYPE html>
<html>
<head>
	<title>Qui es Qui Harry Potter</title>
	<script type="text/javascript" defer src="imagendelreves.js"></script>
	<link rel = "stylesheet" href = "stylequiesqui.css">

<?php
//abrimos y leemos el fichero txt.
$fp = fopen("imatges.txt", "r");
//creamos un array para incluir cada linea leida.


$arraynoms=array();
$arraycaract=array();
$arrayvalores=array();
$arraylineas=array();
$arrayLineas=array();
$arrayLineasexplo=array();
while(!feof($fp)){
$delimeter=array(":",","," ");
$linea = fgets($fp);
$replace= str_replace($delimeter, $delimeter[0], $linea);
$explode=explode($delimeter[0], $replace);
array_push($arraylineas, $linea);
array_push($arraynoms, $explode[0]);

array_push($arrayvalores, $explode[4],$explode[8],$explode[12]);
}
array_push($arraycaract, $explode[3],$explode[7],$explode[11],$explode[15]);
for($i=0;$i<count($arraylineas);$i++){
$atributs=explode(":", $arraylineas[$i]);
array_push($arrayLineas, $atributs[1]);
}
for($n=0;$n<4;$n++){
$atributs1=explode(",", $arrayLineas[$n]);
array_push(($arrayLineasexplo), $atributs1[$n]);
}
//echo '<pre>';
//print_r($arraylineas);//contiene las lineas completas del fichero en posiciones array.
//print_r($arrayLineas);//Contiene todas las caracteristicas y sus valores del personaje.
//print_r($arrayvalores);//contiene los valores de las caracteristicas en un array.
//print_r($arraycaract);// contiene las carcteristicas del personaje.
//print_r($arraynoms); //contiene los nombres de los personajes.
//print_r($explode);
//print_r($arrayLineasexplo);
//echo '</pre>';

/*----------------------------------------------------------------------------
-------------------------------------------------------------------------------
------------------------------------------------------------------------------*/
$zp = fopen("config.txt", "r");
//creamos un array para incluir cada linea leida.
$arraynomsc=array();
$arraycaractc=array();
$arrayvaloresc=array();
$arraylineasc=array();
$arrayLineasc=array();
$espode=array();
$arraycaracteristiques=array();

while(!feof($zp)){
$delimeterc=array(":"," ");
$lineac = fgets($zp);
$replacec= str_replace($delimeterc, $delimeterc[0], $lineac);
$explodec=explode($delimeterc[0], $replacec);

array_push($espode, $explodec);
array_push($arraylineasc, $lineac);
array_push($arraynomsc, $explodec[0]);


}
array_push($arraycaractc, $explodec[2],$explodec[3]);
//array_push($arraycaracteristiques,$arraynomsc[0],$arraynomsc[3],$arraynomsc[6],$arraynomsc[9]);
for($c=0;$c<count($arraylineasc);$c++){
$atributsc=explode(":", $arraylineasc[$c]);
array_push($arrayLineasc, $atributsc);
}
//echo '<pre>';
//print_r($arraylineasc);
//print_r($arrayLineasc);
//print_r($arraynomsc);
//print_r($arraycaracteristiques);
//print_r($arraycaractc);
//print_r($explodec);
//echo '</pre>';





/*-------------------------------------------------------------------------
---------------------------------------------------------------------------
---------------------------------------------------------------------------*/

//Una mateixa imatge (nom d'arxiu) apareix dos cops a l'arxiu de configuració.




if(count($arraynoms)>count(array_unique($arraynoms))){
	echo '<script language="javascript">alert("hay personajes repetidos");</script>';
}/*else{
	echo "No hay personajes repetidos";
}
*/
echo "<br>";

//Dues imatges diferents tenen les mateixes característiques.


if(count($arrayLineas)>count(array_unique($arrayLineas))){
	echo "hay atributos repetidos";
}/*else{
	echo "No hay atributos repetidos";
}*/

echo "<br>";


//Una característica que apareix al fitxer imatges.txt no apareix al fitxer config.txt (al revés no importa)


for($v=0;$v<count($arraycaract);$v++){
	if(in_array($arraycaract[$v], $arraynomsc)){
		
	}else{
		echo "la caracteristicas " . $arraycaract[$v] . " no existe";
	}
	
}


fclose($zp);
fclose($fp);
echo "<br>";
?>

</head>
<body background="fondo.jpg" onmousedown="elemento(event);">
	<h2 style='color:white'>Qui es Qui - Versió Harry Potter</h2>


	<form name="reves.php"  method="post">
	<select name="caracteristica">
		<option value="ulleres si">¿Porta ulleres?</option>
		<option value="huma si">¿Es huma?</option>
		<option value="sexe mascle">¿Es macle?</option>
		<option value="sexe famella">¿Es famella?</option>
		<option value="cabell calb">¿Es calb?</option>
		<option value="cabell ros">¿Es ros?</option>
		<option value="cabell castany">¿Es castanys?</option>
		<option value="cabell pelroig">¿Es pelroig?</option>
		<option value="cabell moreno">¿Es moreno?</option>
		<option value="cabell castany">¿Es castanys?</option>
	<!--<input type="checkbox" name="ulleres" value="ulleres si">¿Porta ulleres?-->
	</select>
	
    <input type="submit" name="submit value="Submit"/>
   
</form>
<br>

<?php


$array_lineas = array(); //aray con las lineas del txt
$array_nombres = array(); //aray con los nombres de las fotos

//string fgets (resource $handle [, int $length ])

//codigo para sacar el nombre de las fotos:

$fp = fopen("imatges.txt", "r");
while (!feof($fp)){
    $linea = fgets($fp);
    $linea_split = explode(":", $linea);
    array_push(($array_lineas),$linea_split);
    //echo $linea_split;
    //echo("<br><br><br>");
}

for ($i=0;$i<count($array_lineas);$i++) {
	$nom_imatge = $array_lineas[$i][0];
	array_push(($array_nombres),$nom_imatge);

}

//echo "<pre>";
//print_r($array_nombres);
//echo "</pre>";
fclose($fp);

$x=rand(1,9);
	echo "<img style='float: left; padding-left: 15px' escollida=" . $array_nombres[$x] . " width='150' height='190' src='reversocarta.jpg''>";


shuffle($array_nombres); //mezcla el array

echo "<table id='cartas' align='center'>";
echo "<tr>";

for ($i=0;$i<count($array_nombres);$i++) {
	if ($i%4==0) {
		echo "</tr>";
		echo "<br>";
		echo "<tr>";
	}
	echo "<td>";
	
	echo "<img onclick=girar(this) style='border:5px solid white' id=" . $array_nombres[$i] . " width='150' height='190' src='./img/" . $array_nombres[$i] . "'>";

	echo "</td>";
}
echo "</tr> </table>";






?>

</body>
</html>