<?php

class Buku
{
  private $kode;
  private $judul;
  private $penulis;
  private $stok;

  public function __construct($kode, $judul, $penulis, $stok)
  {
    $this->kode = $kode;
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->stok = $stok;
  }

  public function getJudul()
  {
    return $this->judul;
  }

  public function getStok()
  {
    return $this->stok;
  }

  public function tersedia()
  {
    if ($this->stok > 0) {
      return true;
    } else {
      return false;
    }
  }

  public function kurangiStok()
  {
    $this->stok = $this->stok - 1;
  }

  public function tambahStok()
  {
    $this->stok = $this->stok + 1;
  }

  public function info()
  {
    echo "||==========================|| <br>";
    echo "kode buku    : $this->kode <br>";
    echo "judul buku   : $this->judul <br>";
    echo "penulis buku : $this->penulis <br>";
    echo "stok buku    : $this->stok <br>";
    echo "||==========================|| <br>";
  }
}

class Anggota
{
  private $id;
  private $nama;
  private $jumlahPinjam = 0;
  private $maksPinjam = 3;

  public function __construct($id, $nama)
  {
    $this->id = $id;
    $this->nama = $nama;
  }

  public function getNama()
  {
    return $this->nama;
  }

  public function bolehPinjam()
  {
    if ($this->jumlahPinjam < $this->maksPinjam) {
      return true;
    } else {
      return false;
    }
  }

  public function tambahPinjam()
  {
    $this->jumlahPinjam = $this->jumlahPinjam + 1;
  }

  public function kurangiPinjam()
  {
    $this->jumlahPinjam = $this->jumlahPinjam - 1;
  }
}

class Peminjaman
{
  private $anggota;
  private $buku;
  private $tglPinjam;
  private $jatuhTempo;
  private $tglKembali;
  private $status = "Belum dipinjam";
  private $lamaPinjam = 7;
  private $dendaPerHari = 1000;

  public function __construct($anggota, $buku)
  {
    $this->anggota = $anggota;
    $this->buku = $buku;
  }

  public function pinjam()
  {
    if (!$this->anggota->bolehPinjam()) {
      echo $this->anggota->getNama() . " sudah mencapai batas pinjam. <br>";
      return;
    }

    if (!$this->buku->tersedia()) {
      echo "Stok buku " . $this->buku->getJudul() . " habis. <br>";
      return;
    }

    $this->buku->kurangiStok();
    $this->anggota->tambahPinjam();

    $this->tglPinjam = date("Y-m-d");
    $this->jatuhTempo = date("Y-m-d", strtotime("+" . $this->lamaPinjam . " days"));
    $this->status = "Dipinjam";

    echo "Peminjaman berhasil. <br>";
  }

  public function kembalikan($tglKembali)
  {
    if ($this->status != "Dipinjam") {
      echo "Buku ini tidak sedang dipinjam. <br>";
      return 0;
    }

    $this->tglKembali = $tglKembali;
    $this->buku->tambahStok();
    $this->anggota->kurangiPinjam();
    $this->status = "Dikembalikan";

    return $this->hitungDenda();
  }

  public function hitungDenda()
  {
    $selisih = (strtotime($this->tglKembali) - strtotime($this->jatuhTempo)) / 86400;

    if ($selisih > 0) {
      return $selisih * $this->dendaPerHari;
    } else {
      return 0;
    }
  }

  public function info()
  {
    echo $this->anggota->getNama() . " meminjam '" . $this->buku->getJudul() . "' <br>";
    echo "Jatuh tempo : " . $this->jatuhTempo . " <br>";
    echo "Status      : " . $this->status . " <br>";
  }
}


// ===== Contoh penggunaan =====
$buku = new Buku("AB-01", "Melukis Senja", "fajar", 2);
$anggota = new Anggota("A001", "Made");

$buku->info();

$pinjam = new Peminjaman($anggota, $buku);
$pinjam->pinjam();
$pinjam->info();
echo "Stok sekarang: " . $buku->getStok() . "<br>"; // 1

// simulasi dikembalikan 10 hari kemudian (telat 3 hari)
$tglKembali = date("Y-m-d", strtotime("+10 days"));
$denda = $pinjam->kembalikan($tglKembali);
echo "Denda: Rp" . $denda . "<br>"; // Rp3000
echo "Stok sekarang: " . $buku->getStok() . "<br>"; // 2