<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Account;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class PengumumanController extends Controller
{
    public function register(){
        return view('pages.user.registration');
    }

    public function index(){
        return view('pages.user.pengumuman.pengumuman');
    }
    
}
