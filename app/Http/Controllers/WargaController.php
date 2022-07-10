<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    public function namaFunction()
    {
        $warga = Warga::all();
        return view("warga.index", compact(['warga']));
        // warga.index = berarti di view/warga/index.blade.php
        // compact(['namaVariable'])
    }

    public function namaFunctionCreate()
    {
        return view('warga.create');
    }

    public function namaFunctionStore(Request $request)
    {
        Warga::create($request->except('_token', 'submit')); // untuk memasuk input ke dalam database
        return redirect('/warga');
    }

    public function namaFunctionEdit($id)
    {
        $warga = Warga::find($id);
        return view('warga.edit', compact(['warga']));
    }

    public function namaFunctionUpdate($id, Request $request)
    {
        $warga = Warga::find($id);
        $warga->update($request->except(['_token', 'submit']));
        return redirect('/warga');
    }

    public function namaFunctionDelete($id)
    {
        $warga = Warga::find($id);
        $warga->delete();
        return redirect('/warga');
    }
}
