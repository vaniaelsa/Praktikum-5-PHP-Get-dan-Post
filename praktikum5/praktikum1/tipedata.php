<html>
    <head>
        <title> Konversi Tipe </title>
    </head>
<body>
    <?php 
    //deklarasi variabel
    $a = 300.4;
    echo $a;
    echo "<br>";
    //konversi tipe data Double (bilangan real)
    echo "tipe Double : ", doubleval ($a), "<br>";
    //konversi tipe data Integer (bilangan bulat)
    echo "tipe Integer : ", intval ($a), "<br>";
    //konversi tipe data String (teks)
    echo "tipe String : ", strval($a);
    ?>
</body>
</html>