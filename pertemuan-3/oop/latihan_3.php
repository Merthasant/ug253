  <?php

  class Kendaraan
  {
    protected $merk;
    protected $warna;

    public function __construct($merk, $warna)
    {
      $this->merk = $merk;
      $this->warna = $warna;
    }


    //  Method (fungsi)
    public function nyalakan()
    {
      echo "Kendaraan $this->merk dengan warna $this->warna dinyalakan. <br>";
    }
  }

  class Mobil extends Kendaraan
  {

    public function nyalakan()
    {
      echo "Mobil $this->merk dengan warna $this->warna dinyalakan. <br>";
    }

    public function bunyiKlakson()
    {
      echo "hong honk <br>";
    }
  }

  class Motor extends Kendaraan
  {

    public function nyalakan()
    {
      echo "Motor $this->merk dengan warna $this->warna dinyalakan. <br>";
    }
    
    public function bunyiKlakson() {
      echo "tin tin <br>";
    }
  }


  $kendaraan1 = new Kendaraan("Toyota", "Merah");
  $kendaraan2 = new Kendaraan("Honda", "Biru");
  $mobil1 = new Mobil("Toyota", "Merah");
  $motor1 = new Motor("Supra", "Kuning");

  $kendaraan1->nyalakan();
  $kendaraan2->nyalakan();

  $mobil1->nyalakan();
  $motor1->nyalakan();

  $mobil1->bunyiKlakson();
  $motor1->bunyiKlakson();





  ?>
