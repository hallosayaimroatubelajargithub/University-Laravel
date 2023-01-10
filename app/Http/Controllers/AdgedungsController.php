<?php

namespace App\Http\Controllers;

use App\Models\Adgedungs;
use Illuminate\Http\Request;

class AdgedungsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adgedungs = Adgedungs::all();
        return view('adgedungs.index', compact("adgedungs"));
        // untuk tampilan api, silahkan di uncomment
        // return Adgedungs::all();
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
        ]);    

        Adgedungs::create($request->all());
        return redirect('/adgedungs')->with('status', 'Data Gedung Berhasil Ditambahkan!!');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Adgedungs  $adgedungs
     * @return \Illuminate\Http\Response
     */
    public function show(Adgedungs $adgedungs)
    {
        return view('adgedungs.show', compact('adgedungs'));
        // untuk tampilan api, silahkan di uncomment
        // return $adgedungs;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adgedungs  $adgedungs
     * @return \Illuminate\Http\Response
     */
    public function edit(Adgedungs $adgedungs)
    {
        return view('adgedungs.edit', compact("adgedungs"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adgedungs  $adgeudngs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adgedungs $adgedungs)
    {
        Adfaks::where('id', $adgedungs->id)
                    ->update([
                        'nama' => $request->nama,
                    ]);
        return redirect('/adgedungs')->with('status', 'Data Gedung Berhasil di Ubah!!');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adgedungs  $adgedungs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adgedungs $adgedungs)
    {
        Adgedungs::destroy($adgedungs->id);
        return redirect('/adgedungs')->with('status', 'Data Gedung Berhasil Dihapus!!');
        // untuk tampilan api, silahkan di uncomment
        // return $adgedungs;
    }
}
