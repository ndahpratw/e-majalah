<?php

namespace App\Http\Controllers;

use App\Models\DetailKonten;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Layout2;

class Layout2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'isi_konten_1' => 'required',
            'isi_konten_2' => 'required',
            'isi_konten_3' => 'required',
            'isi_konten_4' => 'required',
            'gambar_1' => 'required',
            'gambar_2' => 'required',
            'gambar_3' => 'required',
        ]);
        
        $detail_konten = DetailKonten::findOrFail($request->id);
        $data_konten = new Layout2();

        // $data = $request->except('token', 'submit', 'gambar_1', 'gambar_2', 'gambar_3');

        $gambar_1 = $request->file('gambar_1');
        $imageName1 = now()->format('ymdHis') . '-' . $detail_konten->judul . '-' . 'gambar-1' . '.' . $gambar_1->extension();
        $gambar_1->move(public_path('assets/img/konten/'.$detail_konten->konten->topik), $imageName1);
        // $data['gambar-1'] = $imageName1;

        $gambar_2 = $request->file('gambar_2');
        $imageName2 = now()->format('ymdHis') . '-' . '-' . $detail_konten->judul . '-' . 'gambar-2' . '.' . $gambar_2->extension();
        $gambar_2->move(public_path('assets/img/konten/'.$detail_konten->konten->topik), $imageName2);
        // $data['gambar-2'] = $imageName2;

        $gambar_3 = $request->file('gambar_3');
        $imageName3 = now()->format('ymdHis') . '-' . '-' . $detail_konten->judul . '-' . 'gambar-3' . '.' . $gambar_3->extension();
        $gambar_3->move(public_path('assets/img/konten/'.$detail_konten->konten->topik), $imageName3);
        // $data['gambar-3'] = $imageName3;

        $data_konten->id_detail_konten = $request->id;
        $data_konten->isi_konten_1 = $request->isi_konten_1;
        $data_konten->isi_konten_2 = $request->isi_konten_2;
        $data_konten->isi_konten_3 = $request->isi_konten_3;
        $data_konten->isi_konten_4 = $request->isi_konten_4;
        $data_konten->gambar_1 = $imageName1;
        $data_konten->gambar_2 = $imageName2;
        $data_konten->gambar_3 = $imageName3;

        if ($data_konten->save()) {
            return redirect()->route('konten.show', $request->id_konten)->with('success', 'Detail isi konten telah di tambahkan');
        } else {
            return redirect()->route('konten.show', $request->id_konten)->with('error', 'Gagal menambahkan data');
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $detail_konten = DetailKonten::findOrFail($id);
        return view('pages/admin/layout/layout2', compact('detail_konten'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'isi_konten_1' => 'required',
            'isi_konten_2' => 'required',
            'isi_konten_3' => 'required',
            'isi_konten_4' => 'required',
        ]);

        $detail_konten = DetailKonten::findOrFail($request->id);
        $data_konten = Layout2::findOrFail($id);

        if ($request->hasFile('gambar_1')) {
            // Hapus file foto sebelumnya dari penyimpanan
            if ($data_konten->gambar_1 && file_exists(public_path('assets/img/konten/'.$detail_konten->konten->topik.'/'. $data_konten->gambar_1))) {
                unlink(public_path('assets/img/konten/'.$detail_konten->konten->topik.'/'. $data_konten->gambar_1));
            }
    
            $gambar_1 = $request->file('gambar_1');
            $imageName1 = now()->format('ymdHis') . '-' . $detail_konten->judul . '-' . 'gambar-1' . '.' . $gambar_1->extension();
            $gambar_1->move(public_path('assets/img/konten/'.$detail_konten->konten->topik), $imageName1);
        } else {
            $imageName1 = $data_konten->gambar_1;
        }    

        if ($request->hasFile('gambar_2')) {
            // Hapus file foto sebelumnya dari penyimpanan
            if ($data_konten->gambar_2 && file_exists(public_path('assets/img/konten/'.$detail_konten->konten->topik.'/'. $data_konten->gambar_2))) {
                unlink(public_path('assets/img/konten/'.$detail_konten->konten->topik.'/'. $data_konten->gambar_2));
            }
    
            $gambar_2 = $request->file('gambar_2');
            $imageName2 = now()->format('ymdHis') . '-' . '-' . $detail_konten->judul . '-' . 'gambar-2' . '.' . $gambar_2->extension();
            $gambar_2->move(public_path('assets/img/konten/'.$detail_konten->konten->topik), $imageName2);
        } else {
            $imageName2 = $data_konten->gambar_2;
        } 

        if ($request->hasFile('gambar_3')) {
            // Hapus file foto sebelumnya dari penyimpanan
            if ($data_konten->gambar_3 && file_exists(public_path('assets/img/konten/'.$detail_konten->konten->topik.'/'. $data_konten->gambar_3))) {
                unlink(public_path('assets/img/konten/'.$detail_konten->konten->topik.'/'. $data_konten->gambar_3));
            }
    
            $gambar_3 = $request->file('gambar_3');
            $imageName3 = now()->format('ymdHis') . '-' . '-' . $detail_konten->judul . '-' . 'gambar-3' . '.' . $gambar_3->extension();
            $gambar_3->move(public_path('assets/img/konten/'.$detail_konten->konten->topik), $imageName3);
        } else {
            $imageName3 = $data_konten->gambar_3;
        }    

        $data_konten->update([
            'isi_konten_1' => $request->isi_konten_1,
            'isi_konten_2' => $request->isi_konten_2,
            'isi_konten_3' => $request->isi_konten_3,
            'isi_konten_4' => $request->isi_konten_4,
            'gambar_1' => $imageName1,
            'gambar_2' => $imageName2,
            'gambar_3' => $imageName3,
        ]);

        if ($data_konten->save()) {
            return redirect()->route('konten.show', $request->id_konten)->with('success', 'Detail isi konten telah diupdate');
        } else {
            return redirect()->route('konten.show', $request->id_konten)->with('error', 'Gagal menambahkan data');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
