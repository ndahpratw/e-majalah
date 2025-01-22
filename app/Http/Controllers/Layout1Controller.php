<?php

namespace App\Http\Controllers;

use App\Models\Layout1;
use App\Models\DetailKonten;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Layout1Controller extends Controller
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
        $request->validate([
            'isi_konten_1' => 'required',
            'isi_konten_2' => 'required',
            'isi_konten_3' => 'required',
            'isi_konten_4' => 'required',
            'gambar_1' => 'required',
            'gambar_2' => 'required',
            'gambar_3' => 'required',
            'gambar_4' => 'required',
            'gambar_5' => 'required',
            'gambar_6' => 'required',
            'gambar_7' => 'required',
            'gambar_8' => 'required',
            'gambar_9' => 'required',
        ]);
        
        $detail_konten = DetailKonten::findOrFail($request->id);
        $data_konten = new Layout1();

        $gambar_1 = $request->file('gambar_1');
        $imageName1 = now()->format('ymdHis') . '-' . $detail_konten->judul . '-' . 'gambar-1' . '.' . $gambar_1->extension();
        $gambar_1->move(public_path('assets/img/konten/'.$detail_konten->konten->topik), $imageName1);

        $gambar_2 = $request->file('gambar_2');
        $imageName2 = now()->format('ymdHis') . '-' . '-' . $detail_konten->judul . '-' . 'gambar-2' . '.' . $gambar_2->extension();
        $gambar_2->move(public_path('assets/img/konten/'.$detail_konten->konten->topik), $imageName2);

        $gambar_3 = $request->file('gambar_3');
        $imageName3 = now()->format('ymdHis') . '-' . '-' . $detail_konten->judul . '-' . 'gambar-3' . '.' . $gambar_3->extension();
        $gambar_3->move(public_path('assets/img/konten/'.$detail_konten->konten->topik), $imageName3);

        $gambar_4 = $request->file('gambar_4');
        $imageName4 = now()->format('ymdHis') . '-' . '-' . $detail_konten->judul . '-' . 'gambar-4' . '.' . $gambar_4->extension();
        $gambar_4->move(public_path('assets/img/konten/'.$detail_konten->konten->topik), $imageName4);
        
        $gambar_5 = $request->file('gambar_5');
        $imageName5 = now()->format('ymdHis') . '-' . $detail_konten->judul . '-' . 'gambar-5' . '.' . $gambar_5->extension();
        $gambar_5->move(public_path('assets/img/konten/'.$detail_konten->konten->topik), $imageName5);

        $gambar_6 = $request->file('gambar_6');
        $imageName6 = now()->format('ymdHis') . '-' . '-' . $detail_konten->judul . '-' . 'gambar-6' . '.' . $gambar_6->extension();
        $gambar_6->move(public_path('assets/img/konten/'.$detail_konten->konten->topik), $imageName6);

        $gambar_7 = $request->file('gambar_7');
        $imageName7 = now()->format('ymdHis') . '-' . '-' . $detail_konten->judul . '-' . 'gambar-7' . '.' . $gambar_7->extension();
        $gambar_7->move(public_path('assets/img/konten/'.$detail_konten->konten->topik), $imageName7);

        $gambar_8 = $request->file('gambar_8');
        $imageName8 = now()->format('ymdHis') . '-' . '-' . $detail_konten->judul . '-' . 'gambar-8' . '.' . $gambar_8->extension();
        $gambar_8->move(public_path('assets/img/konten/'.$detail_konten->konten->topik), $imageName8);
        
        $gambar_9 = $request->file('gambar_9');
        $imageName9 = now()->format('ymdHis') . '-' . '-' . $detail_konten->judul . '-' . 'gambar-9' . '.' . $gambar_9->extension();
        $gambar_9->move(public_path('assets/img/konten/'.$detail_konten->konten->topik), $imageName9);
    
        $data_konten->id_detail_konten = $request->id;
        $data_konten->isi_konten_1 = $request->isi_konten_1;
        $data_konten->isi_konten_2 = $request->isi_konten_2;
        $data_konten->isi_konten_3 = $request->isi_konten_3;
        $data_konten->isi_konten_4 = $request->isi_konten_4;
        $data_konten->gambar_1 = $imageName1;
        $data_konten->gambar_2 = $imageName2;
        $data_konten->gambar_3 = $imageName3;
        $data_konten->gambar_4 = $imageName4;
        $data_konten->gambar_5 = $imageName5;
        $data_konten->gambar_6 = $imageName6;
        $data_konten->gambar_7 = $imageName7;
        $data_konten->gambar_8 = $imageName8;
        $data_konten->gambar_9 = $imageName9;

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
        return view('pages/admin/layout/layout1', compact('detail_konten'));
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
        $data_konten = Layout1::findOrFail($id);

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
        if ($request->hasFile('gambar_4')) {
            // Hapus file foto sebelumnya dari penyimpanan
            if ($data_konten->gambar_4 && file_exists(public_path('assets/img/konten/'.$detail_konten->konten->topik.'/'. $data_konten->gambar_4))) {
                unlink(public_path('assets/img/konten/'.$detail_konten->konten->topik.'/'. $data_konten->gambar_4));
            }
    
            $gambar_4 = $request->file('gambar_4');
            $imageName4 = now()->format('ymdHis') . '-' . $detail_konten->judul . '-' . 'gambar-4' . '.' . $gambar_4->extension();
            $gambar_4->move(public_path('assets/img/konten/'.$detail_konten->konten->topik), $imageName4);
        } else {
            $imageName4 = $data_konten->gambar_1;
        }    

        if ($request->hasFile('gambar_5')) {
            // Hapus file foto sebelumnya dari penyimpanan
            if ($data_konten->gambar_5 && file_exists(public_path('assets/img/konten/'.$detail_konten->konten->topik.'/'. $data_konten->gambar_5))) {
                unlink(public_path('assets/img/konten/'.$detail_konten->konten->topik.'/'. $data_konten->gambar_5));
            }
    
            $gambar_5 = $request->file('gambar_5');
            $imageName5 = now()->format('ymdHis') . '-' . '-' . $detail_konten->judul . '-' . 'gambar-5' . '.' . $gambar_5->extension();
            $gambar_5->move(public_path('assets/img/konten/'.$detail_konten->konten->topik), $imageName5);
        } else {
            $imageName5 = $data_konten->gambar_5;
        } 

        if ($request->hasFile('gambar_6')) {
            // Hapus file foto sebelumnya dari penyimpanan
            if ($data_konten->gambar_6 && file_exists(public_path('assets/img/konten/'.$detail_konten->konten->topik.'/'. $data_konten->gambar_6))) {
                unlink(public_path('assets/img/konten/'.$detail_konten->konten->topik.'/'. $data_konten->gambar_6));
            }
    
            $gambar_6 = $request->file('gambar_6');
            $imageName6 = now()->format('ymdHis') . '-' . '-' . $detail_konten->judul . '-' . 'gambar-6' . '.' . $gambar_6->extension();
            $gambar_6->move(public_path('assets/img/konten/'.$detail_konten->konten->topik), $imageName6);
        } else {
            $imageName6 = $data_konten->gambar_6;
        } 

        if ($request->hasFile('gambar_7')) {
            // Hapus file foto sebelumnya dari penyimpanan
            if ($data_konten->gambar_7 && file_exists(public_path('assets/img/konten/'.$detail_konten->konten->topik.'/'. $data_konten->gambar_7))) {
                unlink(public_path('assets/img/konten/'.$detail_konten->konten->topik.'/'. $data_konten->gambar_7));
            }
    
            $gambar_7 = $request->file('gambar_7');
            $imageName7 = now()->format('ymdHis') . '-' . $detail_konten->judul . '-' . 'gambar-7' . '.' . $gambar_7->extension();
            $gambar_7->move(public_path('assets/img/konten/'.$detail_konten->konten->topik), $imageName7);
        } else {
            $imageName7 = $data_konten->gambar_7;
        }    

        if ($request->hasFile('gambar_8')) {
            // Hapus file foto sebelumnya dari penyimpanan
            if ($data_konten->gambar_8 && file_exists(public_path('assets/img/konten/'.$detail_konten->konten->topik.'/'. $data_konten->gambar_8))) {
                unlink(public_path('assets/img/konten/'.$detail_konten->konten->topik.'/'. $data_konten->gambar_8));
            }
    
            $gambar_8 = $request->file('gambar_8');
            $imageName8 = now()->format('ymdHis') . '-' . '-' . $detail_konten->judul . '-' . 'gambar-8' . '.' . $gambar_8->extension();
            $gambar_8->move(public_path('assets/img/konten/'.$detail_konten->konten->topik), $imageName8);
        } else {
            $imageName8 = $data_konten->gambar_8;
        } 

        if ($request->hasFile('gambar_9')) {
            // Hapus file foto sebelumnya dari penyimpanan
            if ($data_konten->gambar_9 && file_exists(public_path('assets/img/konten/'.$detail_konten->konten->topik.'/'. $data_konten->gambar_9))) {
                unlink(public_path('assets/img/konten/'.$detail_konten->konten->topik.'/'. $data_konten->gambar_9));
            }
    
            $gambar_9 = $request->file('gambar_9');
            $imageName9 = now()->format('ymdHis') . '-' . '-' . $detail_konten->judul . '-' . 'gambar-9' . '.' . $gambar_9->extension();
            $gambar_9->move(public_path('assets/img/konten/'.$detail_konten->konten->topik), $imageName9);
        } else {
            $imageName9 = $data_konten->gambar_9;
        }    

        $data_konten->update([
            'isi_konten_1' => $request->isi_konten_1,
            'isi_konten_2' => $request->isi_konten_2,
            'isi_konten_3' => $request->isi_konten_3,
            'isi_konten_4' => $request->isi_konten_4,
            'gambar_1' => $imageName1,
            'gambar_2' => $imageName2,
            'gambar_3' => $imageName3,
            'gambar_4' => $imageName4,
            'gambar_5' => $imageName5,
            'gambar_6' => $imageName6,
            'gambar_7' => $imageName7,
            'gambar_8' => $imageName8,
            'gambar_9' => $imageName9,
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
