<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function show(string $id): View {
        $customers = Customers::findOrFail($id);
        return view('customers.show', compact('customers'));
    }

    public function index(): View {
        $customers = Customers::latest()->paginate(10);
        return view('customers.index', compact('customers'));
    }

    public function create(): View {
        return view('customers.create');
    }

    public function store(Request $request): RedirectResponse {
        $request->validate([
            'customer_id' => 'required|unique:customers,customer_id',
            'nik' => 'required|numeric|min:5',
            'nama_customer' => 'required|string|max:150',
            'email' => 'required|email|max:50',
            'country' => 'required|string|max:10',
        ]);

        Customers::create([
            'customer_id' => $request->customer_id,
            'nik' => $request->nik,
            'nama_customer' => $request->nama_customer,
            'email' => $request->email,
            'country' => $request->country,
        ]);

        return redirect()->route('customers.index')->with('success', 'Customer berhasil ditambahkan!');
    }

    public function edit(string $id): View {
        $customers = Customers::findOrFail($id);
        return view('customers.edit', compact('customers'));
    }

    public function update(Request $request, string $id): RedirectResponse {
        $request->validate([
            'customer_id' => 'required|unique:customers,customer_id,' . $id,
            'nik' => 'required|numeric|min:5',
            'nama_customer' => 'required|string|max:150',
            'email' => 'required|email|max:50',
            'country' => 'required|string|max:10',
        ]);

        $customers = Customers::findOrFail($id);
        $customers->update([
            'customer_id' => $request->customer_id,
            'nik' => $request->nik,
            'nama_customer' => $request->nama_customer,
            'email' => $request->email,
            'country' => $request->country,
        ]);

        return redirect()->route('customers.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy(string $id): RedirectResponse {
        $customers = Customers::findOrFail($id);
        $customers->delete();
        return redirect()->route('customers.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
