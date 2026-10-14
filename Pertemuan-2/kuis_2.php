<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kuis 2</title>
</head>

<body>

  <?php
  function hitungNilaiAkhir($Tugas, $UTS, $UAS)
  {
    $nilaiAkhir = ($Tugas * 0.3) + ($UTS * 0.3) + ($UAS * 0.4);
    return $nilaiAkhir;
  }
  $nilaiAkhir = hitungNilaiAkhir(88, 70, 89);

  echo "Nilai akhir " . $nilaiAkhir . "<br>";
  if ($nilaiAkhir >= 70) {
    echo "Lulus";
  } else {
    echo "Tidak Lulus";
  }
  ?>


</body>

</html>