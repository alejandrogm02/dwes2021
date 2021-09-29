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

$A = substr_count($nombre, "A");
$a = substr_count($nombre, "a");
echo "La cadena tiene " . $A . " a mayusculas y " . $a . " a minusculas"; 
echo "<br>";
$replace = str_ireplace('o',0,$nombre);
echo $replace;


?>
</body>
</html>
