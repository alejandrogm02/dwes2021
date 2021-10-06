<DOCTYPE html>
<body>
<?php
$nombres = array("alejandro" => "descripcion mas larga","alejandro2" => "descripcion corta");
uasort($nombres, function($a,$b){
    return strlen($b) - strlen($a);
});

var_dump($nombres);
?>
</body>
</html>