<?php
     include('./input-config.php');
     if ( $_SESSION ["login"] != TRUE){
           header ('location:login.php');
     }
     echo "<div class='container'>";
     echo "<strong>Selamat Datang,</strong> " . $_SESSION["username"] . "<br>";
     echo "<strong>Anda sebagai </strong>: " . $_SESSION["role"];
     echo "<hr>";
     echo "<a class='btn btn-sm btn-secondary' href='logout.php'>Logout</a>";
     echo "<hr>";
     echo "<a class='btn btn-sm btn-primary' href='input-kwu-tambah.php'>Tambah Data</a>";
     echo " - <a class='btn btn-sm btn-warning' href='input-kwu-pdf.php'>Cetak PDF</a>";
     echo "<hr>";
     $no = 1;
     $tabledata="";
     $data = mysqli_query($mysqli," SELECT * FROM transaksi ");
     while($row = mysqli_fetch_array($data)){
        
        $totalharga_beli= 
            $row["qty"] *
            $row["harga_beli"];

        $totalharga_jual= 
            $row["qty"] *
            $row["harga_jual"];

        $laba= $totalharga_jual - $totalharga_beli;
        
        $persentase=   (
            $laba *
            $totalharga_beli) * 100 ;
        
        $tabledata .= "
            <tr>
                <td>".$row["kode_barang"]."</td>
                <td>".$row["tanggal"]."</td>
                <td>".$row["pembeli"]."</td>
                <td>".$row["nama_barang"]."</td>
                <td>".$row["qty"]."</td>
                <td>".$row["harga_beli"]."</td>
                <td>".$row["harga_jual"]."</td>
                <td>$totalharga_beli</td>
                <td>$totalharga_jual</td>
                <td>$laba</td>
                <td>$persentase%</td>
                <td>
                    <a class='btn btn-sm btn-success' href='input-kwu-edit.php?kode_barang=".$row["kode_barang"]."'>Edit</a>
                    &nbsp;-&nbsp;
                    <a class='btn btn-sm btn-danger' href='input-kwu-hapus.php?kode_barang=".$row["kode_barang"]."
                    onclick='return confirm(\"yakin ?\");'>Hapus</a>
                </td>
            <tr>
            ";
            $no++;
     }

     echo "
     <table class='table table-dark table-bordered table-striped'
            <tr>
                <th>Kode Barang</th>
                <th>Tanggal</th>
                <th>Pembeli</th>
                <th>Nama Barang</th>
                <th>QTY</th>
                <th>Harga Beli</th>
                <th>Harga Jual</th>
                <th>Total Harga Beli</th>
                <th>Total Harga Jual</th>
                <th>Laba</th>
                <th>Persentase Laba</th>
                <th>Aksi</th>
                </tr>
            $tabledata
        </table>
     ";
?>