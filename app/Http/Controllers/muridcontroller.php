<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Materi;
use App\Models\Tugas;

class muridcontroller extends Controller
{
    public function index()
    {
        return view('murid.dashboard');
    }
    public function muridkelas()
    {
        $kelas = Kelas::all();

        return view('murid.kelas', compact('kelas'));
    }

    public function showmuridkelas(Kelas $kelas)
    {
        $materi = $kelas->materi;
        $tugas = $kelas->tugas;
        $gabungan = $materi->merge($tugas)->sortBy('created_at');
        
        return view('murid.muridk', compact('kelas', 'gabungan'));
    }

}
