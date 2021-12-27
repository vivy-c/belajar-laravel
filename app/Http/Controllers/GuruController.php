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
        if (!$this->GuruModel->detailData($id_guru)) {
            abort(404);
        }
        $data = [
                'guru' => $this->GuruModel->detailData($id_guru),
            ];
    
            return view('v_detailguru', $data);
    }

    public function add()
    {
        return view('v_addguru');
    }

    public function insert()
    {
        Request()->validate([
            'nip_guru' => 'required|unique:tbl_guru,nip|min:4|max:6',
            'nama_guru' => 'required',
            'mapel' => 'required',
            'foto_guru' => 'required|mimes:jpg,jpeg,bmp,png|max:1024kb',
        ],[
            'nip_guru.required' => 'nip wajib diisi',
            'nip_guru.unique' => 'nip sudah ada',
            'nip_guru.min' => 'min 4 karakter',
            'nip_guru.max' => 'max 6 karakter',
        ]);

        //upload gambar
        $file = Request()->foto_guru;
        $fileName = Request()->nip_guru.'.'. $file->extension();
        $file->move(public_path('foto_guru'),$fileName);

        $data = [
            'nip_guru' => Request()->nip_guru,
            'nama_guru' => Request()->nama_guru,
            'mapel' => Request()->mapel,
            'foto_guru' => $fileName,
        ];

        $this->GuruModel->addData($data);
        return redirect()->route('guru')->with('pesan','Data Berhasil di Tambahkan');
    }
}
