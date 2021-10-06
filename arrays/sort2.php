<DOCTYPE html>
<body>
<?php

$temperaturas = array(20,21,22,18,25,24,19,22,23,24,25,23,21,28,26,27,25,19,20,21,22,18,25,24,19,22,23,24);
echo "Temperaturas del mes: ";
foreach($temperaturas as $temperatura){
    echo "$temperatura\n";
}
echo "<br>"; 

$total = 0;
foreach($temperaturas as $temperatura)
{
    $total += $temperatura;
}
echo "La media de las temperaturas es de: " . $total / count($temperaturas);
sort($temperaturas);
    echo "<br>";
    echo "Las cinco temperaturas mas bajas son: ";
    echo implode(", ", array_slice($temperaturas, 0, 5));
    echo "<br>"; 

    echo "Las cinco temperaturas mas altas son: ";
    echo implode(", ", array_slice($temperaturas, -5, 5));
    echo "<br>";
?>
</body>
</html>
