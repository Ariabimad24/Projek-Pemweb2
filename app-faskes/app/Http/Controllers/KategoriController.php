<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Kategori;

class KategoriController extends Controller
{
    //
    public function show(){
        $list_kategori = Kategori::all();
        return view('kategori.show', ['list_kategori'=>$list_kategori]);
    }

    public function create()
    {
        $kategori = new Kategori();
        return view('kategori.form',['kategori'=>$kategori]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi data inputan
        $request->validate([
            'nama' => 'required',
        ]);

        if($request->id){  
            Kategori::find($request->id)->update($request->all());
            // Redirect to the index page with a success message
            return redirect(route('kategori.show'))->with('pesan', 'Data berhasil diupdate');
        }
        else{
            // Create a new Paramedik instance with the validated data
            Kategori::create($request->all());
            // Redirect to the index page with a success message
            return redirect(route('kategori.show'))->with('pesan', 'Data berhasil disimpan');
        }  
    }

    public function edit($id)
    {
        $kategori = Kategori::find($id);
        return view('kategori.form',['kategori'=>$kategori]);
    }
    public function view($id)
    {
        $kategori = Kategori::find($id);
        return view('kategori.view',['kategori'=>$kategori]);
    }
    public function destroy($id): RedirectResponse
    {
        Kategori::find($id)->delete();
        return redirect(route('kategori.show'))->with('pesan', 'Data berhasil dihapus');
    }
}
