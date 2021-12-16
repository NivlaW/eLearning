<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materi;
use App\Models\Kelas;
use App\Models\Tugas;

class MateriController extends Controller
{
    public function show(Kelas $kelas, Materi $materi)
    {
        $materii = $kelas->materi;
        $tugas = $kelas->tugas;
        $gabungan = $materii->merge($tugas)->sortBy('created_at');
        
        return view('materi.index', compact('kelas', 'materi', 'gabungan'));
    }

    public function showmrd(Kelas $kelas, Materi $materi)
    {
        $materii = $kelas->materi;
        $tugas = $kelas->tugas;
        $gabungan = $materii->merge($tugas)->sortBy('created_at');
        
        return view('murid.muridm', compact('kelas', 'materi', 'gabungan'));
    }
    
    public function update(Request $request, $kelas ,Materi $materi )
    {
        Materi::where('id', $materi->id)->update([
            'judul' => $request->judul,
            'isi' => $request->isi
    ]);

        return back()->with('success',' Data telah diperbaharui!');
    }

    public function destroy(Kelas $kelas,Materi $materi)
    {   
        Materi::destroy($materi->id);

        return redirect('guru/kelas/'.$kelas->id)->with('succes','Siswa Berhasil di Hapus');
    }
}