<?php
class NilaiMahasiswa {
	var $matakuliah;
	var $nilai;
	var $nim;

	function __construct($matakuliah, $nilai, $nim){
		//LENGKAPI
		$this->matakuliah = $matakuliah;
		$this->nilai = $nilai;
		$this->nim = $nim;
	}

	function grade() {
		 //LENGKAPI
		 if ($this->nilai >=85) return 'A';
		 elseif ($this->nilai >=70) return 'B';
		 elseif ($this->nilai >=69) return 'C';
		 elseif ($this->nilai >=55) return 'D';
		 else return 'E';
    }     

    function hasil() {
    //LENGKAPI
    //cara 1 - return:
    if($this->nilai >=56) return 'LULUS';
    else return 'GAGAL';   
    }  
}
?>



