<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patients;

class PatientController extends Controller
{
    public function create()
    {
        return view('addpasien');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'gender' => 'required|in:L,P',
            'address' => 'required|string|max:255',
            'queue_number' => 'nullable|string|max:10',
            'room' => 'required|string|max:50',
        ]);
        
        Patients::create($validated);

        return redirect()->route('addpasien')->with('success', 'Pasien berhasil ditambahkan.');
    }

    public function index()
    {
        $patients = Patients::all();
        return view('daftarpasien', compact('patients'));
    }
}
