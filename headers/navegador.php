<DOCTYPE html>
<body>
<?php
 $browser  = $_SERVER['HTTP_USER_AGENT'];

 if (strpos($browser,'Mozilla') !== false) {
     echo 'Bienvenido a mi pagina';
 } else {
       echo 'No estas usando Firefox';
     }

?>
</body>
</html>