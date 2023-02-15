<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Masyarakat;
use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    public function index()
    {
        return view('masyarakat.dashboard');
        
    }

    public function tampilpengaduan()
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

        
        $this->validate($request, [
            'tgl_pengaduan'     => 'required',
            'nik'               => 'required',
            'isi_laporan'       => 'required',
            'foto'              => 'required|image|mimes:jpeg,png,jpg',
            
        ]);

        $image = $request->file('foto');
        $image->storeAs('public/images', $image->hashName());
        
        $pengaduan = Pengaduan::create([
            'tgl_pengaduan'     => $request->tgl_pengaduan,
            'nik'               => $request->nik,
            'isi_laporan'       => $request->isi_laporan,
            'foto'              => $image->hashName()
        ]);

        // $pengaduan = Pengaduan::create($request->all());
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
        // $this->validate($request, [
        //     'tgl_pengaduan'     => 'required',
        //     'nik'               => 'required',
        //     'isi_laporan'       => 'required',
        //     'foto'              => 'image|mimes:jpeg,png,jpg',
            
        // ]);
        
        // // if ($request->hasFile('foto')) {

        // $image = $request->file('foto');
        // $image->storeAs('public/images', $image->hashName());
       
        $pengaduan->update([
            'tgl_pengaduan'     => date("Y-m-d H:i:s"),
            'nik'               => $request->nik,
            'isi_laporan'       => $request->isi_laporan,
            // 'foto'              => $image->hashName()
        ]);

    // } else {
    //     $pengaduan->update([
    //         'tgl_pengaduan'     => date("Y-m-d H:i:s"),
    //         'nik'               => $request->nik,
    //         'isi_laporan'       => $request->isi_laporan
    //     ]);
    // }
        // $pengaduan->update($request->all());
        return redirect()->route('masyarakat.pengaduan');
    }

    public function destroy($id)
    {
        $pengaduan = Pengaduan::find($id)->delete();
        return redirect('/masyarakat/pengaduan');
    }

}
