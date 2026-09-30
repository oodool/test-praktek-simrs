<?php

namespace App\Http\Controllers;

use App\Models\MedicalRecord;
use Illuminate\Http\Request;

class MedicalRecordsController extends Controller
{
    public function index()
    {
        $medical_records = MedicalRecord::all();

        return view('medical_record.index', compact('medical_records'));
    }

    public function create()
    {
        return view('medical_record.create');
    }

    public function store()
    {
        $validated = request()->validate([
            'date' => 'required|date',
            'doctor' => 'required',
            'patient' => 'required',
            'diagnosis' => 'required',
            'treatment' => 'required|in:Rawat jalan,Rawat inap',
            'notes' => '',
        ]);

        MedicalRecord::create($validated);

        return redirect('/medical_record');
    }

    public function edit(MedicalRecord $medical_record)
    {
        return view('medical_record.edit', compact('medical_record'));
    }

    public function update(MedicalRecord $medical_record)
    {
        $validated = request()->validate([
            'date' => 'required|date',
            'doctor' => 'required',
            'patient' => 'required',
            'diagnosis' => 'required',
            'treatment' => 'required|in:Rawat jalan,Rawat inap',
            'notes' => '',
        ]);

        $medical_record->update($validated);

        return redirect('/medical_record');
    }

    public function destroy(MedicalRecord $medical_record)
    {
        $medical_record->delete();

        return redirect('/medical_record');
    }
}
