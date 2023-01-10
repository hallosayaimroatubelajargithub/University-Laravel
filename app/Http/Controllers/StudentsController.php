<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Students::all();
        return view('students.index', compact("students"));
        // untuk tampilan api, silahkan di uncomment
        // return Students::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
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
        Students::create($request->all());
        return redirect('/students')->with('status', 'Data Mahasiswa Berhasil Ditambahkan!!');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function show(Students $students)
    {
        return view('students.show', compact('students'));
        // untuk tampilan api, silahkan di uncomment
        // return $students;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function edit(Students $students)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Students $students)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function destroy(Students $students)
    {
        //
    }
}
