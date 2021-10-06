<DOCTYPE html>
<body>
<?php

$cadenas = array("Hola que tal", "como estas", "bien y tu");
$cadenas2 = array_map("strlen",$cadenas);

echo "La cadena mas corta tiene de longitud " . min($cadenas2);
echo "<br>";
echo "La cadena mas larga tiene de longitud " . max($cadenas2);


?>
</body>
</html>