<style> * (background-color: #000; color: #FFF;) </style>
<?php
$nama = "rizky catur";
echo $nama . "<br>";

$nama_array = array("fariz","eben","haikal","indra");
print_r($nama_array); echo "<br>";

echo $nama_array[0] . "<br>";
echo $nama_array[1] . "<br>";
echo $nama_array[2] . "<br>";
echo $nama_array[3] . "<br>";
echo "<hr>";
// Versi foreach
foreach ($nama_array AS $data_nama) {
    echo $data_nama . "<br>";
}

echo "<hr>";
//Versi
for ($i= 0; $i <= COUNT($nama_array); $i++) {
    echo $nama_array[0] . "<br>";
}

//Multiple Array
$kelas11rpl1 = array(
    array("rizky catur","L","memancing"),
    array("eben","L","Maen bola"),
    array("Fariz","L",array("Berenang","Maen game", "Basket") ),
    array("Volly", array("Maen Kelereng", array("Maen Layangan")) )
);

echo "<pre>"; print_r($kelas11rpl1); echo "</pre>";

echo $kelas11rpl1[1][0] . " ";
echo $kelas11rpl1[2][2][0] . " ";
echo $kelas11rpl1[3][1][1][0] . " ";
echo $kelas11rpl1[0][2] . " ";


