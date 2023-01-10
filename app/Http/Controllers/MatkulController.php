<?php

namespace App\Http\Controllers;

use App\Models\Matkuls;
use Illuminate\Http\Request;

class MatkulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matkul = Matkuls::all();
        return view('matkul.index', compact("matkul"));
        // untuk tampilan api, silahkan di uncomment
        // return Matkuls::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('matkul.create');
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
            'sks' => 'required|'
        ]);    

        Matkuls::create($request->all());
        return redirect('/matkul')->with('status', 'Mata Kuliah Berhasil Ditambahkan!!');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Matkuls  $matkul
     * @return \Illuminate\Http\Response
     */
    public function show(Matkuls $matkul)
    {
        return view('matkul.show', compact('matkul'));
        // untuk tampilan api, silahkan di uncomment
        // return $matkuls;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Matkuls  $matkuls
     * @return \Illuminate\Http\Response
     */
    public function edit(Matkuls $matkul)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Matkuls  $matkuls
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Matkuls $matkuls)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Matkuls  $matkuls
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matkuls $matkuls)
    {
        //
    }
}
