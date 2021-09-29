<DOCTYPE html>
<html>
<body>
<?php

$tabla = "alumnos";
$campos = array("nombre" => "Juan", "apellidos" => "Martínez");
function insert($tabla, $campos){
    foreach($campos as $campo => $valor){
     $valores .= $campo . ",";
     $valores2 .= ":" . $campo . ",";
    }
    $valores = substr($valores,0,-1);
    $valores2 = substr($valores2,0,-1);
 return "INSERT INTO $tabla($valores) values ($valores2)";
}

echo insert($tabla,$campos);
$sql= "INSERT INTO tabla(campos) values (valores)";
function insertReferencia($tabla, $campos,&$sql){
    foreach($campos as $campo => $valor){
     $valores .= $campo . ",";
     $valores2 .= ":" . $campo . ",";
    }
    $valores = substr($valores,0,-1);
    $valores2 = substr($valores2,0,-1);
    $sql = str_replace("tabla",$tabla,$sql);
    $sql = str_replace("campos",$valores,$sql);
    $sql = str_replace("valores",$valores2,$sql);
 return $sql;
    }
    echo "<br>";
    echo insertReferencia($tabla,$campos,$sql);

$tabla = "alumnos";
$campos = array("id" => 1, "nombre" => "Juan", "apellidos" => "Martínez");
echo $campo[1];

function update($tabla, $campos){
    $contador = 0;
    foreach($campos as $campo => $valor){
        if($contador == 0){
            $valores4 = $campo . " = :" .$campo;
            $contador .= 1;
        }else{
        $valores3 .= $campo . "=:" . $campo . ",";    
        }
    
}
    $valores3 = substr($valores3,0,-1);
    return "UPDATE $tabla SET $valores3 WHERE $valores4"; 
}
echo "<br>";
echo update($tabla,$campos);
echo "<br>";

$operacion = function ($num1,$op,$num2){
    $oper = $num1 ." $op ". $num2;
    if($op == '+'){
        $total = $num1 + $num2;
    }else if($op == '-'){
        $total = $num1 - $num2;
    }else if($op == '*'){
        $total = $num1 * $num2;
    }else if($op == '/'){
        $total = $num1 / $num2;
    }else{
        echo("No has puesto bien el operando");
    }
    echo $oper . " = " . $total;
};

$operacion(1,'/',2);
?>
</body>
</html>