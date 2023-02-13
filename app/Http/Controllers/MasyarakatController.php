<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Masyarakat;
use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    public function index()
    {
        $pengaduan = Pengaduan::all();
        return view('masyarakat.pengaduan', ['pengaduanList' => $pengaduan]);
        // dd($pengaduan);
    }

    public function show($id)
    {
        $pengaduan = Pengaduan::findOrFail($id);
        return view('masyarakat.detail', ['pengaduan' => $pengaduan]);
    }

    public function create()
    {
        $pengaduan = Pengaduan::all();
        return view('masyarakat.create', ['pengaduan' => $pengaduan]);
    }

    public function store(Request $request)
    {
        // 
        // $pengaduan = new pengaduan;
        // $pengaduan->tgl_pengaduan = $request->tgl_pengaduan;
        // $pengaduan->nik = $request->nik;
        // $pengaduan->isi_laporan = $request->isi_laporan;
        // $pengaduan->foto = $request->foto;
        // $pengaduan->save();

        $pengaduan = Pengaduan::create($request->all());
        return redirect('/masyarakat/pengaduan');
       
    }

    public function edit(Request $request, $id)
    {
        $pengaduan = Pengaduan::findOrFail($id);
        return view('masyarakat.edit', ['pengaduan' => $pengaduan]);
    }

    public function update(Request $request, $id)
    {
        $pengaduan = Pengaduan::findOrFail($id);
        // dd($pengaduan);
        $pengaduan->update($request->all());

        return redirect()->route('masyarakat.dashboard');
    }

    public function destroy($id)
    {
        $pengaduan = Pengaduan::find($id)->delete();
        return redirect('/masyarakat/pengaduan');
    }

}
