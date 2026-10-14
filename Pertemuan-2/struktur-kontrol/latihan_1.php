<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Percabangan</title>
</head>

<body>
  <?php
  $nilai = 80;

  if ($nilai >= 90) {
    echo "Nilai A";
  } elseif ($nilai >= 80) {
    echo "Nilai B";
  } elseif ($nilai >= 70) {
    echo "Nilai C";
  } elseif ($nilai >= 60) {
    echo "Nilai D";
  } else {
    echo "Nilai E";
  }
  ?>
</body>

</html>