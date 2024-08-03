<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use App\Models\Invoice;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function show(string $id): View {
        $invoice = Invoice::findOrFail($id);
        return view('invoice.show', compact('invoice'));
    }

    public function index(): View {
        $invoice = Invoice::latest()->paginate(10);
        return view('invoice.index', compact('invoice'));
    }

    public function create(): View{
        return view('invoice.create');
    }

    public function store(Request $request): RedirectResponse{
        $request->validate([
            
            'nik' => 'required|numeric|min:5',
            'nama_customer' => 'required|string|max:150',
            'email' => 'required|email|max:50',
            'country' => 'required|string|max:10',
        ]);

        Customers::create([
            'nik' => $request->nik,
            'nama_customer' => $request->nama_customer,
            'email' => $request->email,
            'country' => $request->country,
        ]);

        return redirect()->route('customers.index')->with('success', 'User berhasil ditambahkan!');
    }

    public function edit(string $id): View
    {
        $customers = Customers::findOrFail($id);
        return view('customers.edit', compact('customers'));
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        // Validate form
        $request->validate([
            'nik' => 'required|numeric|min:5',
            'nama_customer' => 'required|string|max:150',
            'email' => 'required|email|max:50',
            'country' => 'required|string|max:10',
        ]);

        $customers = Customers::findOrFail($id);
        $customers->update([
            'nik' => $request->nik,
            'nama_customer' => $request->nama_customer,
            'email' => $request->email,
            'country' => $request->country,
        ]);

        return redirect()->route('customers.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy(string $id): RedirectResponse
    {
        $customers = Customers::findOrFail($id);
        $customers->delete();
        return redirect()->route('customers.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
