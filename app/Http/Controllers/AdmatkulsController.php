<?php

namespace App\Http\Controllers;

use App\Models\Admatkuls;
use Illuminate\Http\Request;

class AdmatkulsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admatkuls = Admatkuls::all();
        return view('admatkuls.index', compact("admatkuls"));
        // untuk tampilan api, silahkan di uncomment
        // return Admatkuls::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admatkuls.create');
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

        Admatkuls::create($request->all());
        return redirect('/admatkuls')->with('status', 'Mata Kuliah Berhasil Ditambahkan!!');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admatkuls  $admatkuls
     * @return \Illuminate\Http\Response
     */
    public function show(Admatkuls $admatkuls)
    {
        return view('admatkuls.show', compact('admatkuls'));
        // untuk tampilan api, silahkan di uncomment
        // return $admatkuls;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admatkuls  $admatkuls
     * @return \Illuminate\Http\Response
     */
    public function edit(Admatkuls $admatkuls)
    {
        return view('admatkuls.edit', compact("admatkuls"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admatkuls  $admatkuls
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admatkuls $admatkuls)
    {
        Admatkuls::where('id', $admatkuls->id)
                    ->update([
                        'nama' => $request->nama,
                        'sks' => $request->sks,
                        'hari' => $request->hari,
                        'pukul' => $request->pukul,
                        'ruang' => $request->ruang,
                    ]);
        return redirect('/admatkuls')->with('status', 'Mata Kuliah Berhasil di Ubah!!');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admatkuls  $admatkuls
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admatkuls $admatkuls)
    {
        Admatkuls::destroy($admatkuls->id);
        return redirect('/admatkuls')->with('status', 'Mata Kuliah Berhasil Dihapus!!');
        // untuk tampilan api, silahkan di uncomment
        // return $admatkuls;
    }
}
