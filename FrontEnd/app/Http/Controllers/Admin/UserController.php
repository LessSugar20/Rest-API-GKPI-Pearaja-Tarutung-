<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(){
        return view('pages.admin.regis');
    }

    public function do_reg(Request $request){
        // $request->validate([
        //     'nama' => 'required',
        //     'username' => 'required|min:5|unique:users',
        //     'password' => 'required|min:5'
        // ]);

        // $user = new User;
        // $user->username = $request['username'];
        // $user->password = Hash::make($request['password']);
        // $user->save();

        return redirect('admin/login')->with('status', 'Proses Registrasi Berhasil!');

    }
}
