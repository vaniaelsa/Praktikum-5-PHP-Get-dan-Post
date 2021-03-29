<!-- merupakan file pengeksekusi file sumber -->
<?php
include "inc.php";
//menampilkan nilai varibel angka
echo $angka;
echo "<br>";
//pengecekan kondisi nilai variabel dengan if else
if ($angka==100){
    //jika nilai variabel angka = 100, maka memuaskan
    echo "Memuaskan";
}
    //jika nilai variabel angka = 85-99, maka sangat baik
elseif ($angka<100 && $angka>=85) {
    echo "Sangat Baik";
}
    //jika nilai variabel angka = 70-84, maka baik
elseif ($angka<85 && $angka>=70) {
    echo "Baik";
}
    //jika nilai variabel angka = 55-69, maka cukup
elseif ($angka<70 && $angka>=55) {
    echo "Cukup";
}
    //jika nilai variabel angka = 0-54, maka kurang
elseif ($angka<55 && $angka>=0) {
    echo "Kurang";
}
?>