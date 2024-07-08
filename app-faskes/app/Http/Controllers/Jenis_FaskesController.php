<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Jenis_Faskes;

class Jenis_FaskesController extends Controller
{
    //
    public function show(){
        $list_jenis_faskes = Jenis_Faskes::all();
        return view('jenis_faskes.show', ['list_jenis_faskes'=>$list_jenis_faskes]);
    }

    public function create()
    {
        $jenis_faskes = new Jenis_Faskes();
        return view('jenis_faskes.form',['jenis_faskes'=>$jenis_faskes]);
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
            Jenis_Faskes::find($request->id)->update($request->all());
            // Redirect to the index page with a success message
            return redirect(route('jenis_faskes.show'))->with('pesan', 'Data berhasil diupdate');
        }
        else{
            // Create a new Jenis_Faskes instance with the validated data
            Jenis_Faskes::create($request->all());
            // Redirect to the index page with a success message
            return redirect(route('jenis_faskes.show'))->with('pesan', 'Data berhasil disimpan');
        }  
    }

    public function edit($id)
    {
        $jenis_faskes = Jenis_Faskes::find($id);
        return view('jenis_faskes.form',['jenis_faskes'=>$jenis_faskes]);
    }
    public function view($id)
    {
        $jenis_faskes = Jenis_Faskes::find($id);
        return view('jenis_faskes.view',['jenis_faskes'=>$jenis_faskes]);
    }
    public function destroy($id): RedirectResponse
    {
        Jenis_Faskes::find($id)->delete();
        return redirect(route('jenis_faskes.show'))->with('pesan', 'Data berhasil dihapus');
    }
}
