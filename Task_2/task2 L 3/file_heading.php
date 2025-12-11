<?php 
    $file = fopen('filedata.txt','w') or die ('File Tidak Ditemukan');
    $kata = 'ini adalah kata baru';
    fwrite($file, $kata);
    fclose($file);
?>