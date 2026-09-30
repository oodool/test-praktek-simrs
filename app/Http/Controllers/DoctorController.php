<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();

        return view('doctor.index', compact('doctors'));
    }

    public function create()
    {
        return view('doctor.create');
    }

    public function store()
    {
        $validated = request()->validate([
            'name' => 'required',
            'specialization' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'joined_date' => 'date',
        ]);

        Doctor::create($validated);

        return redirect('/doctor');
    }

    public function edit(Doctor $doctor)
    {
        return view('doctor.edit', compact('doctor'));
    }

    public function update(Doctor $doctor)
    {
        $validated = request()->validate([
            'name' => 'required',
            'specialization' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'joined_date' => 'date',
        ]);

        $doctor->update($validated);

        return redirect('/doctor');
    }

    public function destroy(Doctor $doctor)
    {
        $doctor->delete();

        return redirect('/doctor');
    }
}
