<?php 
class Mahasiswa{
    var $nim;
    var $nama;
    var $prodi;
    var $thn_angkatan;
    var $ipk;
	
    function __construct($nim,$nama,$prodi,$thn_angkatan,$ipk){
    	$this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
        $this->thn_angkatan = $thn_angkatan;
        $this->ipk = $ipk;
       
    }
    function getPredikat(){
        if ($this->ipk < 2.0) return 'Cukup';
		elseif ($this->ipk >=2.0 && $this->ipk < 3.0) return 'Baik';
		elseif ($this->ipk >=3.0 && $this->ipk < 3.75) return 'Memuaskan';
		elseif ($this->ipk >=3.75 && $this->ipk <=4) return 'Cum Laude';
		else return 'Null';
	
    }
}


