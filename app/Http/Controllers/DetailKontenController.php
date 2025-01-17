<?php

namespace App\Http\Controllers;

use App\Models\DetailKonten;
use Illuminate\Http\Request;

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
        if ($detail_konten->save()) {
            if ($request->layout == 'layout1') {
                return redirect()->route('layout1.show', $detail_konten->id)->with('success','Informasi detail konten berhasil ditambahkan');
            } elseif ($request->layout == 'layout2') {
                return redirect()->route('layout2.show', $detail_konten->id)->with('success','Informasi detail konten berhasil ditambahkan');
            } elseif ($request->layout == 'layout3') {
                return redirect()->route('layout3.show', $detail_konten->id)->with('success','Informasi detail konten berhasil ditambahkan');
            } elseif ($request->layout == 'layout4') {
                return redirect()->route('layout4.show', $detail_konten->id)->with('success','Informasi detail konten berhasil ditambahkan');
            } elseif ($request->layout == 'layout5') {
                return redirect()->route('layout5.show', $detail_konten->id)->with('success','Informasi detail konten berhasil ditambahkan');
            } elseif ($request->layout == 'layout6') {
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
        return view('pages.admin.konten.create-detail', compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = DetailKonten::findOrFail($id);
        return view('pages.admin.konten.edit-detail', compact('data'));
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
        if ($detail_konten->delete()) {
            return redirect()->back()->with('success', 'Berhasil mengupdate data');            
        } else {
            return redirect()->back()->with('error', 'Gagal menambahkan data');
        }
    }
}
