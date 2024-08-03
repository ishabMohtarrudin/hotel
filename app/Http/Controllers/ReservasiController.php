<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use App\Models\Reservasi;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    public function show(string $id): View {
        $reservasi = Reservasi::findOrFail($id);
        return view('reservasi.show', compact('reservasi'));
    }

    public function index(): View {
        $reservasi = Reservasi::latest()->paginate(10);
        return view('reservasi.index', compact('reservasi'));
    }

    public function create(): View {
        // Fetch customers and hotels data to be used in the form
        $customers = Customers::all();
        $hotel = HargaHariIni::all();
        return view('reservasi.create', compact('customers', 'hotels'));
    }

    public function store(Request $request): RedirectResponse {
        $request->validate([
            'id_reservasi' => 'required|unique:reservasi,id_reservasi',
            'customer_id' => 'required|exists:customers,customer_id',
            'tanggal' => 'required|date',
            'tanggal_mulai' => 'required|date',
            'tanggal_akhir' => 'required|date',
            'id_hotel' => 'required|exists:harga_hari_ini,id_hotel',
        ]);

        Reservasi::create([
            'id_reservasi' => $request->id_reservasi,
            'customer_id' => $request->customer_id,
            'tanggal' => $request->tanggal,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_akhir' => $request->tanggal_akhir,
            'id_hotel' => $request->id_hotel,
        ]);

        return redirect()->route('reservasi.index')->with('success', 'Reservasi berhasil ditambahkan!');
    }

    public function edit(string $id): View {
        $reservasi = Reservasi::findOrFail($id);
        $customers = Customers::all();
        $hotels = HargaHariIni::all();
        return view('reservasi.edit', compact('reservasi', 'customers', 'hotels'));
    }

    public function update(Request $request, string $id): RedirectResponse {
        $request->validate([
            'id_reservasi' => 'required|unique:reservasi,id_reservasi,'.$id.',id',
            'customer_id' => 'required|exists:customers,customer_id',
            'tanggal' => 'required|date',
            'tanggal_mulai' => 'required|date',
            'tanggal_akhir' => 'required|date',
            'id_hotel' => 'required|exists:harga_hari_ini,id_hotel',
        ]);

        $reservasi = Reservasi::findOrFail($id);
        $reservasi->update([
            'id_reservasi' => $request->id_reservasi,
            'customer_id' => $request->customer_id,
            'tanggal' => $request->tanggal,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_akhir' => $request->tanggal_akhir,
            'id_hotel' => $request->id_hotel,
        ]);

        return redirect()->route('reservasi.index')->with('success', 'Reservasi berhasil diubah!');
    }

    public function destroy(string $id): RedirectResponse {
        $reservasi = Reservasi::findOrFail($id);
        $reservasi->delete();

        return redirect()->route('reservasi.index')->with('success', 'Reservasi berhasil dihapus!');
    }
}
