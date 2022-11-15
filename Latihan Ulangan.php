<?php
if ( isset($_GET["nis"])) {
    $nis = $_GET["nis"];
    $check_nis = "SELECT * FROM datadiri WHERE nis = '$nis'; ";
    include('./input-config.php');
    $query = mysqli_query($mysqli, $check_nis);
    $row = mysqli_fetch_array($query);

}

?>

<h1>Edit Data</h1>
<form action="input-datadiri-tambah.php" method="POST">
    <label for="nis">Nomor Induk Siswa :</label>
    <input value="<?php echo $row["nis"]; ?> " readonly type="number" name="nis" placeholder="Ex.12001142"><br>

    <label for="nama">Nama lengkap :</label>
    <input value="<?php echo $row["nama"]; ?> " readonly type="text" name="nama" placeholder="Ex.Firdaus"><br>

    <label for="tanggal_lahir">Tanggal Lahir :</label>
    <input value="<?php echo $row["tanggal_lahir"]; ?> " readonly type="date" name="tanggal_lahir"><br>

    <label for="Kehadiran">Kehadiran :</label>
    <input value="<?php echo $row["kehadiran"]; ?> " readonly type="number" name="Kehadiran" placeholder="Ex. 80"><br>

    <label for="Tugas">Tugas :</label>
    <input value="<?php echo $row["Tugas"]; ?> " readonly type="number" name="Tugas" placeholder="Ex. 82%"><br>

    <label for="Uts">Uts :</label>
    <input value="<?php echo $row["Uts"]; ?> " readonly type="number" name="Uts" placeholder="Ex. 80% "><br>

    <label for="Uas">Uas :</label>
    <input value="<?php echo $row["Uas"]; ?> " readonly type="number" name="Uas" placeholder="Ex. 82%"><br>

    <input type="submit" name="simpan" value="simpan data"><br>
    <a href="input-datadiri.php">Kembali</a>
</form>
<?php
if ( isset($_POST["simpan"])) {

}
