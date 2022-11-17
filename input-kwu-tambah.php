<h1>Tambah Data</h1>
<form action="input-kwu-tambah.php" method="POST"> 
    <label for="kode_barang">Kode Barang :</label><br>
    <input class="form-control" type="text" name="kode_barang" placeholder="Ex. K001"/><br>

    <label for="tanggal">Tanggal :</label><br>
    <input class="form-control" type="date" name="tanggal" placeholder="Ex. 22-06-2005"/><br>

    <label for="pembeli">Pembeli :</label><br>
    <input class="form-control" type="text" name="pembeli" placeholder="Ex. Rofi AF"/> <br>

    <label for="nama_barang" >Nama Barang :</label><br>
    <input class="form-control" type="text" name= "nama_barang" placeholder="Ex. Nama barang"/><br><br>

    <label for="qty" >QTY :</label><br>
    <input class="form-control" type="number" name= "qty" placeholder="Ex. 2"/><br><br>
     
    <label for="harga_beli" >Harga Beli :</label><br>
    <input class="form-control" type="number" name= "harga_beli" placeholder="Ex. 2000"/><br><br>

    
    <label for="harga-jual" >Harga Jual:</label><br>
    <input class="form-control" type="number" name= "harga_jual" placeholder="Ex. 2500"/><br><br>
    

    <input class="btn btn-sm btn-success" type="submit" name= "simpan" value="Simpan Data"/>
    <a class="btn btn-sm btn-secondary" href="input-kwu.php"> Kembali </a>
</form>

<?php
    include ('./input-config.php');
    if( $_SESSION["login"] !=TRUE) {
          header('location:login.php');
    }
    if( $_SESSION["role"] !="admin") {
          echo "
                <script>
                      alert('Akses tidak diberikan, kamu bukan admin');
                      window.location='input-kwu-tambah.php';
                </script>
                ";
    }
    
    if( isset($_POST["simpan"])){
        $kode_barang= $_POST["kode_barang"];
        $pembeli= $_POST["pembeli"];
        $tanggal= $_POST["tanggal"];
        $nama_barang= $_POST["nama_barang"];
        $qty= $_POST["qty"];
        $harga_beli= $_POST["harga_beli"];
        $harga_jual= $_POST["harga_jual"];

        //CREATE - Menambahkan Data ke Database
        $query = "
        INSERT INTO transaksi VALUES
        ('$kode_barang', '$tanggal', '$pembeli', '$nama_barang','$qty','$harga_beli','$harga_jual');
        ";

      
        include ('./input-config.php');
        $insert = mysqli_query($mysqli, $query);

        if ($insert){
            echo "
            <script>
            alert(' berhasil deckk');
            window.location= 'input-kwu.php';
            </script>
            ";
      }
      }
    
?>