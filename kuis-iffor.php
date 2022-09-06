<?php
// Kelompok
// Nama : Rofi Anugrah Firdaus
// Kelas : XI RPL 1 
// Nama : Sandi Adi
// Kelas : XI RPL 1
$star=10;
for( $a=$star;$a>0;$a--){
    for($i=1; $i<=$a; $i++){
       echo "&nbsp";
}
for($a1=$star;$a1>=$a;$a1--){
  echo"*";
}
  echo"<br>";
}
?>
<hr>

 <?php
    $star=10;
     for($a=$star;$a>0;$a--){
          for($b=$star;$b>=$a;$b--){
               echo "*";
           }
        echo "<br>";
    }
?>
<hr>
<?php
        $star=10;
         for($a=$star;$a>0;$a--){
                for($i=1; $i<=$a; $i++){
                    echo " &nbsp";
                }
                for($a1=$star;$a1>=$a;$a1--){
                    echo"*";
                }
            echo"<br>";
       }
?>
<hr>
<?php
     $star=10;
      for($a=1; $a<=$star; $a++){
            for($b=1; $b<=$a; $b++){
                 echo "&nbsp";
       }
            for($c=$star; $c>=$a; $c-=1){
                  echo "*";
          }
          echo "<br>";
    }
?>
<hr>

<?php
    $star=10;
     for($a=1; $a<=$star; $a++){
          for($i=1; $i<=$a; $i++){
                echo " &nbsp";
           }
           for($c=$star; $c>=$a; $c-=1){
                  echo "*";
           }
          echo "<br>";
     }
?>
<hr>

<?php
  $star=10;
  for($a=1; $a<=$star; $a++){
        for($c=$star; $c>=$a; $c-=1){
               echo "*";
        }
         echo "<br>";
   }
?>
<hr>

<?php
    $star=10;
    for($a=1; $a<=$star; $a++){
          for($b=$star; $b>=$a; $b-=1){
                 echo "&nbsp";
          }
          for($c=1; $c<=$a; $c++){
                 echo "*";
          }
                echo "<br>";
                }
                for($a=1; $a<=$star; $a++){
                for($b=1; $b<=$a; $b++){
                     echo "&nbsp";
                }
                for($c=$star; $c>=$a; $c-=1){
                     echo "*";
                }
         echo "<br>";
   }
?>
<hr>
     <?php
    for ($i=1;$i<=5;$i++){
        for ($j=$i;$j>=1;$j--){
            echo $j;
        }
        echo "<br>";
    }
    
?>
<hr>

<?php

for ($i=0; $i < 5 ; $i++) {
for ($j=5; $j > $i; $j--) {
echo " ";
}
for ($k=0; $k < $i; $k++) {
echo "*";
}
for ($l=0; $l <= $i ; $l++) {
echo "*";
}
echo "
";
}

?>