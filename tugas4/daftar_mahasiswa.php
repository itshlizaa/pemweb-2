<?php
require_once 'class_mahasiswa.php';
//PANGGIL DATA NAMA DENGAN ARRAY DAN TABEL
$ns1 = new Mahasiswa(111,'Faiz Fikri','TI',2019,4.0);
$ns2 = new Mahasiswa(222,'Rosalie Naurah','SI',2020,3.0);
$ns3 = new Mahasiswa(333,'Badu','BD',2020,2.7);
$ns4 = new Mahasiswa(444,'Rio Dumatubun','TI',2021,1.7);
$ns5 = new Mahasiswa(555,'Budi Raharjo','TE',2018,5.0);
$ar_siswa = [$ns1,$ns2,$ns3,$ns4,$ns5];
?>

<table border="1" width="100%">
<thead>
<tr>
<th>No</th><th>Nim</th><th>Nama</th><th>Prodi</th><th>Tahun Angkatan</th><th>IPK</th><th>Predikat</th>
</tr>
</thead>
<tbody>

<?php 
  $nomor = 1;
  foreach($ar_siswa as $sis){
    echo '<tr><td>'.$nomor.'</td><td>'.$sis->nim.'</td>';
    echo '<td>'.$sis->nama.'</td><td>'.$sis->prodi.'</td><td>'.$sis->thn_angkatan.'</td><td>'.$sis->ipk.'</td><td>'.$sis->getPredikat().'</td></tr>';
    $nomor++;
  }
?>

</tbody>
</table>
</table>
