<?php
class Nilai
{

  public function getNilaiRataRata($nTugas, $nKuis, $nUTS, $nUAS)
  {
    return ($nTugas + $nKuis + $nUTS + $nUAS) / 4;
  }

  public function getNilaiAkhir($nTugas, $nKuis, $nUTS, $nUAS)
  {
    return ($nTugas * 0.2) + ($nKuis * 0.2) + ($nUTS * 0.25) + ($nUAS * 0.35);
  }
}

$nilai1 = new Nilai();

echo "Nilai rata-rata: " . $nilai1->getNilaiRataRata(80, 80, 85, 90) . "<br>";
echo "Nilai akhir: " . $nilai1->getNilaiAkhir(80, 80, 85, 90) . "<br>";
