<?php
$productos = ["1" => "Producto 1", "2" => "Producto 2", "3" => "Producto 3"];

$csv = "";
foreach ($productos as $id => $value) {
    $csv = $id . ":" . $value . "\n";
    echo $csv;
}
header('Content-Type: application/csv');
header('Content-Disposition: attachment; filename="productos.csv');
  
?>
