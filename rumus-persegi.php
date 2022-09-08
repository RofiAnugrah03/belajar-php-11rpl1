<form action="" method="POST">
    <h1> Hitung Luas dan Keliling Persegi Panjang </h1>
    <p>Panjang :</p>
    <input type="number" name="Panjang" placeholder="Ex. 5" /><br>
    <p>Lebar :</p>
    <input type="number" name="Lebar" placeholder="Ex. 5" /><br>
    <br>
    <input type="submit" name="proses" value="Hitung Luas & Keliling" />
</form>

<?php 
    if (isset($_POST["proses"])){
        echo "<hr>"; 
        $panjang = $_POST["Panjang"];
        $lebar = $_POST["Lebar"];
        $luas = $panjang * $lebar;
        $keliling = $panjang + $lebar + $panjang + $lebar;

        echo "Panjang : $panjang <br>";
        echo "Lebar : $lebar <br>";
        echo "Luas Persegi Panjang : $luas <br>";
        echo "Keliling Persegi Panjang : $keliling <br>";
    }
?>