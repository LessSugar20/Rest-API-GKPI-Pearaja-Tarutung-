<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Account;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Validator;

class MaluaController extends Controller
{
   public function index(){
      $client = new Client();
      $response = $client->request('GET', 'http://localhost:2020/malua');
      $statusCode = $response->getStatusCode();
      $body = $response->getBody()->getContents();

      $malua = json_decode($body, true);
        return view('pages.admin.pendaftaran.malua', compact('malua'));
     }
     
   
     public function destroy($id){
      $client = new Client();
      $response = $client->request('delete','http://localhost:2020/malua'.'/'.$id);
      return back()->with('success','Berhasil dihapus');
  }

}
