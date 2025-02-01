<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        $no = 1;
        $data_user = User::all();
        return view('pages.admin.data-user.index', compact('no','data_user'));
    }

    public function create() {
        return view('pages.admin.data-user.create');
    }

    public function store(Request $request) {
         // dd($request);
         $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'alamat' => 'required',
            'telepon' => 'required|numeric|digits_between:12,15',
            'role' => 'required',
        ]);

        $user=new User();
        $user->name=$request->nama;
        $user->email=$request->email;
        $user->no_telepon=$request->telepon;
        $user->role=$request->role;
        $user->password=Hash::make($request->password);
        $user->address=$request->alamat;
        $user->instansi=$request->instansi;

        if ($user->save()) {
            return redirect()->route('data-user.index')->with("success","Data User Berhasil Disimpan");
        } else {
            return redirect()->route('data-user.index')->with("error","Gagal Menambahkan Data");
        }
    }

    public function edit($id) {
        $data = User::find($id);
        return view('pages.admin.data-user.edit', compact('data'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
            'telepon' => 'required|numeric|digits_between:12,15',
            'role' => 'required',
        ]);

        $user=User::find($id);

        if ($request->filled('password')) {
            $password=Hash::make($request->password);
        } else {
            $password = $user->password;
        }

        $user->name=$request->nama;
        $user->email=$request->email;
        $user->password = $password;
        $user->address=$request->alamat;
        $user->no_telepon=$request->telepon;
        $user->role=$request->role;
        $user->instansi=$request->instansi;

        if ($user->save()) {
            return redirect()->route('data-user.index')->with("success","Data User Berhasil Diupdate");
        } else {
            return redirect()->route('data-user.index')->with("error","Gagal Mengupdate Data");
        }
    }

    public function destroy($id) {
        $data = User::find($id);
        if ($data->delete()){
            return redirect()->back()->with("success","Data User Berhasil Dihapus");
        } else {
            return redirect()->back()->with('error', 'Gagal Menghapus Data User');
        }
    }

    public function register(Request $request) {
        // dd($request);
        $request->validate([
           'nama' => 'required',
           'email' => 'required|email|unique:users,email',
           'password' => 'required',
           'alamat' => 'required',
           'telepon' => 'required|numeric|digits_between:12,15',
       ]);

       $user=new User();
       $user->name=$request->nama;
       $user->email=$request->email;
       $user->no_telepon=$request->telepon;
       $user->role='Mitra';
       $user->password=Hash::make($request->password);
       $user->address=$request->alamat;
       $user->instansi=$request->instansi;

       if ($user->save()) {
           return redirect('/daftar-isi')->with("success","Data Berhasil Disimpan. Silahkan login pada Sistem !");
       } else {
           return redirect('/daftar-isi')->with("error","Gagal Menambahkan Data");
       }
   }
}
