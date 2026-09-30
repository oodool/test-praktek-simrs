<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    public function index()
    {
        $medicines = Medicine::all();

        return view('medicine.index', compact('medicines'));
    }

    public function create()
    {
        return view('medicine.create');
    }

    public function store()
    {
        $validated = request()->validate([
            'name' => 'required',
            'category' => 'required|in:Obat bebas,Obat bebas terbatas,Obat keras',
            'stock' => 'required|integer',
            'price' => 'required|integer',
        ]);

        Medicine::create($validated);

        return redirect('/medicine');
    }

    public function edit(Medicine $medicine)
    {
        return view('medicine.edit', compact('medicine'));
    }

    public function update(Medicine $medicine)
    {
        $validated = request()->validate([
            'name' => 'required',
            'category' => 'required|in:Obat bebas,Obat bebas terbatas,Obat keras',
            'stock' => 'required|integer',
            'price' => 'required|integer',
        ]);

        $medicine->update($validated);

        return redirect('/medicine');
    }

    public function destroy(Medicine $medicine)
    {
        $medicine->delete();

        return redirect('/medicine');
    }
}
