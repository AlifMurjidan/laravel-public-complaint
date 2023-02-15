<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function index()
    {
        return view('petugas.dashboard');
        
    }

    public function tampilpengaduan()
    {
        $report = Pengaduan::all();
        return view('petugas.report', ['listPengaduan' => $report]);
    }

    public function edit(Request $request, $id)
    {
       $pengaduan = Pengaduan::findOrFail($id);
        return view('petugas.edit', ['pengaduan' =>$pengaduan]);
    }

    public function update(Request $request, $id)
    {
       $pengaduan = Pengaduan::findOrFail($id);

       $pengaduan->update($request->all());
        return redirect()->route('petugas.report');
    }

    public function destroy($id)
    {
       $pengaduan = Pengaduan::find($id)->delete();
        return redirect('/petugas/report');
    }
}
