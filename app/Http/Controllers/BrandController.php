<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use App\Models\Brand;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brand = Brand::orderBy('id', 'ASC')
                ->with(['jenis'])
                ->get();
        // dd($brand);
        $jenis = Jenis::latest()->get();
        return view('page.brand.index', compact('jenis', 'brand'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'nama' => 'required'
        ]);
        // dd($request->jenis_id);
        // $brand = Brand::inse([
        //     'nama' => $request->nama,
        //     'jenis_id' => $request->jenis_id,
        // ]);
        $brand = new Brand;
        $brand->nama = $request->nama;
        $brand->jenis_id = $request->jenis_id;
        $brand->save();

        if ($brand) {
            return redirect()
                ->route('brand.index')
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
    public function update(Request $request, Brand $brand)
    {
        $this->validate($request, [
            'nama' => 'required'
        ]);

        $brand->nama = $request->nama;
        $brand->jenis_id = $request->jenis_id;
        $brand->save();

        if ($brand) {
            return redirect()
                ->route('brand.index')
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
    public function destroy(Brand $brand)
    {
        $brand->delete();

        return redirect()->back()->with(['success'=>'Data berhasil dihapus']);
    }
}
