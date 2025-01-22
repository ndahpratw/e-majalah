<?php

namespace App\Http\Controllers;

use App\Models\Konten;
use App\Models\DetailKonten;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KontenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index_user()
    {
        $no = 1;
        $konten = Konten::all();
        $detail_konten = DetailKonten::all();
        return view('pages/user/daftarisi', compact('no','konten','detail_konten'));
    }

    public function index() {
        $no = 1;
        $konten = Konten::all();
        return view('pages.admin.konten.index', compact('no','konten'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.konten.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'topik' => 'required',
            'gambar' => 'required',
        ]);

        $konten = new Konten();

        $gambar = $request->file('gambar');
        $imageName = $request->topik . '.' . $gambar->extension();
        $gambar->move(public_path('assets/img/konten/'), $imageName);

        $konten->topik = $request->topik;
        $konten->gambar = $imageName;

        if ($konten->save()) {
            return redirect()->route('konten.index')->with('success', 'Konten telah di tambahkan');
        } else {
            return redirect()->route('konten.index')->with('error', 'Gagal menambahkan Konten');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $id = $id;
        $konten = Konten::findOrFail($id);
        $detail_konten = DetailKonten::where('id_konten',$id)->get();
        return view('pages.admin.konten.show', compact('id','konten','detail_konten'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Konten::find($id);
        return view('pages.admin.konten.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'topik' => 'required',
            'gambar' => 'required',
        ]);

        $konten = Konten::findOrFail($id);

        if ($request->hasFile('gambar')) {
            // Hapus file foto sebelumnya dari penyimpanan
            if ($konten->gambar && file_exists(public_path('assets/img/konten/'. $konten->gambar))) {
                unlink(public_path('assets/img/konten/'. $konten->gambar));
            }
    
            $gambar = $request->file('gambar');
            $imageName = $request->topik . '.' . $gambar->extension();
            $gambar->move(public_path('assets/img/konten/'), $imageName);
        } else {
            $imageName = $konten->gambar;
        }   

        $konten->update([
            'topik' => $request->topik,
            'gambar' => $imageName,
        ]);

        if ($konten->save()) {
            return redirect()->route('konten.index')->with('success', 'Konten telah diupdate');
        } else {
            return redirect()->route('konten.index')->with('error', 'Gagal mengupdate Konten');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $konten = Konten::findOrFail($id);

        $fotoPath = public_path('assets/img/konten/'. $konten->gambar);
        if (file_exists($fotoPath)) {
            unlink($fotoPath);
        }

        if ($konten->delete()) {
            return redirect()->back()->with('success', 'Berhasil menghapus data');            
        } else {
            return redirect()->back()->with('error', 'Gagal menghapus data');
        }
    }
}
