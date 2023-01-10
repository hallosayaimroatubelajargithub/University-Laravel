<?php

namespace App\Http\Controllers;

use App\Models\Adfaks;
use Illuminate\Http\Request;

class AdfaksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adfaks = Adfaks::all();
        return view('adfaks.index', compact("adfaks"));
        // untuk tampilan api, silahkan di uncomment
        // return Adfaks::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adfaks.create');
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
            'dekan' => 'required|'
        ]);    

        Adfaks::create($request->all());
        return redirect('/adfaks')->with('status', 'Fakultas Berhasil Ditambahkan!!');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Adfaks  $adfaks
     * @return \Illuminate\Http\Response
     */
    public function show(Adfaks $adfaks)
    {
        return view('adfaks.show', compact('adfaks'));
        // untuk tampilan api, silahkan di uncomment
        // return $adfaks;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adfaks  $adfaks
     * @return \Illuminate\Http\Response
     */
    public function edit(Adfaks $adfaks)
    {
        return view('adfaks.edit', compact("adfaks"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adfaks  $adfaks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adfaks $adfaks)
    {
        Adfaks::where('id', $adfaks->id)
                    ->update([
                        'nama' => $request->nama,
                        'dekan' => $request->dekan,
                    ]);
        return redirect('/adfaks')->with('status', 'Fakultas Berhasil di Ubah!!');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adfaks  $adfaks
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adfaks $adfaks)
    {
        Adfaks::destroy($adfaks->id);
        return redirect('/adfaks')->with('status', 'Fakultas Berhasil Dihapus!!');
        // untuk tampilan api, silahkan di uncomment
        // return $adfaks;
    }
}
