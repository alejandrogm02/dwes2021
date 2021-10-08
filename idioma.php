<?php
    //Crea aquí tu script para seleccionar el idioma

    $language = $_GET["setLanguage"] ?? $_COOKIE["language"] ?? "es"; 
    //Fin script
    if($language == "en"){
        $content = "This page is in English";
        $title = "Change the language of the page";
        setcookie("language", $language);
    }else if($language == "es"){
        $content = "Esta página está en Castellano (Idioma por defecto)";
        $title = "Cambiar el idioma de la página";
        setcookie("language", $language);
    }
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <meta name="author" content="Alejandro García">
</head>
<body>
    <ul><?= $title ?>
        <li><a href='idioma.php?setLanguage=es'>Español</a></li>
        <li><a href='idioma.php?setLanguage=en'>Inglés</a></li>
    </ul>
    <?= $content ?>
</body>
</html>
