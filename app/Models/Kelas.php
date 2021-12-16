<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';

    public function materi()
    {
        return $this->hasMany(Materi::class, 'id_kelas');
    }
    
    public function tugas()
    {
        return $this->hasMany(Tugas::class, 'id_kelas');
    }
}