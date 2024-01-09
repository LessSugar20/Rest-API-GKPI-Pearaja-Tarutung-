<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Account;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Validator;

class JemaatController extends Controller
{
     public function index(){
      $client = new Client();
      $response = $client->request('GET', 'http://localhost:1010/jemaat');
      $statusCode = $response->getStatusCode();
      $body = $response->getBody()->getContents();

      $jemaat = json_decode($body, true);
        return view('pages.admin.jemaat.jemaat',compact('jemaat'));

     }
     public function create(){
         return view('pages.admin.jemaat.addJemaat');
  }
}
