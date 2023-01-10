<?php

namespace App\Http\Controllers;

use App\Models\Adruangs;
use Illuminate\Http\Request;

class AdruangsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adruangs = Adruangs::all();
        return view('adruangs.index', compact("adruangs"));
        // untuk tampilan api, silahkan di uncomment
        // return Adruangs::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adruangs.create');
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
            'penanggung_jawab' => 'required'
        ]);    

        Adruangs::create($request->all());
        return redirect('/adruangs')->with('status', 'Ruang Berhasil Ditambahkan!!');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Adruangs  $adruangs
     * @return \Illuminate\Http\Response
     */
    public function show(Adruangs $adruangs)
    {
        return view('adruangs.show', compact('adruangs'));
        // untuk tampilan api, silahkan di uncomment
        // return $adruangs;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adruangs  $adruangs
     * @return \Illuminate\Http\Response
     */
    public function edit(Adruangs $adruangs)
    {
        return view('adruangs.edit', compact("adruangs"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adruangs  $adruangs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adruangs $adruangs)
    {
        Adruangs::where('id', $adruangs->id)
                    ->update([
                        'penanggung_jawab' => $request->penanggung_jawab,
                    ]);
        return redirect('/adruangs')->with('status', 'Ruang Berhasil di Ubah!!');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adruangs  $adruangs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adruangs $adruangs)
    {
        Adruangs::destroy($adruangs->id);
        return redirect('/adruangs')->with('status', 'Ruang Berhasil Dihapus!!');
        // untuk tampilan api, silahkan di uncomment
        // return $adruangs;
    }
}
