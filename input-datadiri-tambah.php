<ai :</label>
    <input type="number" name="nilai" placeholder="Ex. 80.56"><br>

    <input type="submit" name="simpan" value="simpan data"><br>
    <a href="input-datadiri.php">Kembali</a>
</form>
<?php
<h1> Tambah Data</h1>
<form action="input-datadiri-tambah.php" method="POST">
    <label for="nis">Nomor Induk Siswa :</label>
    <input type="number" name="nis" placeholder="Ex.12001142"><br>

    <label for="nama">Nama lengkap :</label>
    <input type="text" name="nama" placeholder="Ex.Firdaus"><br>

    <label for="tanggal_lahir">Tanggal Lahir :</label>
    <input type="date" name="tanggal_lahir"><br>

    <label for="nilai">Nilai
    if( isset($_POST["simpan"])){
        $nis = $_POST["nis"];
        $nama = $_POST["nama"];
        $tanggal_lahir = $_POST["tanggal_lahir"];
        $nilai = $_POST["nilai"];

        //CREATE - Menambahkan Data ke Database
        $query = "
        INSERT INTO datadiri VALUES
        ('$nis','$nama','$tanggal_lahir','$nilai');
    ";
        include ('./input-config.php');
        $insert = mysqli_query($mysqli, $query);

        if($insert){
            echo"
            <script>
            alert('Data berhasil ditambahkan');
            window.location='input-datadiri.php';
            </script>
            ;"
        }
    }
?>