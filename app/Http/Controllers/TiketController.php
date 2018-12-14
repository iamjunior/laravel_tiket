<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tiket;
use App\Kategori;
class TiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiket = Tiket::all();
        return view('tiket.index', compact('tiket'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('tiket.create',compact('kategori'));
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
            'name_tiket' => 'max:30|required',
            'harga_tiket' => 'max:12|required',
            'jenis_tiket' => 'max:10|required',
            'id_kategori' => 'max:11|required',
            'jumlah_tiket' => 'max:11|required',
        ]);
            // return $request->all();
        $tiker=Tiket::create($request->all());
        return redirect()->route('tiket.index')->with('pesan','data berhasil di simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tiket=Tiket::findOrFail($id);
        $kategori = Kategori::all();
        return view('tiket.edit', compact(['tiket','kategori']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name_tiket' => 'max:30|required',
            'harga_tiket' => 'required|numeric',
            'jenis_tiket' => 'max:10|required',
            'id_kategori' => 'max:11|required',
            'jumlah_tiket' => 'max:11|required',
        ]);
        
        $tiket=Tiket::find($id);
        $tiket->update($request->all());
        return redirect()->route('tiket.index')->with('pesan','data berhasil di simpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tiket=Tiket::find($id);
        if(!$tiket){
            return redirect()->back();
        }
        $tiket->delete();
        return redirect()->route('tiket.index')->with('pesan', 'data tiket bershasil di hapus');
    }
}
