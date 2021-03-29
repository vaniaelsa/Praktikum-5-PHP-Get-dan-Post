<?php
//jika data pada inputan nama tidak diisi maka akan meredirect ke halaman kosong.php
if (empty($_POST['nama'])) {
    header("Location:kosong.php");
}
//jika diisi, data pada inputan nama akan tampil pada browser
else {
    echo "<center>Nama :".$_POST['nama']."</center><br>";
}
?>


