<?php

namespace App\Http\Controllers\Admin;

use App\Models\Dana;
use App\Models\Account;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Validator;

class KeuanganController extends Controller
{
    private $client;
    private $body;

    public function __construct(){
        $this->client = new Client();
    }

     public function index(){
        $client = new Client();
        $response = $client->request('GET', 'http://localhost:8080/keuangan');
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        $dana = json_decode($body, true);
         return view('pages.admin.jemaat.keuangan', compact('dana'));
     }

     public function create(){
        return view('pages.admin.jemaat.addKeuangan', ['dana' => new Dana]);
     }
     
     public function store(Request $request)
    {
        $validators = Validator::make($request->all(), [
            'keterangan' => 'required',  
            'deskripsi' => 'required',
            'tanggal' => 'required',
            'kategori' => 'required',
            'nominal' => 'required'
        ]);

        try {
            $this->body = [
                'keterangan' => $request->keterangan,
                'deskripsi' => $request->deskripsi,
                'tanggal' => $request->tanggal,
                'kategori' => $request->kategori,
                'nominal' => intval($request->nominal),
            ];
            $response = $this->client->request('POST', 'http://localhost:8080/keuangan', [
                'body' => json_encode($this->body)
            ]);
            $dana = json_decode($response->getBody()->getContents());
            return redirect('admin/jemaat/keuangan')->with('success', 'Keuangan Berhasil Ditambahkan');
        } catch (\Exception $e){
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ]);
        }

        // dd($request);
        $dana = new Dana;
        $dana->keterangan = $request->keterangan;
        $dana->deskripsi = $request->deskripsi;
        $dana->tanggal = $request->tanggal;
        $dana->kategori = $request->kategori;
        $dana->nominal = $request->nominal;
        $dana->created_by = Auth::user()->id;
        $dana->save();

        if (Auth::user()->hasRole('admin')) {
            return redirect('admin/jemaat/keuangan')->with('success', 'Keuangan Berhasil Ditambahkan');            
        }else{
            return redirect('sek/jemaat/keuangan')->with('success', 'Keuangan Berhasil Ditambahkan');            
        }
    }

    public function destroy($id){
        $client = new Client();
        $response = $client->request('delete','http://localhost:8080/keuangan'.'/'.$id);
        return back()->with('success','Berhasil dihapus');
    }

    public function edit($id){
        $dana = Dana::find($id);
        return view('pages.admin.jemaat.addKeuangan', compact('dana'));
    }

    public function update(Request $request, $id){
        $dana = Dana::find($id);
        $dana->keterangan = $request->keterangan;
        $dana->deskripsi = $request->deskripsi;
        $dana->tanggal = $request->tanggal;
        $dana->kategori = $request->kategori;
        $dana->nominal = $request->nominal;
        $dana->created_by = Auth::user()->id;
        $dana->update();

        if (Auth::user()->hasRole('admin')) {
            return redirect('admin/jemaat/keuangan')->with('update', 'Keuangan Berhasil Diedit');            
        }else{
            return redirect('sek/jemaat/keuangan')->with('update', 'Keuangan Berhasil Diedit');            
        }
    }
}
