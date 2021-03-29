<html>
    <head>
        <title>Pemrograman PHP dengan Array </title>
    </head>
<body>
    <?php
    //penulisan array
    $nama[] = " Elsa Vania ";
    $nama[] = " Atmaja Widi ";
    $nama[] = " Azzahra Putri ";
    //menampilkan indeks array ke 1,2,dan 0
    echo $nama[1] . $nama[2] . $nama[0];
    echo "<br>";
    //menghitung jumlah elemen array 
    $jum_array = count($nama);
    echo "Jumlah Elemen Array = ". $jum_array;
    ?>
</body>
</html>