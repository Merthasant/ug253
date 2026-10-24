<?php
  class Pegawai {
    public $nama;
    public $gaji;

    public function __construct($nama,$gaji) {
      $this->nama = $nama;
      $this->gaji = $gaji;
    }

    public function tampilkanInfo() {
      echo "Pegawai dengan nama $this->nama dengan gaji $this->gaji <br>";
    }
  }

  class Manager extends Pegawai {
    public $tunjangan;
    
    public function __construct($nama,$gaji,$tunjangan){
      parent::__construct($nama,$gaji);
      $this->tunjangan = $tunjangan;
    }
    
    
    public function tampilkanInfo() {
      echo "Pegawai dengan nama $this->nama dengan gaji $this->gaji tunjangan $this->tunjangan <br>";
      }
      
      }
      
  class Staf extends Pegawai {
    public $lembur;


    public function __construct($nama,$gaji,$lembur){
      parent::__construct($nama,$gaji);
      $this->lembur = $lembur;
    }

    public function tampilkanInfo(){
      echo "Pegawai dengan nama $this->nama dengan gaji $this->gaji lembur $this->lembur <br>";
    }
  }

  $manager1 = new Manager("anton",50000000,1000);
  $manager2 = new Manager("tony",10000000,2000);

  $staf1 = new Staf("budiman",120000,"banget");
  $staf2 = new Staf("jhon",100000,"tidak terlalu");

  $manager1->tampilkanInfo();
  $manager2->tampilkanInfo();
  $staf1->tampilkanInfo();
  $staf2->tampilkanInfo();



?>