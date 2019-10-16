<!--Untuk menangkap data yang dikirim dari file formget.html kita menggunakan variabel global $_POST dan 
nilai form tidak akan terlihat di dalam alamat URL.-->
<?php

 /* kode echo untuk menampilkannya */
echo $_POST['nama'];
 
echo "<br />";
 
echo $_POST['email'];
?>


