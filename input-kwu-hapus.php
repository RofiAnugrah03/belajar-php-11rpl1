<?php
        if ( isset($_GET["kode_barang"]) ){
            $kode_barang = $_GET["kode_barang"];
            
            $query = "
                DELETE FROM transaksi
                WHERE kode_barang = '$kode_barang';
                ";

            include ('./input-config.php');
            $delete = mysqli_query($mysqli, $query);

                if ($delete){
                    echo "
                    <script>
                    alert('data berhasil di hapus');
                    window.location= 'input-kwu.php';
                    </script>
                    ";
                }else{
                    echo "
                    <script>
                    alert('yakinn?');
                    window.location= 'input-kwu.php';
                    </script>
                    ";
        }

        }
    ?>