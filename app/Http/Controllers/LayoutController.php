<?php

namespace App\Http\Controllers;

use App\Models\Layout1;
use App\Models\Layout2;
use App\Models\Layout3;
use App\Models\Layout4;
use App\Models\Layout5;
use App\Models\Layout6;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DetailKonten;

class LayoutController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // dd($id);
        if (Layout1::where('id_detail_konten', $id)->exists()) {
            $data = DetailKonten::findOrFail($id);
            $isi = Layout1::where('id_detail_konten', $id)->first();
            return view('pages.user.layout-majalah.layout1', compact('data','isi'));
        } elseif (Layout2::where('id_detail_konten', $id)->exists()) {
            $data = DetailKonten::findOrFail($id);
            $isi = Layout2::where('id_detail_konten',$id)->first();
            return view('pages.user.layout-majalah.layout2', compact('data','isi'));
        } elseif (Layout3::where('id_detail_konten', $id)->exists()) {
            $data = DetailKonten::findOrFail($id);
            $isi = Layout3::where('id_detail_konten',$id)->first();
            return view('pages.user.layout-majalah.layout3', compact('data','isi'));
        } elseif (Layout4::where('id_detail_konten', $id)->exists()) {
            $data = DetailKonten::findOrFail($id);
            $isi = Layout4::where('id_detail_konten',$id)->first();
            return view('pages.user.layout-majalah.layout4', compact('data','isi'));
        } elseif (Layout5::where('id_detail_konten', $id)->exists()) {
            $data = DetailKonten::findOrFail($id);
            $isi = Layout5::where('id_detail_konten',$id)->first();
            return view('pages.user.layout-majalah.layout5', compact('data','isi'));
        } elseif (Layout6::where('id_detail_konten', $id)->exists()) {
            $data = DetailKonten::findOrFail($id);
            $isi = Layout6::where('id_detail_konten',$id)->first();
            return view('pages.user.layout-majalah.layout6', compact('data','isi'));
        } else {
            return "not found";
        }
    }

    public function carijudul($judul)
    {
        $data_pengajuan = DetailKonten::where('judul', $judul)->firstOrFail();
        if (Layout1::where('id_detail_konten', $data_pengajuan->id)->exists()) {
            $data = DetailKonten::findOrFail($data_pengajuan->id);
            $isi = Layout1::where('id_detail_konten', $data_pengajuan->id)->first();
            return view('pages.user.layout-majalah.layout1', compact('data','isi'));
        } elseif (Layout2::where('id_detail_konten', $data_pengajuan->id)->exists()) {
            $data = DetailKonten::findOrFail($data_pengajuan->id);
            $isi = Layout2::where('id_detail_konten',$data_pengajuan->id)->first();
            return view('pages.user.layout-majalah.layout2', compact('data','isi'));
        } elseif (Layout3::where('id_detail_konten', $data_pengajuan->id)->exists()) {
            $data = DetailKonten::findOrFail($data_pengajuan->id);
            $isi = Layout3::where('id_detail_konten',$data_pengajuan->id)->first();
            return view('pages.user.layout-majalah.layout3', compact('data','isi'));
        } elseif (Layout4::where('id_detail_konten', $data_pengajuan->id)->exists()) {
            $data = DetailKonten::findOrFail($data_pengajuan->id);
            $isi = Layout4::where('id_detail_konten',$data_pengajuan->id)->first();
            return view('pages.user.layout-majalah.layout4', compact('data','isi'));
        } elseif (Layout5::where('id_detail_konten', $data_pengajuan->id)->exists()) {
            $data = DetailKonten::findOrFail($data_pengajuan->id);
            $isi = Layout5::where('id_detail_konten',$data_pengajuan->id)->first();
            return view('pages.user.layout-majalah.layout5', compact('data','isi'));
        } elseif (Layout6::where('id_detail_konten', $data_pengajuan->id)->exists()) {
            $data = DetailKonten::findOrFail($data_pengajuan->id);
            $isi = Layout6::where('id_detail_konten',$data_pengajuan->id)->first();
            return view('pages.user.layout-majalah.layout6', compact('data','isi'));
        } else {
            return "not found";
        }
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
