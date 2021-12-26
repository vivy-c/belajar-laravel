<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuruModel extends Model
{
    // use HasFactory;
    public function allData()
    {
        return [
            [
                'nip' => '1234',
                'nama' => 'Budi',
                'mapel' => 'Biologi'
            ],
            [
                'nip' => '1222',
                'nama' => 'Andi',
                'mapel' => 'Matematika'
            ],
            [
                'nip' => '1111',
                'nama' => 'Ani',
                'mapel' => 'Bahasa'
            ]
        ];
    }
}
