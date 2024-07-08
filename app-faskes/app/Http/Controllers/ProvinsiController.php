<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Provinsi;

class ProvinsiController extends Controller
{
    //
    public function show(){
        $list_provinsi = Provinsi::all();
        return view('provinsi.show', ['list_provinsi'=>$list_provinsi]);
    }

    public function create()
    {
        $provinsi = new Provinsi();
        return view('provinsi.form',['provinsi'=>$provinsi]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi data inputan
        $request->validate([
            'nama' => 'required',
            'ibukota' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
        ]);

        if($request->id){  
            Provinsi::find($request->id)->update($request->all());
            // Redirect to the index page with a success message
            return redirect(route('provinsi.show'))->with('pesan', 'Data berhasil diupdate');
        }
        else{
            // Create a new Paramedik instance with the validated data
            Provinsi::create($request->all());
            // Redirect to the index page with a success message
            return redirect(route('provinsi.show'))->with('pesan', 'Data berhasil disimpan');
        }  
    }

    public function edit($id)
    {
        $provinsi = Provinsi::find($id);
        return view('provinsi.form',['provinsi'=>$provinsi]);
    }
    public function view($id)
    {
        $provinsi = Provinsi::find($id);
        return view('provinsi.view',['provinsi'=>$provinsi]);
    }
    public function destroy($id): RedirectResponse
    {
        Provinsi::find($id)->delete();
        return redirect(route('provinsi.show'))->with('pesan', 'Data berhasil dihapus');
    }
}
