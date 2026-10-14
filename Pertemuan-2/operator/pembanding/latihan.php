<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operator Pembanding</title>
</head>

<body>
  <?php
  $x = 10;
  $y = "10";

  echo "Nilai x : $x <br>";
  echo "Nilai y : $y <br>";

  echo "<h3>Operator Pembanding</h3>";
  echo "Hasil x == y : ";
  var_dump($x == $y);
  echo "<br>";
  echo "Hasil x === y : ";
  var_dump($x === $y);
  echo "<br>";
  echo "Hasil x > y : ";
  var_dump($x > $y);
  echo "<br>";
  echo "Hasil x < y : ";
  var_dump($x < $y);
  echo "<br>";
  ?>
</body>

</html>