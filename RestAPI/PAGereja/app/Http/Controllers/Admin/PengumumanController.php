<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Account;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Validator;

class PengumumanController extends Controller
{
     public function index(){
      $client = new Client();
      $response = $client->request('GET', 'http://localhost:3030/pengumuman');
      $statusCode = $response->getStatusCode();
      $body = $response->getBody()->getContents();

      $pengumuman = json_decode($body, true);
        return view('pages.admin.jemaat.pengumuman',compact('pengumuman'));
     }
     public function create(){
      return view('pages.admin.jemaat.addPengumuman');
  }
}
