<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Account;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PengurusController extends Controller
{
     public function index(){
        return view('pages.admin.jemaat.pengurus');
     }
     public function create(){
      return view('pages.admin.jemaat.addPengurus');
  }
}
