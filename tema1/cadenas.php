<DOCTYPE html>
<html>
<body>
<?php
$nombre = $_GET["nombre"];
$trim = trim($nombre, "/");
echo $trim ?: "alejandro";
echo "<br>";
echo strlen($nombre);
echo "<br>";
echo strtoupper($nombre);
echo "<br>";
echo strtolower($nombre);
echo "<br>";
$prefijo = $_GET["prefijo"] ?? "";
$strpos = strpos($nombre, $prefijo);
if($strpos === false){
    echo "El nombre no comienza con el prefijo";
}else{
    if($strpos != 0){
        echo "El nombre no comienza con el prefijo";
    }else{
        echo "El nombre comienza con el prefijo";
    }
}
echo "<br>";

$a = substr_count($nombre, "A") + substr_count($nombre,"a");
echo "La cadena tiene " . $a ." a"; 
echo "<br>";

$pos = stripos($nombre,'a');

if($pos === false){
    echo "No hay ninguna a";
}else{
    echo "La primera a esta en la posicion " . $pos;
}
echo "<br>";

$replace = str_ireplace('o',0,$nombre);
echo $replace;
echo "<br>";
$url = 'http://username:password@hostname:9090/path?arg=value';
echo "Protocolo: " . parse_url($url, PHP_URL_SCHEME);
echo "<br>";
echo "Nombre de usuario: " . parse_url($url, PHP_URL_USER);
echo "<br>";
echo "Path: " . parse_url($url, PHP_URL_PATH);
echo "<br>";
echo "Querystring: " . parse_url($url, PHP_URL_QUERY);
?>
</body>
</html>
