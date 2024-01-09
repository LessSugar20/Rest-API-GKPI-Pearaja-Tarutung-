<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Traits\HasRoles;

class AuthController extends Controller
{
    public function index(){
        return view('pages.admin.login');
    }

    public function login_action(Request $request){
        $credentials = $request->validate([
            'username' => 'required|min:5',
            'password' => 'required|min:5',
        ]);
        
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();
            if(Auth::user()->hasRole('admin')){

                return redirect()->intended('admin/')->with('success','Anda berhasil login!');    
            }
            else{
                return redirect()->intended('sek/')->with('success','Anda berhasil login!');    
            }

        }
        $acc = User::where('username', '=',$request->username)->first();
        $pass = User::all();
        $status = 0;
        foreach($pass as $p){
            if (Hash::check($request->password, $p->password, [])){
                $status = 1;
                break;
            }
        }
        if(!$acc && !$status){
            return back()->with('loginError', 'Username dan Password anda salah!');
        }
        else if(!$acc && $status){
                return back()->with('loginError', 'Username anda salah!');
        }
        else {
                return back()->with('loginError', 'Password anda salah!');            
        }
       
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
