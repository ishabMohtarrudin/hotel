<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    public function show(string $id): View
    {
        return view('kamar.profile', [
            'kamar' => Kamar::findOrFail($id)
        ]);
    }

    public function index(): View
    {
        $kamar = Kamar::latest()->paginate(10);
        return view('kamar.index', compact('kamar'));
    }

    public function create(): View
    {
        return view('kamar.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'id_kamar' => 'required|unique:kamar,id_kamar',
            'nama_kamar' => 'required|string|max:100',
            'jenis_kamar' => 'required|in:deluxe,superior,president', // contoh validasi enum
            'ukuran_kamar' => 'required|integer',
            'harga' => 'required|integer',
        ]);

        Kamar::create([
            'id_kamar' => $request->id_kamar,
            'nama_kamar' => $request->nama_kamar,
            'jenis_kamar' => $request->jenis_kamar,
            'ukuran_kamar' => $request->ukuran_kamar,
            'harga' => $request->harga,
        ]);

        return redirect()->route('kamar.index')->with('success', 'Kamar berhasil ditambahkan!');
    }

    public function edit(string $id): View
    {
        $kamar = Kamar::findOrFail($id);
        return view('kamar.edit', compact('kamar'));
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $request->validate([
            'id_kamar' => 'required|unique:kamar,id_kamar',
            'nama_kamar' => 'required|string|max:100',
            'jenis_kamar' => 'required|in:deluxe,superior,president', // contoh validasi enum
            'ukuran_kamar' => 'required|integer',
            'harga' => 'required|integer',
        ]);

        $kamar = Kamar::findOrFail($id);
        $kamar->update([
            'id_kamar' => $request->id_kamar,
            'nama_kamar' => $request->nama_kamar,
            'jenis_kamar' => $request->jenis_kamar,
            'ukuran_kamar' => $request->ukuran_kamar,
            'harga' => $request->harga,
        ]);

        return redirect()->route('kamar.index')->with('success', 'Data Berhasil Diubah!');
    }

    public function destroy(string $id): RedirectResponse
    {
        $kamar = Kamar::findOrFail($id);
        $kamar->delete();

        return redirect()->route('kamar.index')->with('success', 'Data Berhasil Dihapus!');
    }
}
