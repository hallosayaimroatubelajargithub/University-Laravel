<?php

namespace App\Http\Controllers;

use App\Models\Adstudents;
use Illuminate\Http\Request;

class AdstudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adstudents = Adstudents::all();
        return view('admins.index', compact("adstudents"));
        // untuk tampilan api, silahkan di uncomment
        // return Adstudents::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // CARA 1
        // Students::create([
        //     'nama' => $request->nama,
        //     'nim' => $request->nim,
        //     'jk' => $request->jk,
        //     'ttl' => $request->ttl,
        //     'agama' => $request->agama,
        //     'alamat' => $request->alamat,
        //     'fak' => $request->fak,
        //     'prodi' => $request->prodi,
        //     'smstr' => $request->smstr
        // ]);

        $request->validate([
            'nama' => 'required',
            'nim' => 'required|'
        ]);    

        // CARA 2
        Adstudents::create($request->all());
        return redirect('/admins')->with('status', 'Data Mahasiswa Berhasil Ditambahkan!!');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Adstudents  $adstudents
     * @return \Illuminate\Http\Response
     */
    public function show(Adstudents $adstudents)
    {
        return view('admins.show', compact('adstudents'));
        // untuk tampilan api, silahkan di uncomment
        // return $adstudents;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adstudents  $adstudents
     * @return \Illuminate\Http\Response
     */
    public function edit(Adstudents $adstudents)
    {
        return view('admins.edit', compact("adstudents"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adstudents  $adstudents
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adstudents $adstudents)
    {
        Adstudents::where('id', $adstudents->id)
                    ->update([
                        'nama' => $request->nama,
                        'nim' => $request->nim,
                        'jk' => $request->jk,
                        'ttl' => $request->ttl,
                        'agama' => $request->agama,
                        'alamat' => $request->alamat,
                        'fak' => $request->fak,
                        'prodi' => $request->prodi,
                        'smstr' => $request->smstr
                    ]);
        return redirect('/admins')->with('status', 'Data Mahasiswa Berhasil di Ubah!!');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adstudents  $adstudents
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adstudents $adstudents)
    {
        Adstudents::destroy($adstudents->id);
        return redirect('/admins')->with('status', 'Data Mahasiswa Berhasil Dihapus!!');
        // untuk tampilan api, silahkan di uncomment
        // return $adstudents;
    }
}
