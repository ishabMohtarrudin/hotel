<?php

namespace App\Http\Controllers;

use App\Models\HargaHariIni;
use App\Models\Kamar;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class HargaHariIniController extends Controller
{
    public function show(string $id): View {
        $hargahariini = HargaHariIni::findOrFail($id);
        return view('hargahariini.show', compact('hargahariini'));
    }

    public function index(): View {
        $hargahariini = HargaHariIni::latest()->paginate(10);
        return view('hargahariini.index', compact('hargahariini'));
    }

    public function create(): View
    {
        $kamar = Kamar::all();
        return view('hargahariini.create', compact('kamar'));
    }

    public function store(Request $request): RedirectResponse{
        $request->validate([
            'id_hotel' => 'required|unique:kamar,id',
            'harga' => 'required|numeric',
            'available_room' => 'required|integer',
            'tanggal' => 'required|date',
            'id_kamar' => 'required|exists:kamar,id',
        ]);

        HargaHariIni::create([
            'id_hotel' => $request->id_hotel,
            'harga' => $request->harga,
            'available_room' => $request->available_room,
            'tanggal' => $request->tanggal,
            'id_kamar' => $request->id_kamar,
        ]);

        return redirect()->route('hargahariini.index')->with('success', 'Harga Hari Ini berhasil ditambahkan!');
    }

    public function edit(string $id): View
    {
        $hargahariini = HargaHariIni::findOrFail($id);
        return view('hargahariini.edit', compact('hargahariini'));
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        // Validate form
        $request->validate([
            'id_hotel' => 'required|unique:hotel,id',
            'harga' => 'required|numeric',
            'available_room' => 'required|integer',
            'tanggal' => 'required|date',
            'id_kamar' => 'required|exists:kamar,id',
        ]);

        $hargahariini = HargaHariIni::findOrFail($id);
        $hargahariini->update([
            'id_hotel' => $request->id_hotel,
            'harga' => $request->harga,
            'available_room' => $request->available_room,
            'tanggal' => $request->tanggal,
            'id_kamar' => $request->id_kamar,
    
        ]);

        return redirect()->route('hargahariini.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy(string $id): RedirectResponse
    {
        $hargahariini = HargaHariIni::findOrFail($id);
        $hargahariini->delete();
        return redirect()->route('hargahariini.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
