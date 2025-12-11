<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
// TANGGAL
// 'd' = Hari
// 'j' = Hari tanpa nol
// 'D' = Hari dalam seminggu (3 huruf)
// 'l' = Hari penuh dalam seminggu
// 'm' = Bulan sebagai angka dengan nol
// 'n' = Bulan sebagai angka tanpa nol
// 'M' = Bulan (3 huruf)
// 'F' = Bulan penuh
// 'y' = Tahun dua digit
// 'Y' = Tahun penuh

//echo date('d/m/Y');

//Waktu
// 'g' = Jam dalam format 12 jam tanpa angka nol
// 'h' = Jam dalam format 12 jam dengan angka nol
// 'G' = Jam dalam format 24 jam tanpa angka nol
// 'H' = Jam dalam format 24 jam dengan angka nol
// 'a' = am/pm dalam huruf kecil
// 'A' = am/pm dalam huruf besar
// 'i' = menit tanpa angka nol di depan
// 's' = detik tanpa angka nol di depan

echo date('H:i:s a');

//Set timezone
date_default_timezone_set('Europe/Amsterdam');


//String to time
$time = strtotime("4:00pm December 03 2019");
echo "<br>";
echo $time;

//is the timestamp is the value represented as seconds calculated, since UNIX Epoch, January 1, 1970, and also called as UNIX timestamp.

echo "<br>";
echo date('m/d/Y H:i a', $time);

?>
</body>
</html>
