<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Account;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class JadwalController extends Controller
{
     public function index(){
        return view('pages.admin.jemaat.jadwal');
     }
     
     public function create(){
      return view('pages.admin.jemaat.addJadwal');
  }
}
