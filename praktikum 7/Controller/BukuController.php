<?php 

require_once "Model/DaftarBukuModel.php";

class BukuController{


  public function jalankan(){

    //menggunakan model
    $dataModel = new DaftarBukuModel();
   
    //mengirim datamodel ke bukuview dan menampilkannya 
    include "View/BukuView.php";
  }

  public function editBuku(){
    $id = $_GET['id'];

    $daftar_buku = new ListBuku();
    $buku = $daftar_buku->getDataById($id);

    include_once "View/EditBuku View.php";
  }

  public function updateBuku(){
     $buku = new BUku($_POST['pengarang'], $_POST['judul'],
     $_POST['penerbit'], $_POST['tahun']);
  }

  public function simpanBuku(){
    $buku = new Buku ($_POST['pengarang'], $_POST['judul'],
    $_POST['penerbit'], $_POST['tahun']);

    //menyimpan data kemodel kemudian ke database
    $daftar_buku = new ListBuku();
    $daftar_buku->simpan($buku);
    
    //menampilkan view
    header('location: http://localhost/index.php');
    exit;

  public function hapusBuku(){
    $id = $_POST['id'];

    $daftar_buku = new ListBuku();

    $daftar_buku->delete($id);

    header('location: http://localhost/index.php');
    exit;

  }
}
}