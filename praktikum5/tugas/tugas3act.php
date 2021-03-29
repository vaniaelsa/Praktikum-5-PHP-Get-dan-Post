<html>
    <head>
        <title> TUGAS 3 BIODATA </title>
        <!-- untuk membuat tampilan halaman (styling)-->
        <style type="text/css">
            BODY {background-image: url("background.jpg"); 
                  background-size: auto;
                 }
            H1   {text-align: center;
                  font-family: tahoma;
                  color:black;
                  background-color: lightcoral;
                 }
        </style>
    </head>
<body>
    <!-- header 1 -->
    <h1>FORMULIR BIODATA </h1>
    <?php
    //kondisi jika nama tidak diisi
    if (empty($_POST['nama'])) {
        //untuk menampilkan teks
        echo "<center> Namanya diisi dulu yuk ! </center>";
    } 
    //kondisi jika jenis kelamin tidak diisi
    elseif (empty($_POST['jk'])) {
        //untuk menampilkan teks
        echo "<center> Data Jenis Kelamin diisi dulu yuk ! </center>";
    } 
    //kondisi jika agama tidak diisi
    elseif ($_POST['agama']=="kosong") {
        //untuk menampilkan teks
        echo "<center> Data Agama diisi dulu yuk !";
    } 
    //kondisi jika alamat tidak diisi
    elseif (empty($_POST['alamat'])) {
        //untuk menampilkan teks
        echo "<center> Data Alamat diisi dulu yuk !";
    } 
    //kondisi jika universitas tidak diisi
    elseif (empty($_POST['univ'])) {
        //untuk menampilkan teks
        echo "<center> Data asal Universitas diisi dulu yuk !";
    } 
    //kondisi jika email tidak diisi
    elseif (empty($_POST['email'])) {
        //untuk menampilkan teks
        echo "<center> Data Email diisi dulu yuk!";
    }  
    //jika diisi semua, data pada inputan nama akan tampil pada browser
    else { 
    echo "<center>Nama Lengkap : ".$_POST["nama"]."<br>";
    echo "<center>Jenis Kelamin : ".$_POST["jk"]."<br>";
    echo "<center>Agama : ".$_POST["agama"]."<br>";
    echo "<center>Alamat : ".$_POST["alamat"]."<br>";
    echo "<center>Universitas : ".$_POST["univ"]."<br>";
    echo "<center>Email : ".$_POST["email"]."<br>";}
    ?>
</body>
    </html>
    