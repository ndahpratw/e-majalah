<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;

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
        return view('pages.admin.komplain.create');
    }

    public function edit(){
        return view('pages.admin.komplain.edit');
    }
    
    
}
