<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Barryvdh\DomPDF\PDF;
use App\Models\Pengaduan;
use App\Models\Masyarakat;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function index()
    {
        return view('petugas.dashboard');
    }

    public function tampiladmin()
    {
        // eager loading
        $admin = Petugas::with('petugas')->get();

        // lazy loading
        // $admin = Petugas::all();
        return view('petugas.admin', ['listAdmin' => $admin]);
    }

    public function tampilmasyarakat()
    {
        // eager loading
        $masyarakat = Masyarakat::with('masyarakat')->get();
        
        // lazy loading
        // $masyarakat = Masyarakat::all();
        return view('petugas.masyarakat', ['listMasyarakat' => $masyarakat]);
    }

    public function tampilpengaduan()
    {
        $report = Pengaduan::all();
        return view('petugas.report', ['listPengaduan' => $report]);
    }

    // public function cetak_pdf()
    // {
    //     $report = Pengaduan::all();

    //     $pdf = PDF::loadView('petugas.report-pdf', ['listPengaduan' => $report]);

    //     return $pdf->download('laporanpengaduan.pdf');
    // }

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

    public function deleteadmin($id)
    {
       $admin = Petugas::find($id)->delete();
        return redirect('/petugas/admin');
    }

    public function deletemasyarakat($id)
    {
       $admin = Masyarakat::find($id)->delete();
        return redirect('/petugas/masyarakat');
    }
}
