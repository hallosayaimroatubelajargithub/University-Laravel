<?php

namespace App\Http\Controllers;

use App\Models\Adkrs;
use Illuminate\Http\Request;

class AdkrsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adkrs = Adkrs::all();
        return view('adkrs.index', compact("adkrs"));
        // untuk tampilan api, silahkan di uncomment
        // return Adkrs::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adkrs.create');
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

        Adkrs::create($request->all());
        return redirect('/adkrs')->with('status', 'KRS Berhasil Ditambahkan!!');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Adkrs  $adkrs
     * @return \Illuminate\Http\Response
     */
    public function show(Adkrs $adkrs)
    {
        return view('adkrs.show', compact('adkrs'));
        // untuk tampilan api, silahkan di uncomment
        // return $adkrs;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adkrs  $adkrs
     * @return \Illuminate\Http\Response
     */
    public function edit(Adkrs $adkrs)
    {
        return view('adkrs.edit', compact("adkrs"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adkrs  $adkrs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adkrs $adkrs)
    {
        Adkrs::where('id', $adkrs->id)
                    ->update([
                        'id_mhs' => $request->id_mhs,
                        'id_matkul' => $request->id_matkul,
                    ]);
        return redirect('/adkrs')->with('status', 'KRS Berhasil di Ubah!!');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adkrs  $adkrs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adkrs $adkrs)
    {
        Adkrs::destroy($adkrs->id);
        return redirect('/adkrs')->with('status', 'KRS Berhasil Dihapus!!');
        // untuk tampilan api, silahkan di uncomment
        // return $adkrs;
    }
}
