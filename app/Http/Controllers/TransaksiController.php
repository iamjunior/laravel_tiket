<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use Fpdf;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksi =Transaksi::where('status','0')->get();
        return view('transaksi.index',compact('transaksi'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'qty'   => 'required'
        ]);
        // return $request->all();
        // Transaksi::create($request->all()); //jika pakai fillable gunakan ini
        Transaksi::create($request->except('submit'));
        return redirect()->route('transaksi.index');
    }

    public function destroy($id)
    {
        $transaksi=Transaksi::findOrFail($id);
        if(!$transaksi){
            return redirect()->back();
        }
        $transaksi->delete();
        return redirect()->route('transaksi.index');
    }

    public function update()
    {
        $transaksi=Transaksi::where('status','0');
        $transaksi->update(['status' => '1']);
        return redirect()->back();
    }
    
    public function laporan()
    {
        // Cara 1
        // Fpdf::AddPage();
        // Fpdf::SetFont('Courier', 'B', 18);
        // Fpdf::Cell(50, 25, 'Hello World!');
        // Fpdf::Output();
        // exit;

        // Cara 2
        $fpdf = new Fpdf();
        $fpdf::AddPage();
        $fpdf::SetFont('Courier', 'B', 18);
        $fpdf::Cell(50, 25, 'Hello World!');
        $fpdf::Output();
        exit();
    }
}
