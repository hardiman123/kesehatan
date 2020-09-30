<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\table_categori;

class WebController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function depan(Request $request)
    {
        $table_categoris = table_categori::all();
        if($request->has('cari')){
            $table_categoris = table_categori::where('nama_fasilitas','LIKE','%' .$request->cari. '%')->get();
        }
        // dd($table_categoris);   
        return view('depan',['data' => $table_categoris]);
    }
    public function jelas()
    {
        return view('jelas');
    }
    public function about()
    {
        return view('about');
    }
}
