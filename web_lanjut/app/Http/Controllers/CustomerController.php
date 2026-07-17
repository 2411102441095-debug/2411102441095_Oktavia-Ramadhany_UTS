<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Customer;

class CustomerController extends Controller
{
    public function index() {
        $customers = Customer::all();
        return view('pages.admin.customer_index', compact('customers'));
    }

    public function create() {
        return view('pages.admin.customer_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
            'nomor_telpon' => 'required',
        ]);

        Customer::create($request->all());

        return redirect()->route('customers.index')->with('success', 'Customer berhasil ditambah!');
    }

    public function destroy(Customer $customer) {
        $customer->delete();
        return back()->with('success', 'Customer berhasil dihapus');
    }
   
    public function edit(Customer $customer) {
        return view('pages.admin.customer_edit', compact('customer'));
    }

    public function update(Request $request, Customer $customer) {
        $customer->update($request->all());
        return redirect()->route('customers.index')->with('success', 'Data diperbarui');
    }

    }

