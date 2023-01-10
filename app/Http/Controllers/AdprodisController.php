<?php

namespace App\Http\Controllers;

use App\Models\Adprodis;
use Illuminate\Http\Request;

class AdprodisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adprodis = Adprodis::all();
        return view('adprodis.index', compact("adprodis"));
        // untuk tampilan api, silahkan di uncomment
        // return Adprodis::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adprodis.create');
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
            'nama' => 'required'
        ]);    

        Adprodis::create($request->all());
        return redirect('/adprodis')->with('status', 'Program Studi Berhasil Ditambahkan!!');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Adprodis  $adprodis
     * @return \Illuminate\Http\Response
     */
    public function show(Adprodis $adprodis)
    {
        return view('adprodis.show', compact('adprodis'));
        // untuk tampilan api, silahkan di uncomment
        // return $adprodis;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adprodis  $adprodis
     * @return \Illuminate\Http\Response
     */
    public function edit(Adprodis $adprodis)
    {
        return view('adprodis.edit', compact("adprodis"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adprodis  $adprodis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adprodis $adprodis)
    {
        Adprodis::where('id', $adprodis->id)
                    ->update([
                        'nama' => $request->nama,
                    ]);
        return redirect('/adprodis')->with('status', 'Program Studi Berhasil di Ubah!!');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adprodis  $adprodis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adprodis $adprodis)
    {
        Adprodis::destroy($adprodis->id);
        return redirect('/adprodis')->with('status', 'Program Studi Berhasil Dihapus!!');
        // untuk tampilan api, silahkan di uncomment
        // return $adprodis;
    }
}
