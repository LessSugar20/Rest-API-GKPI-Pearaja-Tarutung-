<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Account;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PendaftaranController extends Controller
{
     public function index_malua(){
        return view('pages.user.pendaftaran.malua');
     }

     public function index_tardidi(){
          return view('pages.user.pendaftaran.tardidi');
     }

     public function index_menikah(){
          return view('pages.user.pendaftaran.menikah');
     }
     
}
