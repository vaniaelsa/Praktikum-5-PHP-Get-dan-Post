<?php
//menampilkan nama,email, jam, hari, dan tanggal yang diinputkan dalam form
echo "<center> Nama :" .$_POST['nama']."</center><br>";
echo "<center> Email :" .$_POST['email']."</center><br>";
date_default_timezone_set('Asia/Jakarta');
echo "<center> Waktu Log In : </center>";
echo "<center> Hari : " .date("l")."<br> Tanggal : ".date("d-F-Y")."<br> Pukul : ".date("g:i:s a"),"</center>";
?>