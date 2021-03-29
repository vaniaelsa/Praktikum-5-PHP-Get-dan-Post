<?php
//jika data pada inputan nama tidak diisi maka akan meredirect ke halaman tugas2namakosong.php
if (empty($_POST['nama'])) {
    header("Location:tugas2namakosong.php");
}
//jika data pada inputan nama tidak diisi maka akan meredirect ke halaman tugas2emailkosong.php
elseif (empty($_POST['email'])) {
    header("Location:tugas2emailkosong.php");
}
//jika diisi, data pada inputan nama akan tampil pada browser
else {
    echo "<center>Nama :".$_POST['nama']."</center><br>";
    echo "<center>Email :".$_POST['email']."</center><br>";
    date_default_timezone_set('Asia/Jakarta');
    echo "<center> Waktu Log In : </center>";
    echo "<center> Hari : " .date("l")."<br> Tanggal : ".date("d-F-Y")."<br> Pukul : ".date("g:i:s a"),"</center>";
}
?>