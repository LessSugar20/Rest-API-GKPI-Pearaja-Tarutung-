<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Account;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class JemaatController extends Controller
{
    public function index_jemaat(){
          return view('pages.user.jemaat.jemaat');
    }

    public function index_pengurus(){
          return view('pages.user.jemaat.pengurus');
    }

    public function index_distrik(){
          return view('pages.user.jemaat.distrik');
    }

    public function index_keuangan(){
            return view('pages.user.jemaat.keuangan');
    }
    
}
