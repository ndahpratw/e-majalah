<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request) {
        // dd($request);
        $request->validate([
            'email' => 'required|email',
            'password'=> 'required'
         ], [
            'email.required' => 'Kolom Email tidak boleh kosong.',
            'password.required' => 'Kolom Password tidak boleh kosong.',
        ]);


         if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();

            if ($user->role === 'Admin') {
                return redirect('/dashboard')->with('success', 'Selamat Datang di Sistem');
            } else if ($user->role === 'Mitra') {
                return redirect('/dashboard')->with('success', 'Selamat Datang di Sistem');
            } else {
                return redirect('/login')->with('wrong', 'Role tidak Ditemukan !');
            }
        } else {
            return redirect('/login')->with('wrong', 'Email dan password tidak tersedia');
        }
    }

    public function logout() {
        if (Auth::check()) {
            $role = Auth::user()->role;

           if ($role === 'Admin' || $role === 'Mitra') {
                Auth::logout();
                return redirect('/login');
            } else {
                return redirect('/');
            }
        }

    }

    public function dashboard() {
        $admin = DB::table('users')->where('role', 'Admin')->count();
        $mitra = DB::table('users')->where('role', 'Mitra')->count();
        $konten = DB::table('kontens')->count();
        $pengajuan_belum = DB::table('pengajuans')->where('status', 'Belum Diproses')->count();
        $pengajuan_diproses = DB::table('pengajuans')->where('status', 'Sedang Diproses')->count();
        $pengajuan_ditolak = DB::table('pengajuans')->where('status', 'Ditolak')->count();
        $pengajuan_selesai = DB::table('pengajuans')->where('status', 'Selesai')->count();
        $komplain_belum = DB::table('contact_us')->where('status', 'Belum Terbaca')->count();
        $komplain_diproses = DB::table('contact_us')->where('status', 'Proses')->count();
        $komplain_dihiraukan = DB::table('contact_us')->where('status', 'Dihiraukan')->count();
        $komplain_selesai = DB::table('contact_us')->where('status', 'Selesai')->count();

        return view('pages/admin/dashboard', compact('admin','mitra','konten', 'pengajuan_belum', 'pengajuan_diproses', 'pengajuan_ditolak', 'pengajuan_selesai', 'komplain_belum', 'komplain_diproses', 'komplain_dihiraukan', 'komplain_selesai',));
    }

}
