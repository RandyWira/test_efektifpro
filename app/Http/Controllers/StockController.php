<?php

namespace App\Http\Controllers;

use App\Models\Stok;
use App\Models\Jenis;
use App\Models\Brand;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stok = Stok::orderBy('id', 'ASC')
                ->with(['brand', 'jenis'])
                ->get();

        $brand = Brand::orderBy('id', 'ASC')
                ->with(['jenis'])
                ->get();

        $jenis = Jenis::latest()->get();
        return view('page.stock.index', compact('jenis', 'brand', 'stok'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'stock' => 'required'
        ]);

        $stok = new Stok;
        $stok->nama = $request->nama;
        $stok->stock = $request->stock;
        $stok->jenis_id = $request->jenis;
        $stok->brand_id = $request->brand;
        $stok->save();

        if ($stok) {
            return redirect()
                ->route('stock.index')
                ->with([
                    'success' => 'Data Berhasil ditambahkan'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Gagal... Try Again!!'
                ]);
        }
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stok $stock)
    {
        $this->validate($request, [
            'nama' => 'required',
            'stock' => 'required'
        ]);
        
        $stock->nama = $request->nama;
        $stock->stock = $request->stock;
        $stock->jenis_id = $request->jenis;
        $stock->brand_id = $request->brand;
        $stock->save();

        if ($stock) {
            return redirect()
                ->route('stock.index')
                ->with([
                    'success' => 'Data Berhasil diupdate'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Gagal... Try Again!!'
                ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stok $stock)
    {
        // dd($stock);
        $stock->delete();

        return redirect()->back()->with(['success'=>'Data berhasil dihapus']);
    }

    public function getBrand($id)
    {
        $brand = Brand::where('jenis_id', $id)->pluck("nama", "id");
        return json_encode($brand);
    }
}
