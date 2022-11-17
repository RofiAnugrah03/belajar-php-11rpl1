<?php
    require_once __DIR__. '/vendor/autoload.php';

    $mpdf = new  \Mpdf\Mpdf();
    include('./input-config.php');
    $no = 1;
      $tabledata = "";
      $data = mysqli_query($mysqli, " SELECT * FROM transaksi ");
      while($row = mysqli_fetch_array($data)){

        $totalharga_beli= 
            $row["qty"] *
            $row["harga_beli"];

        $totalharga_jual= 
            $row["qty"] *
            $row["harga_jual"];

        $laba= $totalharga_jual - $totalharga_beli;
        
        $persentase=   (
            $laba /
            $totalharga_beli) * 100;

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
                        <td>$persentase %</td>
                  </tr>
            ";
            $no++;
      } 
      $waktu_cetak = date('d M Y - H:i:s');
      $table = "
            <h1>Laporan Data kwu</h1>
            <h6>Waktu Cetak : $waktu_cetak</h6>
            <table width='100%' cellpadding=5 border=1 cellspacing=0>
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
                  </tr>
                  $tabledata
            </table>
      ";

    $mpdf->WriteHTML("$table");
    $mpdf->Output();

