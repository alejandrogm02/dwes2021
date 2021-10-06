<DOCTYPE html>
<body>
<?php
$edades=array("Juan"=>"31","María"=>"41","Andrés"=>"39","Berta"=>"40");
    
ksort($edades);
foreach($edades as $nombre => $edad){
    echo "$nombre\n";
}
$edades=array("Juan"=>"31","María"=>"41","Andrés"=>"39","Berta"=>"40");

echo '<br>';
asort($edades);
foreach($edades as $nombre => $edad){
    echo "$edad\n";
}
$edades=array("Juan"=>"31","María"=>"41","Andrés"=>"39","Berta"=>"40");

echo '<br>';
krsort($edades);
foreach($edades as $nombre => $edad){
    echo "$nombre\n";
}
$edades=array("Juan"=>"31","María"=>"41","Andrés"=>"39","Berta"=>"40");

echo '<br>';
arsort($edades);
foreach($edades as $nombre => $edad){
    echo "$edad\n";
}
?>
</body>
</html>