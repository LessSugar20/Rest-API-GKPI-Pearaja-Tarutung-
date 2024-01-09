<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Account;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Hash;

class AkunController extends Controller
{
     public function index(){
          $akun = User::get()->all();
          $i = 1;
          return view('pages.admin.akun.akun', compact('i', 'akun'));
     }
     
     public function create(){
          return view('pages.admin.akun.add');
     }

     public function store(Request $request)
    {
        $validators = Validator::make($request->all(), [
            'username' => 'required|min:5|unique:users',
            'password' => 'required|min:5',  
            'fullname' => 'required'         
        ]);
        
        
        $akun = new User;
        $akun->created_by = Auth::user()->id;
        $akun->username = $request->username;
        $akun->fullname = $request->fullname;
        $akun->password = Hash::make($request->password);
        $akun->assignRole('sekretariat');
        $akun->save();
        
        return redirect('admin/akun')->with('success', 'Akun Berhasil Ditambahkan');
    }

     public function destroy(string $id)
     {
         $akun = User::find($id);
         $akun->delete();
 
         return redirect("admin/akun")->with('sdelete','Akun berhasil dihapus!');
     }
}
