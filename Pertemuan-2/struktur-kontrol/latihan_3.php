<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perulangan Foreach</title>
</head>

<body>

  <?php
  $nama = ["Andi", "Budi", "Citra", "Dika", "Eka"];
  foreach ($nama as $n) {
    echo "Nama: $n <br>";
  }
  ?>

</body>

</html>