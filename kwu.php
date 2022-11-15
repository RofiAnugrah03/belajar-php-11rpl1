<?php
     include('./config.php');
     echo "<a href='tambah.php'>Tambah Data</a>";
     echo "<hr>";
     $no = 1;
     $tabledata="";
     $data = mysqli_query($mysqli," SELECT * FROM transaksi ");
     while($row = mysqli_fetch_array($data)){
        
        $totalharga_beli= 
            $row["qty"] *
            $row["hargabeli"];

        $totalharga_jual= 
            $row["qty"] *
            $row["hargajual"];

        $laba= $totalharga_jual - $totalharga_beli;
        
        $persentase=   (
            $laba /
            $totalharga_beli) * 100;
        
        $tabledata .= "
            <tr>
                <td>".$row["kodebarang"]."</td>
                <td>".$row["tanggal"]."</td>
                <td>".$row["pembeli"]."</td>
                <td>".$row["namabarang"]."</td>
                <td>".$row["qty"]."</td>
                <td>".$row["hargabeli"]."</td>
                <td>".$row["hargajual"]."</td>
                <td>$totalharga_beli</td>
                <td>$totalharga_jual</td>
                <td>$laba</td>
                <td>$persentase %</td>
                <td>
                    <a href='edit.php?kodebarang=".$row["kodebarang"]."'>Edit</a>
                    &nbsp;-&nbsp;
                    <a href='hapus.php?kodebarang=".$row["kodebarang"]."' 
                              onclick='return confirm(\"certo che vuoi eliminare ?\");'>Hapus</a>
                </td>
            <tr>
            ";
            $no++;
     }

     echo "
        <table cellpadding=5 border=1 cellspacing=0>
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