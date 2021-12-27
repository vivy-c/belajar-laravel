<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GuruModel;

class GuruController extends Controller
{
    public function __construct()
    {
        $this->GuruModel = new GuruModel();
    }

    public function index()
    {
        return view('v_guru',[
            'guru' => $this->GuruModel->allData()
        ]);
        // $data = [
        //     'guru' => $this->GuruModel->allData(),
        // ];

        // return view('v_guru', $data);
    }

    public function detail($id_guru)
    {
        $data = [
                'guru' => $this->GuruModel->detailData($id_guru),
            ];
    
            return view('v_detailguru', $data);
    }
}
