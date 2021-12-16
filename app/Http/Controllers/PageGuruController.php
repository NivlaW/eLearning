<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Materi;
use App\Models\Tugas;

class PageGuruController extends Controller
{
    public function index()
    {
        return view('guru.dashboard');
    }

    public function showListKelas()
    {
        $kelas = Kelas::all();

        return view('guru.kelas', compact('kelas'));
    }

    public function showKelas(Kelas $kelas)
    {
        $materi = $kelas->materi;
        $tugas = $kelas->tugas;
        $gabungan = $materi->merge($tugas)->sortBy('created_at');
        
        return view('guru.materi', compact('kelas', 'gabungan'));
    }

    public function storeMateri(Request $request){
        $request->validate([
            'id_kelas' => 'required',
            'judul' => 'required',
            'isi' => 'required'
        ]);

        Materi::create($request->all());

        return redirect('guru/kelas/'. $request->id_kelas);
    }

    public function storeTugas(Request $request){
        $request->validate([
            'id_kelas' => 'required',
            'judul' => 'required',
            'isi' => 'required'
        ]);

        Tugas::create($request->all());

        return redirect('guru/kelas/'. $request->id_kelas);
    }
    
}