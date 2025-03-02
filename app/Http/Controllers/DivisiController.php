<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $div = new Divisi();
        $div->nama_divisi = $request->nama_divisi;
        $div->save();

        sweetalert()
            ->timerProgressBar(false)
            ->addSuccess('Divisi Berhasil Ditambahkan');

        return redirect('/employee');
    }

    /**
     * Display the specified resource.
     */
    public function show(Divisi $divisi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $divisiF = Divisi::find($id);
        return response()->json(['divisiF' => $divisiF]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $divisi = Divisi::find($id);
        $divisi->nama_divisi = $request->edit_nama;
        $divisi->save();

        sweetalert()
            ->timerProgressBar(false)
            ->addSuccess('Divisi Berhasil Diubah');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Divisi $divisi)
    {
        //
    }

    public function hapus($id)
    {
        $div = Divisi::find($id);
        $div->delete();

        sweetalert()
            ->timerProgressBar(false)
            ->addSuccess('Divisi Berhasil Dihapus');

        return redirect('/employee');
    }
}
