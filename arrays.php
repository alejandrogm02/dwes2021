<DOCTYPE html>
<body>
<?php
$nombres = array('raimon','cesar','alejandro');
echo "Numero de elementos que tiene el array = " . count($nombres);
$implode = implode(" ",$nombres);
echo "<br>";
echo $implode;
echo "<br>";
$asort = array('raimon','cesar','alejandro');
asort($asort);
foreach($asort as $nombre){
    echo "$nombre\n";
}
echo "<br>";

$reverse = array_reverse($nombres);

foreach($reverse as $nombre){
    echo "$nombre\n";
}
echo "<br>";

$search = array_search('alejandro', $nombres);
echo "El nombre alejandro esta en la posicion: " . $search;


$alumnos = array(
array(
    'id' => 1,
    'nombre' => 'alejandro',
    'apellido' => 'garcia',
    'edad' => 18,
    ),
array(
    'id' => 2,
    'nombre' => 'antonio',
    'apellido' => 'martinez',
    'edad' => 35,
    )
);

$s = '<table border="1">';
foreach ( $alumnos as $r ) {
        $s .= '<tr>';

        foreach ( $r as $v ) {
                $s .= '<td>'.$v.'</td>';
        }
        $s .= '</tr>';
}

$s .= '</table>';
echo $s;
echo "<br>";

$nombrealumnos = array_column($alumnos, 'nombre');
print_r($nombrealumnos);

$numeros = array(0,1,2,3,4,5,6,7,8,9);

$suma = array_sum($numeros);
echo "<br>";

echo "La suma del array numeros da: " . $suma;
?>
</body>
</html