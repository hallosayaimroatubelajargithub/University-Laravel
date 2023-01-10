<?php

namespace App\Http\Controllers;

use App\Models\Adpegas;
use Illuminate\Http\Request;

class AdpegasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adpegas = Adpegas::all();
        return view('adpegas.index', compact("adpegas"));
        // untuk tampilan api, silahkan di uncomment
        // return Adpegas::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adpegas.create');
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

        Adpegas::create($request->all());
        return redirect('/adpegas')->with('status', 'Data Pegawai Berhasil Ditambahkan!!');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Adpegas  $adpegas
     * @return \Illuminate\Http\Response
     */
    public function show(Adpegas $adpegas)
    {
        return view('adpegas.show', compact('adpegas'));
        // untuk tampilan api, silahkan di uncomment
        // return $adpegas;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adpegas  $adpegas
     * @return \Illuminate\Http\Response
     */
    public function edit(Adpegas $adpegas)
    {
        return view('adpegas.edit', compact("adpegas"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adpegas  $adpegas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adpegas $adpegas)
    {
        Adpegas::where('id', $adpegas->id)
                    ->update([
                        'nama' => $request->nama,
                        'jk' => $request->jk,
                        'jabatan' => $request->jabatan,
                    ]);
        return redirect('/adpegas')->with('status', 'Data Pegawai Berhasil di Ubah!!');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adpegas  $adpegas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adpegas $adpegas)
    {
        Adpegas::destroy($adpegas->id);
        return redirect('/adpegas')->with('status', 'Data Pegawai Berhasil Dihapus!!');
        // untuk tampilan api, silahkan di uncomment
        // return $adpegas;
    }
}
