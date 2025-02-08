<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;
use App\Models\DetailKonten;

class ContactUsController extends Controller
{
    public function index() {
        $no = 1;
        // Mengambil data contact_us terbaru berdasarkan created_at (dari yang terbaru ke yang lama)
        $contact_us = ContactUs::orderBy('created_at', 'desc')->where('id_mitra',auth()->user()->id)->get();
        return view('pages.admin.komplain.index', compact('no', 'contact_us'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'status' => 'required|in:Belum Terbaca,Dihiraukan,Proses,Selesai',
        ]);
    
        $contactUs = ContactUs::findOrFail($id);
        $contactUs->status = $request->status;
        $contactUs->save();
    
        return redirect()->back()->with('success', 'Status berhasil diperbarui.');
    }

    public function create(){
        $detail_konten = DetailKonten::where('id_mitra',auth()->user()->id)->get();
        return view('pages.admin.komplain.create', compact('detail_konten'));
    }

    public function store(Request $request) {
        // dd($request);
        $request->validate([
           'judul' => 'required',
           'catatan' => 'required',
       ]);

       $komplain=new ContactUs();
       $komplain->id_mitra=auth()->user()->id;
       $komplain->id_detail_konten=$request->judul;
       $komplain->catatan=$request->catatan;
       $komplain->status='Belum Terbaca';

       if ($komplain->save()) {
           return redirect()->route('komplain.index')->with("success","Data Berhasil Disimpan");
       } else {
           return redirect()->route('komplain.index')->with("error","Gagal Menambahkan Data");
       }
   }

   public function destroy($id) {
        $data = ContactUs::find($id);
        if ($data->delete()){
            return redirect()->back()->with("success","Data User Berhasil Dihapus");
        } else {
            return redirect()->back()->with('error', 'Gagal Menghapus Data User');
    }
    }
    
    
}
