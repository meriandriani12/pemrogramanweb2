<?php

require_once "Buku.php";
require_once "Database/Database.php";


class DaftarBukuModel
{
  public function getData()
  {
    $db = new Database();
    $koneksi = $db->getKoneksi();

    $sql = "SELECT * FROM buku";

    $query = $koneksi->query($sql);

    $daftar_buku = [];

    if ($query->num_rows > 0) {
      while ($row = $query->fetch_assoc()) {
        $buku = new Buku($row['judul'], $row['pengarang'], $row['penerbit'], $row['tahun']);
        $buku->setId($row['id_buku']);
        array_push($daftar_buku, $buku);
      }
    }
    return $daftar_buku;
  }

  public function getDataById($id_buku){

    $query = $koneksi->query($sql);

    if($query->num_rows > 0){
      $row = $query->fetch_assoc();

      $buku = new Buku($row['judul'], $row['pengarang'],
      $row['penerbit'], $row['tahun']);
      $buku->setId($row['id']);

      return $buku;
    }
  }
  public function getKolomTabel()
  {
    $kolom_tabel = array(
      'No',
      'Judul',
      'Pengarang',
      'Penerbit',
      'Tahun'
    );

    return $kolom_tabel;
  }
  
}



