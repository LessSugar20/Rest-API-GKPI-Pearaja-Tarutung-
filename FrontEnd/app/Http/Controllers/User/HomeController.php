<?php

namespace App\Http\Controllers\User;

use App\Models\Ayat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    public function beranda(){
        $now = Carbon::today();
        $ayat = Ayat::Join('alkitab', 'alkitab.id', '=', 'ayat.id_alkitab')
        ->select('alkitab.*', 'ayat.*')
        ->where('ayat.tanggal', '=', $now)
        ->get();
        return view('pages.user.home', compact('ayat'));
    }
}
