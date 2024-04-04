<?php
class nilaisiswa
{
    public $nama;
    public $nilai;
    public $kuliah='STTNF';
    public function getHasil()
    {   
        if ($this->nilai > 55) return 'Lulus';
        else return 'Gak Lulus';
    }
}
        //this-> adlh menunjuk ke variable
        //self:: ke constructor
        //__constructoradlh sebagai penghubung

//objek
$ns1 = new nilaisiswa();
$ns1->nama = 'Liza';
$ns1->nilai = 70;

echo $ns1->nama;
echo "<br>";
echo $ns1->nilai;
echo "<br>";
echo $ns1->kuliah;
echo "<br>";
echo $ns1->getHasil();
?>
