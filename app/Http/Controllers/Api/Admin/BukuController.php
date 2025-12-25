<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buku = Buku::all();
        return response()->json(['data' => $buku]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
            'tahun_terbit' => 'required|integer|min:1000|max:' . date('Y'),
            'stok' => 'required|integer|min:0',
        ]);

        $buku = Buku::create($validation);
        return response()->json(['data' => $buku], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $buku = Buku::findOrFail($id);
        return response()->json(['data' => $buku]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $buku = Buku::findOrFail($id);

        $validation = $request->validate([
            'judul' => 'sometimes|required|string|max:255',
            'penulis' => 'sometimes|required|string|max:255',
            'penerbit' => 'sometimes|required|string|max:255',
            'tahun_terbit' => 'sometimes|required|integer|min:1000|max:' . date('Y'),
            'stok' => 'sometimes|required|integer|min:0',
        ]);

        $buku->update($validation);
        return response()->json(['data' => $buku]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();
        return response()->json(null, 204);
    }
}
