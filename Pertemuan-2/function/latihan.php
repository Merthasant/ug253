<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Function</title>
</head>

<body>

  <?php
  function hitungLuasLingkaran($jari)
  {
    return 3.14 * ($jari ** 2);
  }
  echo "Luas lingkaran dengan jari-jari 7 adalah " . hitungLuasLingkaran(7) . "<br>";
  ?>


</body>

</html>