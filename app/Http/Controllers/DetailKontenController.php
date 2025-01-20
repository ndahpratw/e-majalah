<?php

namespace App\Http\Controllers;

use App\Models\Konten;
use App\Models\Layout1;
use App\Models\Layout2;
use App\Models\Layout3;
use App\Models\Layout4;
use App\Models\Layout5;
use App\Models\Layout6;
use App\Models\DetailKonten;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DetailKontenController extends Controller
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

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'judul' => 'required|unique:detail_kontens,judul',
            'sub_judul' => 'required',
            'layout' => 'required',
        ]);

        $detail_konten = new DetailKonten();
        $detail_konten->id_konten = $request->id_konten;
        $detail_konten->judul = $request->judul;
        $detail_konten->sub_judul = $request->sub_judul;
        $detail_konten->jenis_layout = $request->layout;
        if ($detail_konten->save()) {
            if ($request->layout == 'Layout 1') {
                return redirect()->route('layout1.show', $detail_konten->id)->with('success','Informasi detail konten berhasil ditambahkan');
            } elseif ($request->layout == 'Layout 2') {
                return redirect()->route('layout2.show', $detail_konten->id)->with('success','Informasi detail konten berhasil ditambahkan');
            } elseif ($request->layout == 'Layout 3') {
                return redirect()->route('layout3.show', $detail_konten->id)->with('success','Informasi detail konten berhasil ditambahkan');
            } elseif ($request->layout == 'Layout 4') {
                return redirect()->route('layout4.show', $detail_konten->id)->with('success','Informasi detail konten berhasil ditambahkan');
            } elseif ($request->layout == 'Layout 5') {
                return redirect()->route('layout5.show', $detail_konten->id)->with('success','Informasi detail konten berhasil ditambahkan');
            } elseif ($request->layout == 'Layout 6') {
                return redirect()->route('layout6.show', $detail_konten->id)->with('success','Informasi detail konten berhasil ditambahkan');
            }
        } else {
            return redirect()->route('konten.show', $request->id_konten)->with('error', 'Gagal menambahkan data');
        }
        


    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $id = $id;
        $konten = Konten::findOrFail($id);
        return view('pages.admin.konten.create-detail', compact('id','konten'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = DetailKonten::findOrFail($id);
        if ($data->jenis_layout == 'Layout 1') {
            $layout = Layout1::where('id_detail_konten',$id)->first();
            return view('pages.admin.layout.layout1-edit', compact('data','layout'));
        } elseif ($data->jenis_layout == 'Layout 2') {
            $layout = Layout2::where('id_detail_konten',$id)->first();
            return view('pages.admin.layout.layout2-edit', compact('data','layout'));
        } elseif ($data->jenis_layout == 'Layout 3') {
            $layout = Layout3::where('id_detail_konten',$id)->first();
            return view('pages.admin.layout.layout3-edit', compact('data','layout'));
        } elseif ($data->jenis_layout == 'Layout 4') {
            $layout = Layout4::where('id_detail_konten',$id)->first();
            return view('pages.admin.layout.layout4-edit', compact('data','layout'));
        } elseif ($data->jenis_layout == 'Layout 5') {
            $layout = Layout5::where('id_detail_konten',$id)->first();
            return view('pages.admin.layout.layout5-edit', compact('data','layout'));
        } elseif ($data->jenis_layout == 'Layout 6') {
            $layout = Layout6::where('id_detail_konten',$id)->first();
            return view('pages.admin.layout.layout6-edit', compact('data','layout'));
        }
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        // dd($request);
        $request->validate([
            'judul' => 'required',
            'sub_judul' => 'required'
        ]);

        $detail_konten = DetailKonten::findOrFail($id);
        $detail_konten->update([
            'judul' => $request->judul,
            'sub_judul' => $request->sub_judul,
        ]);
        if ($detail_konten->save()) {
            return redirect()->route('konten.show', $detail_konten->id_konten)->with('success', 'Berhasil mengupdate data');            
        } else {
            return redirect()->route('konten.show', $detail_konten->id_konten)->with('error', 'Gagal menambahkan data');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $detail_konten = DetailKonten::findOrFail($id);

        if ($detail_konten->jenis_layout == 'Layout 1') {
            $layout = Layout1::where('id_detail_konten', $id)->first();
        
            foreach (['gambar_1', 'gambar_2', 'gambar_3', 'gambar_4', 'gambar_5', 'gambar_6', 'gambar_7', 'gambar_8', 'gambar_9'] as $gambar) {
                if ($layout->$gambar) {
                    $fotoPath = public_path('assets/img/konten/' . $detail_konten->konten->topik . '/' . $layout->$gambar);
                    if (file_exists($fotoPath)) {
                        unlink($fotoPath);
                    }
                }
            }
        } elseif ($detail_konten->jenis_layout == 'Layout 2') {
            $layout = Layout2::where('id_detail_konten', $id)->first();
        
            foreach (['gambar_1', 'gambar_2', 'gambar_3'] as $gambar) {
                if ($layout->$gambar) {
                    $fotoPath = public_path('assets/img/konten/' . $detail_konten->konten->topik . '/' . $layout->$gambar);
                    if (file_exists($fotoPath)) {
                        unlink($fotoPath);
                    }
                }
            }
        } elseif ($detail_konten->jenis_layout == 'Layout 3') {
            $layout = Layout3::where('id_detail_konten', $id)->first();
        
            foreach (['gambar_1', 'gambar_2', 'gambar_3', 'gambar_4', 'gambar_5', 'gambar_6', 'gambar_7', 'gambar_8', 'gambar_9', 'gambar_10', 'gambar_11'] as $gambar) {
                if ($layout->$gambar) {
                    $fotoPath = public_path('assets/img/konten/' . $detail_konten->konten->topik . '/' . $layout->$gambar);
                    if (file_exists($fotoPath)) {
                        unlink($fotoPath);
                    }
                }
            }
        } elseif ($detail_konten->jenis_layout == 'Layout 4') {
            $layout = Layout4::where('id_detail_konten', $id)->first();
        
            foreach (['gambar_1', 'gambar_2', 'gambar_3', 'gambar_4', 'gambar_5'] as $gambar) {
                if ($layout->$gambar) {
                    $fotoPath = public_path('assets/img/konten/' . $detail_konten->konten->topik . '/' . $layout->$gambar);
                    if (file_exists($fotoPath)) {
                        unlink($fotoPath);
                    }
                }
            }
        } elseif ($detail_konten->jenis_layout == 'Layout 5') {
            $layout = Layout5::where('id_detail_konten', $id)->first();
        
            foreach (['gambar_1', 'gambar_2', 'gambar_3', 'gambar_4'] as $gambar) {
                if ($layout->$gambar) {
                    $fotoPath = public_path('assets/img/konten/' . $detail_konten->konten->topik . '/' . $layout->$gambar);
                    if (file_exists($fotoPath)) {
                        unlink($fotoPath);
                    }
                }
            }
        } elseif ($detail_konten->jenis_layout == 'Layout 6') {
            $layout = Layout6::where('id_detail_konten', $id)->first();
        
            foreach (['gambar_1', 'gambar_2', 'gambar_3'] as $gambar) {
                if ($layout->$gambar) {
                    $fotoPath = public_path('assets/img/konten/' . $detail_konten->konten->topik . '/' . $layout->$gambar);
                    if (file_exists($fotoPath)) {
                        unlink($fotoPath);
                    }
                }
            }
        }
        

        if ($detail_konten->delete()) {
            return redirect()->back()->with('success', 'Berhasil menghapus data');            
        } else {
            return redirect()->back()->with('error', 'Gagal menambahkan data');
        }
    }
}
