<form action="post.php" method="POST">
    <input type="text" name="namalengkap" placeholder="EX. Indra E1" /> <br>
    <input type="text" name="kelas" placeholder="EX. 11 RPL 1" /> <br>
    <input type="number" name="nis" placeholder="EX. 123456789" />

    <input type="submit" name="simpan" value="Simpan Data" />
</form>
<?php
      if( isset($_POST["simpan"]) ){
        echo "<hr>";
        $namalengkap = $_POST ["namalengkap"];
        $kelas = $_POST ["kelas"];
        $nis = $_POST["nis"];
       
        echo "Namalengkap : " . $namalengkap . "<br>";
        echo "Kelas :" . $kelas . "<br>";
        echo "Nis :" . $nis;
      } 
?>