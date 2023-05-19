<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    public static function getAll(){
        return[
            [
                "nama" => 'Rustu',
                'jk' => 'L',
                'tgl_lahir' => '08/03/2001',
                'alamat' => 'Bogor',
                'telp' => '085990034308',
            ],
            [
                "nama" => 'Puput',
                'jk' => 'P',
                'tgl_lahir' => '26/04/2002',
                'alamat' => 'Depok',
                'telp' => '085990034308',
            ],
            [
                "nama" => 'Rustu',
                'jk' => 'L',
                'tgl_lahir' => '26/05/2003',
                'alamat' => 'Jakarta',
                'telp' => '085990034308',
            ],
        ];
    }
}
