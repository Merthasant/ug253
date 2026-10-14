<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Type Data</title>
</head>

<body>

  <?php
  $NIM = "250030035";
  $NAMA = "John";
  $KodeJurusan = "SI";
  $Angkatan = 2025;
  $Umur = 20;
  $Gender = "Laki-laki";
  $Hobi = "Memasak";


  // id Seperti NIM biasanya string
  echo "NIM : $NIM  type :";
  var_dump($NIM);
  echo "<br>";
  // nama pastinya string
  echo "Nama : $NAMA  type :";
  var_dump($NAMA);
  echo "<br>";
  // kode jurusan string
  echo "Kode Jurusan : $KodeJurusan  type :";
  var_dump($KodeJurusan);
  echo "<br>";
  // angkatan dengan tahun maka biasanya number/integer
  echo "Angkatan : $Angkatan  type :";
  var_dump($Angkatan);
  echo "<br>";
  // umur pasti integer
  echo "Umur : $Umur  type :";
  var_dump($Umur);
  echo "<br>";
  // gender pasti string
  echo "Gender : $Gender  type :";
  var_dump($Gender);
  echo "<br>";
  // hobi string
  echo "Hobi : $Hobi  type :";
  var_dump($Hobi);
  echo "<br>";

  ?>

</body>

</html>