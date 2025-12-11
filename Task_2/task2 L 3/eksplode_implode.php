<?php 
    $kata = 'Hallo Dunia Selamat Siang';
    $exp = explode('',$kata);
    echo $exp[0],$exp[1];

    echo "<br>";
    echo implode('**',$exp)
?>