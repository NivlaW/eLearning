<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Tugas;

class TugasController extends Controller
{
    public function show(Kelas $kelas, Tugas $tugas)
    {
        $tugasKelas = $kelas->tugas;
        $materi = $kelas->materi;
        $gabungan = $tugasKelas->merge($materi)->sortBy('created_at');

        return view('tugas.index', compact('kelas', 'tugas', 'gabungan'));
    }

    public function showmrd(Kelas $kelas, Tugas $tugas)
    {
        $tugasKelas = $kelas->tugas;
        $materi = $kelas->materi;
        $gabungan = $tugasKelas->merge($materi)->sortBy('created_at');
        
        return view('murid.muridt', compact('kelas', 'tugas', 'gabungan'));
    }
}