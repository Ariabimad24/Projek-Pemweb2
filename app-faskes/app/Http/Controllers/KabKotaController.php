<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\KabKota;
use App\Models\Provinsi;


class KabKotaController extends Controller
{
    //
    public function show(){
        $list_kabkota = KabKota::all();
        return view('kabkota.show', ['list_kabkota'=>$list_kabkota]);
    }

    public function create()
    {
        $list_provinsi = Provinsi::all();
        $kabkota = new KabKota();
        return view('kabkota.form',['kabkota'=>$kabkota,'list_provinsi'=>$list_provinsi]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi data inputan
        $request->validate([
            'nama' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'provinsi_id' => 'required',
        ]);

        if($request->id){  
            KabKota::find($request->id)->update($request->all());
            // Redirect to the index page with a success message
            return redirect(route('kabkota.show'))->with('pesan', 'Data berhasil diupdate');
        }
        else{
        //     // Create a new KabKota instance with the validated data
             KabKota::create($request->all());
        //     // Redirect to the index page with a success message
            return redirect(route('kabkota.show'))->with('pesan', 'Data berhasil disimpan');
        }  
    }

    public function edit($id)
    {
        $kabkota = KabKota::find($id);
        $list_provinsi = Provinsi::all();
        return view('kabkota.form',['kabkota'=>$kabkota,'list_provinsi'=>$list_provinsi]);
    }
    public function view($id)
    {
        $kabkota = KabKota::find($id);
        return view('kabkota.view',['kabkota'=>$kabkota]);
    }
    public function destroy($id): RedirectResponse
    {
        KabKota::find($id)->delete();
        return redirect(route('kabkota.show'))->with('pesan', 'Data berhasil dihapus');
    }
}
