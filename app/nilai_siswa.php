<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nilai_siswa extends Model
{
    protected $table = 'nilai_siswas';
    protected $fillable = ['nilai', 'mapel_id', 'siswa_id'];

    public function mata_pelajaran()
    {
        return $this->belongsTo('App\mata_pelajaran');
    }

    public function siswa()
    {
        return $this->belongsTo('App\siswa');
    }
}
