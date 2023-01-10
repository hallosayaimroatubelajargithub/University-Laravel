<?php

namespace App\Http\Controllers;

use App\Models\Adosens;
use Illuminate\Http\Request;

class AdosensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adosens = Adosens::all();
        return view('adosens.index', compact("adosens"));
        // untuk tampilan api, silahkan di uncomment
        // return Adosens::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adosens.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jk' => 'required|'
        ]);    

        Adosens::create($request->all());
        return redirect('/adosens')->with('status', 'Data Dosen Berhasil Ditambahkan!!');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Adosens  $adosens
     * @return \Illuminate\Http\Response
     */
    public function show(Adosens $adosens)
    {
        return view('adosens.show', compact('adosens'));
        // untuk tampilan api, silahkan di uncomment
        // return $adosens;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adosens  $adosens
     * @return \Illuminate\Http\Response
     */
    public function edit(Adosens $adosens)
    {
        return view('adosens.edit', compact("adosens"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adosens  $adosens
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adosens $adosens)
    {
        Adosens::where('id', $adosens->id)
                    ->update([
                        'nama' => $request->nama,
                        'jk' => $request->jk,
                        'dosen_matkul' => $request->dosen_matkul,
                    ]);
        return redirect('/adosens')->with('status', 'Data Dosen Berhasil di Ubah!!');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adosens  $adosens
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adosens $adosens)
    {
        Adosens::destroy($adosens->id);
        return redirect('/adosens')->with('status', 'Data Dosen Berhasil Dihapus!!');
        // untuk tampilan api, silahkan di uncomment
        // return $adosens;
    }
}
