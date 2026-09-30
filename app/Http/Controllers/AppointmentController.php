<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::all();

        return view('appointment.index', compact('appointments'));
    }

    public function create()
    {
        return view('appointment.create');
    }

    public function store()
    {
        $validated = request()->validate([
            'date' => 'required|date',
            'time' => 'required',
            'doctor' => 'required',
            'patient' => 'required',
            'status' => 'required|in:Sedang berjalan,Dibatalkan,Selesai',
        ]);

        Appointment::create($validated);

        return redirect('/appointment');
    }

    public function edit(Appointment $appointment)
    {
        return view('appointment.edit', compact('appointment'));
    }

    public function update(Appointment $appointment)
    {
        $validated = request()->validate([
            'date' => 'required|date',
            'time' => 'required',
            'doctor' => 'required',
            'patient' => 'required',
            'status' => 'required|in:Sedang berjalan,Dibatalkan,Selesai',
        ]);

        $appointment->update($validated);

        return redirect('/appointment');
    }

    public function destroy(Appointment $appointment)
    {
        $appointment->delete();

        return redirect('/appointment');
    }
}
