<?php 
    $motor = array('supra','jupiter','mio','vario');

    print_r($motor);

    echo $motor[2];

    $jumlah = count($motor);
    echo "<br>";
    for ($i=0; $i < $jumlah; $i++){
        echo $motor[$i]."<br>";
    }

    $data = array(
        'aku' => 24,
        'kamu' =>27
    );
    echo "Kamu berumur" .$data['kamu'];
    echo "<br>";

    foreach ($data as $subject => $age) {
        echo $subject."berumur".$age. "";
    }
?>