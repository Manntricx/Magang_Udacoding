<?php 
    function pertambahan($a,$b){
        $hasil = $a + $b;
        return $hasil;
    }

    function tampilkanKata(){
        $kata = 'Hallo Dunia';
        return $kata;
    }

    function loop($counter){
        $kata = 'Hallo Dunia'."<br>";
        for ($i=0; $i <= $counter ; $i++){
            echo $kata;
        }
    }

    echo pertambahan(10,20);
    echo tampilkanKata();
    loop(10);
?>