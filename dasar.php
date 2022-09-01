<?php
    // variable
    // $1nama; Contoh salah
    // $#nama; Contoh salah
    // nama; Contoh salah
    $nama= "arzenna";
    $usia= 16;
    echo "nama saya $nama <br>";
    echo "Usia saya $usia tahun <br>";
    // operator (Integer, Float, String)
    // (Boolean, Array)
    $namaLengkap = "arzenna 90"; // String
    $umur = 16; // INteger
    $nilai = 80; // Float

    $jomblo = TRUE; // Boolean (TRUE/FALSE)

    // Array String
      $namarpl11 = Array("alya","dwi","eben");

      echo "nama Lengkap : $namaLengkap <br>";
      echo "Umur : $umur <br>";
      echo "nilai : $nilai <br>";
      echo "Jomblo : $Jomblo <br>";
      echo "<hr>";
      echo "Array 0 : $namarpl11[0] <br>";// Alya
      echo "Array 2 : $namarpl11[2] <br>";// Renaldi
      
      //ARITMATIKA(+ - / * %)
      echo "angka1 : ". $angka1 = 10; echo "<br>";
      echo "angka2 : ". $angka2 = 5; echo "<hr>";

      echo "tambah : ". $tambah = $angka1 + $angka2 . "<br>";
      echo "kurang : ". $kurang = $angka1 - $angka2 . "<br>";
      echo "bagi : ". $bagi = $angka1 / $angka2 . "<br>";
      echo "kali : ". $kali = $angka1 * $angka2 . "<br>";
      echo "sisabagi : ". $sisabagi = $angka1 % $angka2 . "<br>";
      echo "<hr>";

      //OPRATOR PERBANDINGAN(>,<,!=,==,===)
      //RETURN TRUE(1),FALSE(NULL)
      $a=10;
      $b=5;
      $c="10";

      echo "== :";echo $a == $b;echo "<br>";
      echo "> :";echo $a > $b;echo "<br>";
      echo "< :";echo $a < $b;echo "<br>";
      echo "!= :";echo $a != $b;echo "<br>";
      echo "=== :";echo $a === $b;echo "<br>";

      // OPRATOT LOGIKA (AND,OR,&&,||)
      // IF
      $x = 10;
      $y = 20;

      if($x == 10 AND $y == 20){ echo "Terpenuhi 2 variabel <br>";}
      if($x == 10 OR $y == 10){ echo "salah satu variabel terpenuhi <br>";}



   ?>