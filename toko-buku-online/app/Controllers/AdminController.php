<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    public function index()
    {
        //
    }
    public function pelanggan(){
        return view('admin/pelanggan');
    }

    public function dashboard(){
        return view('admin/pelanggan');
    }
    public function transaksi(){
        return view('admin/pelanggan');
    }
    public function databuku(){
        return view('admin/pelanggan');
        $bookModel = model('BookModel');
        $data['books'] = $bookModel->findAll(); 
        
    }

    public function create_buku(){
        $bookModel = model('BookModel');
        $data = $this->request->getPost();
        $file = $this->request->getFile('thumbnail_url');

        if(!$file->hasMoved()){
            $file->store('images'); //writable/uploads/images/nama-images
            $data['thumbnail_url'] = $path; 
        }

      if($bookModel->insert($data, false)){
        return redirect()->to('admin/data-buku')->with('sukses', 'Data berhasil disimpan!');
      }else{
        return redirect()->back()->with('gagal', 'Data Berhasil disimpan!');
      }
    }
}
