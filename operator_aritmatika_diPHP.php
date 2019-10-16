<!--Operator Aritmatika adalah operator matematis yang terdiri dari operator penambahan, pengurangan,
 perkalian, pembagian, modulus, plus,dan minus.
    
Kebanyakan operator aritmatika dalam PHP bertipe binary yakni 
membutuhkan 2 operand, kecuali operator minus (-) dan plus (+) yang merupakan 
operator tipe unary (hanya membutuhkan 1 operand).-->
<?php
    $hasil1= -3;
    $hasil2=3+5;
    $hasil3=8-4.5;
    $hasil4=2*5;
    $hasil5=3+8/5-3;
    $hasil6=10 % 4;
    echo "\$hasil1:"; var_dump($hasil1); // $hasil1:int(-3) 
    echo "<br \>";
    
    echo "\$hasil2:"; var_dump($hasil2); // $hasil2:int(8) 
    echo "<br \>";
    echo "\$hasil3:"; var_dump($hasil3); // $hasil3:float(3.5) 
    echo "<br \>";
    echo "\$hasil4:"; var_dump($hasil4); // $hasil4:int(10) 
    echo "<br \>";
    echo "\$hasil5:"; var_dump($hasil5); // $hasil5:float(1.6) 
    echo "<br \>";
    echo "\$hasil6:"; var_dump($hasil6); // $hasil6:int(2) 
?>
<!--fungsi var_dump() untuk menampilkan hasil perhitungan, sehingga kita bisa melihat tipe data dari 
masing-masing variabel. -->