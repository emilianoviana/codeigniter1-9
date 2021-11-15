<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Kategori_M;

class Kategori extends BaseController
{
    public function index()
    {
        //return view('welcome_message');
        echo "belajar ci4";
    }

    public function select()
    {
        
        $model = new Kategori_M();
        $kategori = $model ->findAll();
        
        $data = [
            'judul' => 'SELECT DATA DARI CONTROLLER ',
            'kategori' => $kategori
        ];

        return view ("kategori/select",$data);
    }

    public function selectWhere ($id = null)
    {
        echo "menampilkan data yang dipilih $id";
    }

    public function formInsert()
    {
        return view ("kategori/forminsert");
    }

    public function formUpdate($id = null)
    {
        echo view ("template/header");
        echo view ("kategori/update");
        echo view ("template/footer");
    }

    public function update( $id = null)
    {
        echo "proses update data $id";
    }

    public function delete ($id = null)
    {
        echo "proses delete data";
    }

}
