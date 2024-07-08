<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Faskes;
use App\Models\KabKota;
use App\Models\Kategori;
use App\Models\Jenis_Faskes;

class FaskesController extends Controller
{
    //
    public function show(){
        $list_faskes = Faskes::all();
        return view('faskes.show', ['list_faskes'=>$list_faskes]);
    }

    public function create()
    {
        $list_kabkota = KabKota::all();
        $list_kategori = Kategori::all();
        $list_jenis_faskes = Jenis_Faskes::all();
        $faskes = new Faskes();
        return view('faskes.form',['faskes'=>$faskes, 'list_kabkota'=>$list_kabkota, 'list_kategori'=>$list_kategori, 'list_jenis_faskes'=>$list_jenis_faskes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi data inputan
        $request->validate([
            'nama' => 'required',
            'nama_pengelola' => 'required',
            'alamat' => 'required',
            'website' => 'required',
            'email' => 'required',           
            'rating' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'kabkota_id' => 'required',
            'kategori_id' => 'required',
            'jenis_faskes_id' => 'required',
        ]);

        if($request->id){  
            Faskes::find($request->id)->update($request->all());
            // Redirect to the index page with a success message
            return redirect(route('faskes.show'))->with('pesan', 'Data berhasil diupdate');
        }
        else{
            // Create a new KabKota instance with the validated data
            Faskes::create($request->all());
            // Redirect to the index page with a success message
            return redirect(route('faskes.show'))->with('pesan', 'Data berhasil disimpan');
        }  
    }

    public function edit($id)
    {
        $faskes = Faskes::find($id);
        $list_kabkota = KabKota::all();
        $list_kategori = Kategori::all();
        $list_jenis_faskes = Jenis_Faskes::all();
        return view('faskes.form',['faskes'=>$faskes, 'list_kabkota'=>$list_kabkota,'list_kategori'=>$list_kategori, 'list_jenis_faskes'=>$list_jenis_faskes]);
    }
    public function view($id)
    {
        $faskes = Faskes::find($id);
        return view('faskes.view',['faskes'=>$faskes]);
    }
    public function destroy($id): RedirectResponse
    {
        Faskes::find($id)->delete();
        return redirect(route('faskes.show'))->with('pesan', 'Data berhasil dihapus');
    }
}
