<DOCTYPE html>
<body>
<?php
$color = array('blanco'=>'blanco.html', 'verde' => 'verde.html', 'rojo' => 'rojo.html');

echo '<ul>';

foreach($color as $c => $v){
    echo "<li><a href='" . $v . "'>" . $c . "</a></li>";
}
?>
</body>
</html