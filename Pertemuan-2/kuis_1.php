<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kuis 1</title>
</head>

<body>
  <?php
  $angka = [];
  for ($i = 1; $i <= 20; $i++) {
    $angka[$i - 1] = $i;
  }

  for ($i = 0; $i < 20; $i++) {
    if ($angka[$i] % 3 == 0) {
      echo $angka[$i] . "<br>";
    }
  }

  ?>
</body>

</html>