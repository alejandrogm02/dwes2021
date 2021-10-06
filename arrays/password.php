<DOCTYPE html>
<body>
<?php
function rand_Pass($upper = 1, $lower = 5, $numeric = 3, $other = 2){
    for($i = 1; $i <= $upper;$i++){
    $passwd .= chr(rand(65,90));
    }
    for($i = 1; $i <= $lower;$i++){
        $passwd .= chr(rand(97,122));
    }
    for ($i = 1; $i <= $numeric;$i++){
        $passwd .= chr(rand(49,57));
    }
    for ($i = 1; $i <= $other;$i++){
        $passwd .= chr(rand(33,47));
    }
    echo str_shuffle($passwd);
    
}
rand_Pass();
?>
</body>
</html>