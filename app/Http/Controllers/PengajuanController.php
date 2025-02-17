<?php

namespace App\Http\Controllers;

use App\Models\Konten;
use App\Models\Pengajuan;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $no = 1;
        $data_pengajuan = Pengajuan::all();
        $pengajuan = Pengajuan::where('id_mitra', auth()->user()->id)->get();
        return view('pages.admin.pengajuan.index', compact('no','data_pengajuan','pengajuan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $konten = Konten::all();
        return view('pages.admin.pengajuan.create', compact('konten'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'konten' => 'required',
            'judul' => 'required|unique:detail_kontens,judul',
            'sub_judul' => 'required',
            'layout' => 'required',
        ]);

        $pengajuan = new Pengajuan();
        $pengajuan->id_konten = $request->konten;
        $pengajuan->id_mitra = auth()->user()->id;
        $pengajuan->judul = $request->judul;
        $pengajuan->sub_judul = $request->sub_judul;
        $pengajuan->jenis_layout = $request->layout;
        $pengajuan->status = 'Belum Diproses';
        if ($pengajuan->save()) {
            return redirect()->route('pengajuan.index')->with('success', 'Berhasil Menambahkan Data Pengajuan');
        } else {
            return redirect()->route('pengajuan.index')->with('error', 'Gagal menambahkan data');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengajuan $pengajuan)
    {
        //
    }

    public function updateStatus(Request $request, $id)
    {
        $pengajuan = Pengajuan::findOrFail($id);

        // Update status
        $pengajuan->status = $request->status;

        // Jika status adalah "Ditolak", update kolom keterangan dengan alasan yang dipilih
        if ($request->status == 'Ditolak') {
            $pengajuan->keterangan = $request->keterangan;
        } elseif($request->status == 'Sedang Diproses'){
            $pengajuan->status_pembayaran = 'Belum Bayar';
        } else {
            // Jika status bukan "Ditolak", kosongkan kolom keterangan
            $pengajuan->keterangan = null;
        }

        // Simpan perubahan
        $pengajuan->save();

        return redirect()->back()->with('success', 'Status berhasil diperbarui!');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function admineditstatus(Request $request, Pengajuan $pengajuan, $id)
    {
        $request->validate([
            'status' => 'required|in:Belum Diproses,Sedang Diproses,Ditolak,Selesai',
        ]);
    
        $pengajuan = Pengajuan::findOrFail($id);
        $pengajuan->status = $request->status;
        $pengajuan->status_pembayaran = "Belum Bayar";
        $pengajuan->save();
    
        return redirect()->back()->with('success', 'Status Pengerjaan berhasil diperbarui.');
    }

    public function admineditbuktibayar(Request $request, Pengajuan $pengajuan, $id){
        $request->validate([
            'bukti_pembayaran' => 'required|image|mimes:jpg,png',
        ], [
            'bukti_pembayaran.required' => 'Bukti pembayaran wajib diunggah.',
            'bukti_pembayaran.image' => 'File yang diunggah harus berupa gambar.',
            'bukti_pembayaran.mimes' => 'Gambar harus berekstensi jpg atau png.',
        ]);

        $pengajuan = Pengajuan::findOrFail($id);

        if ($request->hasFile('bukti_pembayaran')) {
            // Hapus file foto sebelumnya dari penyimpanan
            if ($pengajuan->bukti_pembayaran && file_exists(public_path('assets/img/buktibayar/'. $pengajuan->bukti_pembayaran))) {
                unlink(public_path('assets/img/buktibayar/'. $pengajuan->bukti_pembayaran));
            }
    
            $bukti_pembayaran = $request->file('bukti_pembayaran');
            $imageName = 'Pengajuan'.$request->id. '.' . $bukti_pembayaran->extension();
            $bukti_pembayaran->move(public_path('assets/img/buktibayar/'), $imageName);
        } else {
            $imageName = $pengajuan->bukti_pembayaran;
        }   

        $pengajuan->update([
            'bukti_pembayaran' => $imageName,
            'status_pembayaran' => 'Menunggu Konfirmasi',
        ]);

        if ($pengajuan->save()) {
            return redirect()->route('pengajuan.index')->with('success', 'Bukti Pembayaran berhasil dikirim');
        } else {
            return redirect()->route('pengajuan.index')->with('error', 'Gagal mengirimkan Bukti Pembayaran');
        }
    }

    public function admineditvalidasipembayaran(Request $request, Pengajuan $pengajuan, $id){
        $pengajuan = Pengajuan::findOrFail($id);
        $pengajuan->status_pembayaran = "Lunas";
        $pengajuan->save();
    
        return redirect()->back()->with('success', 'Status Pembayaran berhasil diperbarui.');
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'berkas' => 'required|mimes:pdf,'
        ], [
            'berkas.required' => 'Dokumen wajib diunggah.',
            'berkas.mimes' => 'File yang diunggah harus berupa dokumen PDF.',
        ]);

        $pengajuan = Pengajuan::findOrFail($id);

        if ($request->hasFile('berkas')) {
            // Hapus file foto sebelumnya dari penyimpanan
            if ($pengajuan->berkas && file_exists(public_path('assets/img/berkas/'. $pengajuan->berkas))) {
                unlink(public_path('assets/img/berkas/'. $pengajuan->berkas));
            }
    
            $berkas = $request->file('berkas');
            $documentName = 'Pengajuan'.$id. '.' . $berkas->extension();
            $berkas->move(public_path('assets/img/berkas/'), $documentName);
        } else {
            $documentName = $pengajuan->berkas;
        }   

        $pengajuan->update([
            'berkas' => $documentName,
        ]);

        if ($pengajuan->save()) {
            return redirect()->route('pengajuan.index')->with('success', 'Berkas Konten berhasil dikirim');
        } else {
            return redirect()->route('pengajuan.index')->with('error', 'Gagal mengupload berkas konten');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Pengajuan::find($id);
        if ($data->delete()){
            return redirect()->back()->with("success","Berhasil Menghapus Data Pengajuan");
        } else {
            return redirect()->back()->with('error', 'Gagal Menghapus Data Pengajuan');
        }
    }
}
