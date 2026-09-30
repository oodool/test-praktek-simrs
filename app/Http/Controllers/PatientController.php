<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::all();

        return view('patient.index', compact('patients'));
    }

    public function create()
    {
        return view('patient.create');
    }

    public function store()
    {
        $validated = request()->validate([
            'name' => 'required',
            'date_of_birth' => 'required|date',
            'phone_number' => 'required|integer',
            'address' => 'required',
            'gender' => 'required|in:Laki-laki,Perempuan',
        ]);

        Patient::create($validated);

        return redirect('/patient');
    }

    public function edit(Patient $patient)
    {
        return view('patient.edit', compact('patient'));
    }

    public function update(Patient $patient)
    {
        $validated = request()->validate([
            'name' => 'required',
            'date_of_birth' => 'required|date',
            'phone_number' => 'required|integer',
            'address' => 'required',
            'gender' => 'required|in:Laki-laki,Perempuan',
        ]);

        $patient->update($validated);

        return redirect('/patient');
    }

    public function destroy(Patient $patient)
    {
        $patient->delete();

        return redirect('/patient');
    }
}
