<?php

namespace App\Http\Controllers\Admin;

use App\Models\Ayat;
use App\Models\Alkitab;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Validator;

class AyatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $client = new Client();
        $response = $client->request('GET', 'http://localhost:9090/ayat');
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();
        $ayat = json_decode($body, true);
        return view('pages.admin.ayat.ayat', compact('ayat'));
   }
   
   public function create(){
        $kitab = Alkitab::get();
        return view('pages.admin.ayat.addAyat', ['kitab' => $kitab, 'data' => new Ayat]);
   }    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validators = Validator::make($request->all(), [
            'id_alkitab' => 'required',  
            'tanggal' => 'required'         
        ]);
        
        $ayat = new Ayat;
        $ayat->id_alkitab = $request->id_alkitab;
        $ayat->deskripsi = $request->deskripsi;
        $ayat->tanggal = $request->tanggal;
        $ayat->save();

        if (Auth::user()->hasRole('admin')) {
            return redirect('admin/ayat')->with('success', 'Ayat Berhasil Ditambahkan');
        }else{
            return redirect('sek/ayat')->with('success', 'Ayat Berhasil Ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ayat = Ayat::find($id);
        $ayat->delete();

        if (Auth::user()->hasRole('admin')) {
            return redirect('admin/ayat')->with('success', 'Ayat Berhasil Ditambahkan');
        }else{
            return redirect('sek/ayat')->with('success', 'Ayat Berhasil Ditambahkan');
        }
    }
}
