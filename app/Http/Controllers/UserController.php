<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

    public function store() {
        
    }

    public function edit($id) {
        $data = User::find($id);
        return view('pages.admin.data-user.edit', compact('data'));
    }

    public function update() {
        
    }

    public function destroy() {
        
    }
}
