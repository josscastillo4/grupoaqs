<?php 

$destino ="cotiza@grupoaqs.mx";
$asunto ="Contacto desde el sitio web de AQS";
$contenido = "Mi nombre es : ".$_POST["nombre"]."\n <br>";
$contenido.= "Mi correo es:  ".$_POST["email"]."\n <br>";
$contenido.="Asunto: ".$_POST["asunto"]."\n<br>";
$contenido.="Mi telefono es: ".$_POST["telefono"]."\n<br>";
$contenido.="Tipo de seguro: ".$_POST["seguro"]."\n<br>";
$contenido.= "Mensaje : ".$_POST["mensaje"]. "\n<br>";

$encabezados  = "MIME-Version: 1.0\n";
$encabezados .= "Content-type: text/html; charset=iso-8859-1\n";

// FUNCION MAIL 
mail("$destino", utf8_decode($asunto),utf8_decode($contenido), $encabezados);
?>