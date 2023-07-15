<?php

namespace App\Http\Controllers;

use App\Models\Cosmetic;
use Illuminate\Http\Request;

class CosmeticController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Cosmetic::all();
        return view('cosmetic.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cosmetic.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Cosmetic::create([
            'produk_name' => $request->produk_name,
            'produk_jenis' => $request->produk_jenis,
            'produk_harga' => $request->produk_harga,
        ]);

        return redirect('cosmetic');
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
        $row = Cosmetic::findOrFail($id);
        return view('cosmetic.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Cosmetic::findOrFail($id);
        $row->update([
            'produk_name' => $request->produk_name,
            'produk_jenis' => $request->produk_jenis,
            'produk_harga' => $request->produk_harga,
        ]);

        return redirect('cosmetic');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Cosmetic::findOrFail($id);
        $row->delete();

        return redirect('cosmetic');
    }
}
