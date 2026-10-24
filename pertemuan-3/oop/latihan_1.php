  <?php

  class Mobil
  {
    //  Method (fungsi)
    public function nyalakan($model)
    {
      echo "Mobil $model dinyalakan. <br>";
    }
  }

  $mobil1 = new Mobil();

  $mobil1->nyalakan("Toyota");
  $mobil1->nyalakan("Wuling");

  ?>
