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
        //
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
    public function update(Request $request, Konten $konten)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Konten $konten)
    {
        //
    }
}
