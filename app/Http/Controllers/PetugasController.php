<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use App\Models\Masyarakat;
use Codedge\Fpdf\Fpdf\Fpdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PetugasController extends Controller
{

    protected $fpdf;

    public function __construct()
    {
        $this->fpdf = new Fpdf;
    }

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

    public function print() 
    {
        $this->fpdf->SetFont('Times', 'B', 15);
        $this->fpdf->AddPage();
        $this->fpdf->Cell(0, 10, "Laporan Pengaduan Masyarakat",0,"","C");
        $this->fpdf->Ln();
        $this->fpdf->Cell(80);
        $this->fpdf->Cell(30,5);

        $this->fpdf->Ln();
        $this->fpdf->Ln();

        $this->fpdf->SetFont('Times','B',12);
        $this->fpdf->Cell(25,8,"Tanggal",1,"","C");
        $this->fpdf->Cell(20,8,"NIK",1,"","C");
        $this->fpdf->Cell(60,8,"Laporan",1,"","C");
        $this->fpdf->Cell(35,8,"Status",1,"","C");
        // $this->fpdf->Cell(45,8,"Foto",1,"","C");

        $this->fpdf->Ln();

        $pengaduan = Pengaduan::all();
        foreach ($pengaduan as $data) {
        $this->fpdf->Cell(25,8,$data->tgl_pengaduan,1,"","C");
        $this->fpdf->Cell(20,8,$data->nik,1,"","C");
        $this->fpdf->Cell(60,8,$data->isi_laporan,1,"","C");
        $this->fpdf->Cell(35,8,$data->status,1,"","C");
        // $this->fpdf->Image(Storage::url('public/images/').$data->foto,165,30,25,25);
            
        $this->fpdf->Ln();
        }

        $this->fpdf->Output();

        exit;
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

    public function tanggapan(Request $request, $id)
    {
        $tanggapan = Tanggapan::all();
        // $pengaduan = Pengaduan::findOrFail($id);
        // $pengaduan = Pengaduan::all();
        $pengaduan = Pengaduan::select('id')->get();
        $petugas = Petugas::with('petugas')->get();
        return view('petugas.tanggapan', ['pengaduan' => $pengaduan, 'petugas'=> $petugas]);
    }

    public function tanggapans(Request $request)
    {
        // $pengaduan = Pengaduan::findOrFail($id);
        $tanggapan = Tanggapan::create([
            'id_pengaduan'       => $request->id_pengaduan,
            'tgl_tanggapan'     => date("Y-m-d H:i:s"),
            'tanggapan'         => $request->tanggapan,
            'id_petugas'       => $request->id_petugas,
        ]);

        return redirect('/petugas/report');
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
