<DOCTYPE html>
<body>
<?php

$idioma = $_GET["idioma"] ?? "";

if($idioma == "en"){
    $saludo = "Hello, this page is now in English";
}else if($idioma == "ca"){
    $saludo = "Hola, aquesta pagina esta en valencia";
}else{
    $saludo = "Hola, esta pagina esta en español(Idioma por defecto)";
}

echo $saludo;
?>
</body>
</html>