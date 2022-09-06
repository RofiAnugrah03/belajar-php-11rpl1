<?php
                // Materi Percabangn (IF ELSE)
                $nilai = 74;
                echo "Nilai Kamu Adalah $nilai <br>";
                echo "Maka Status Kamu = ";
            
                if ($nilai > 78) {
                    echo "Lulus Beneran";
                
                } else if ($nilai == 78) {
                    echo "Lulus KKM";
                } else {
                    echo "Tidak Lulus";
                }
                echo "<hr>";

                $nilai_web = 80;
                $nilai_pbo = 82;
                echo "Nilai Web Kamu = $nilai_web <br>";
                echo "Nilai Pbo Kamu = $nilai_pbo <br>";
            
                echo "Kelulusan Kamu = ";
                if ($nilai_web >= 80 AND $nilai_pbo >= 80) {
                    if ($nilai_web >= 80) {
                        echo "Lulus Mapel WEB";
                    }   
                    echo "<hr>";
                    if ($nilai_pbo >= 80) {
                        echo "Lulus Mapel PBO";
                        
                    }
            
                } else if ($nilai_web .= 80 OR $nilai_pbo .= 80) {
                    echo "Lulus Mapel Produktif";
                } else {
                    echo "Tidak Lulus Mapel Produktif";
                }
                echo "<hr>";
                // Materi Perulangan (while, do while, for)
                $i = 1;
                while ($i < 5) {
                    echo "Hello World ! Ke- $i <br>";
                    $i++; // Assigment +1
                }
                echo "<hr>";
                $j = 1;
                do{
                    echo $j;
                    $j++;
                }while ($j <= 5);
                echo "<hr>";
            
                $k = 1;
                for($k =1; $k <= 10; $k++) {
                    echo $k . "<br>";
                }
                echo "<hr>";
                for($x = 9; $x >= 1; $x--) {
                        for ($y = 1; $y <= $x; $y++) {
                            echo $y;
                        }
                        echo "<hr>";
                    }
                    echo"<hr>";
                    for ($z = 1; $z <= 10; $z++){
                        if ($z % 2 == 0) {
                            echo $z . "- Genap <br>";
                        } else {
                            echo $z . "- Ganjil <br>";
                        }
                    }