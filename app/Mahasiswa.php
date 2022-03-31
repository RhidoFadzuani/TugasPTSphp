<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
   protected $table = 'mahasiswas';
   
   protected $primaryKey = 'id';
   protected $fillable = [
      'id',
      'npm',
      'nama',
  'Jk',
  'alamat',
   'fakultas',
   'prodi',
];

public $timestamps = false;
}
