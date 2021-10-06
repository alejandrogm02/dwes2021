<DOCTYPE html>
<body>
<?php
function partlist($length,$cadenas){
    for($i = 0; $i <= $length - 2 ;$i++){
        $cadena1 = implode(", ", array_slice($cadenas,0,$i+1));
        $cadena2 = implode(", ", array_slice($cadenas,$i+1,$length));
        $cadenas2 = array($cadena1,$cadena2);
        print_r($cadenas2);
        echo "<br>";
    }
}
$cadenas = array("Seguro", "que", "apruebo", "esta", "asignatura");
$cadenaslength = count($cadenas);
partlist($cadenaslength,$cadenas);
?>
</body>
</html>