<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Team::all();
        return view('team.data', [
            'data' => $data
        ]);
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
    public function store(Request $request)
    {
        //
        // $nama = $request->nama;
        // $posisi = $request->posisi;
        // $departemen = $request->departemen;
        // $email = $request->email;
        // $no_hp = $request->no_hp;
        $Team = Team::create([
            'nama' => $request->nama,
            'posisi' => $request->posisi,
            'departemen' => $request->departemen,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
        ]);
        if ($Team) {
            return redirect()->back();
        }else {
            echo 'ada kesalahan';
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $data = Team::where('id', $id)->first();
        return view('team.edit', [
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $Team = Team::where('id', $id)
        ->update([
            'nama' => $request->nama,
            'posisi' => $request->posisi,
            'departemen' => $request->departemen,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
        ]);
        if ($Team) {
            return redirect('/');
        }else {
            echo 'gagal!, berikan perubahan terlebih dahulu';
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $Team = Team::where('id', $id)->delete();
        if ($Team) {
            return redirect()->back();
        }else {
            echo 'ada kesalahan';
        }
    }
}
