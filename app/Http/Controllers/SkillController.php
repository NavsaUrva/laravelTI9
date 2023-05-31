<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Fungsi Index untuk menampilkan View Form
        return view('Skill');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function skillhasil(Request $request)
    {
        //Fungsi hasil untuk menampilkan Data Input
        $this->validate($request, [
            'nama' => 'required',
            'email' => 'required',
            'lokasi' => 'required',
            'jenis_kelamin' => 'required',
            'skill' => 'required',
        ]);
        return view('skillhasil', ['data' => $request]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
