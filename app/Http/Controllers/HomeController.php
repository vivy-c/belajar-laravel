<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        $data = [
            'nama_sekolah' => 'smana',
            'alamat' => 'cilacap'
         ];
        return view('v_home ', $data);
    }

    public function about($id)
    {
        return 'ini halaman about<br>' . $id ;
    }
}
