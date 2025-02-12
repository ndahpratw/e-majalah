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

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengajuan $pengajuan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengajuan $pengajuan)
    {
        //
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
