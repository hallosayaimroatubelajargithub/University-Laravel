<?php

namespace App\Http\Controllers;

use App\Models\Adkhs;
use Illuminate\Http\Request;

class AdkhsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adkhs = Adkhs::all();
        return view('adkhs.index', compact("adkhs"));
        // untuk tampilan api, silahkan di uncomment
        // return Adkhs::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adkhs.create');
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
            'id_mhs' => 'required',
            'id_matkul' => 'required|'
        ]);    

        Adkhs::create($request->all());
        return redirect('/adkhs')->with('status', 'KHS Berhasil Ditambahkan!!');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Adkhs  $adkhs
     * @return \Illuminate\Http\Response
     */
    public function show(Adkhs $adkhs)
    {
        return view('adkhs.show', compact('adkhs'));
        // untuk tampilan api, silahkan di uncomment
        // return $adkhs;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adkhs  $adkhs
     * @return \Illuminate\Http\Response
     */
    public function edit(Adkhs $adkhs)
    {
        return view('adkhs.edit', compact("adkhs"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adkhs  $adkhs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adkhs $adkhs)
    {
        Adkhs::where('id', $adkhs->id)
                    ->update([
                        'id_mhs' => $request->id_mhs,
                        'id_matkul' => $request->id_matkul,
                    ]);
        return redirect('/adkhs')->with('status', 'KHS Berhasil di Ubah!!');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adkhs  $adkhs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adkhs $adkhs)
    {
        Adkhs::destroy($adkhs->id);
        return redirect('/adkhs')->with('status', 'KHS Berhasil Dihapus!!');
        // untuk tampilan api, silahkan di uncomment
        // return $adkhs;
    }
}
