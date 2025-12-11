<?php 
    echo "Menggunakan While \n";
    $kata = 'Hallo';
    $count = 0;
    while ($count <= 10) {
        echo $kata."\n";
        $count++;
    }

    echo "Menggunakan for \n";

    for ($i=1; $i <= 10; $i++){
        echo $kata."\n";
    }

?>