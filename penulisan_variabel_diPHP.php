<!--Aturan Penulisan Variabel di PHP:
- Harus diawali dengan tanda $
- Setelah tanda $ harus diawali huruf atau tanda underscore(_) kemudian dapat diikuti dengan huruf 
    atau angka atau tanda underscore (_)
- Pada nama variabel tidak boleh ada karakter khusus seperti (*&^%#@! dll. -->

<!--penulisan variabel-->
<?php //penulisan variabel yang benar
    $i;
    
    $nama;
    
    $Umur;
    
    $_lokasi_memori;
    
    $ANGKA_MAKSIMUM;
?>
<?php //penulisan variabel yang salah
 
 $4ever; //variabel tidak boleh diawali dengan angka
  
 $_salah satu; //varibel tidak boleh mengandung spasi
  
 $nama*^; //variabel tidak boleh mengandung karakter khusus: 
 * dan ^
 ?>
<!--penulisan variabel tutup-->


<!--Variabel dalam PHP bersifat case sensitif -->
<?php /*membedakan variabel yang ditulis dengan huruf besar dan kecil (bersifat 
        case sensitif), sehingga $belajar tidak sama dengan $Belajar dan $BELAJAR, 
        ketiganya akan dianggap sebagai variabel yang berbeda.*/

    $andi="Andi";
    echo $Andi; // Notice: Undefined variable: Andi
?>
<!--Variabel dalam PHP bersifat case sensitif tutup-->


<!--Cara Memberikan Nilai kepada Variabel-->
<?php /*untuk memberikan nilai kepada sebuah variabel, PHP menggunakan tanda sama dengan (=). Operator 
        ‘sama dengan‘ ini dikenal dengan istilah Assignment Operators. */
    $nama = "andi";
    
    $umur = “b17”;
    
    $pesan = "Saya sedang belajar PHP di jti.polije.com";
?>
<!--Cara Memberikan Nilai kepada Variabel tutup-->



<!--Variabel dalam PHP tidak memerlukan deklarasi terlebih dahulu-->
<?php /*di dalam PHP, variabel tidak perlu deklarasikan terlebih dahulu. Anda 
        bebas membuat variabel baru di tengah-tengah kode program, dan langsung 
        menggunakannya tanpa di deklarasikan terlebih dahulu.*/
 
    $andi="Andi";
    
    echo $andi;
?>
<!--Variabel dalam PHP tidak memerlukan deklarasi terlebih dahulu tutup-->



<!--Variabel dalam PHP tidak bertipe-->
<?php //Di dalam PHP, setiap variabel bebas diisi dengan nilai apa saja, deklarasinya bebas tnpa tipe data.
 
    $a = 17; // nilai variabel a berisi angka (integer)
    
    $a = "aku"; // nilai variabel a diubah menjadi kata 
    (string)
    
    $a = 17.42; // nilai variabel a diubah menjadi desimal 
    (float)
?>
<!--Variabel dalam PHP tidak bertipe tutup-->



<!--Cara Menampilkan Nilai Variabel-->
<?php /*Untuk menampilkan nilai atau isi dari variabel, kita tinggal menampilkannya 
        dengan perintah echo atau print*/
 
    $a='Saya Sedang belajar PHP';
    
    $b=5;
    
    print $a; 
    
    echo $b;
?>
<!--Cara Menampilkan Nilai Variabel tutup-->