<?php
class Mobil
{
  private $odoMtr;

  public function __construct()
  {
    $this->odoMtr = 1000;
  }

  //  Method (fungsi)
  public function nyalakan($model, $merk)
  {
    echo "Mobil $model dengan merk $merk dinyalakan. <br>";
  }

  public function maju($jarak)
  {
    return $this->odoMtr + $jarak;
  }
}

$mobil1 = new Mobil();

$mobil1->nyalakan("Toyota", "Camry");
$mobil1->nyalakan("Wuling", "Almaz");
echo "Odometr mobil: " . $mobil1->maju(100) . " km. <br>";
