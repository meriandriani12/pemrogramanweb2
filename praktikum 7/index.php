<?php 

require_once "Controller/BukuController.php";

$aplikasi = new BukuController();

//membaca url
$request = $_SERVER["REQUEST_URI"];
$request = parse_url($request, PHP_URL_PATH);

//mengarahkan request
switch($request){
    case "/":
    case "/index.php":
        $app->jalankan();
        break;
    case "/index.php/hapus":
        $app->hapusBuku();
        break;

    case "/index.php/edit":
        $app->editBuku();
        break;
    case"/index.php/update":
        $app->updateBuku();
        break;
}