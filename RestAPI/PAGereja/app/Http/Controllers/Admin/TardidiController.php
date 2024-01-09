<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Account;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TardidiController extends Controller
{
     public function index(){
          return view('pages.admin.pendaftaran.tardidi');
     }

     
}
