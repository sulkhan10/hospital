<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePatientRequest;
use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Resources\PatientResource;

class PatientController extends Controller
{
    public function index()
    {
        return PatientResource::collection(Patient::all());
    }

    public function show(Patient $patient)
    {
        return new PatientResource($patient);
    }

    public function store(StorePatientRequest $request)
    {
        Patient::create($request->validated());
        return response()->json(
            'Patient Created'
        );
    }

    public function update(StorePatientRequest $request, Patient $patient)
    {
        $patient->update($request->validated());
        return response()->json(
            'Patient Updated'
        );
    }

    public function destroy(Patient $patient)
    {
        $patient->delete();
        return response()->json(
            'Patient Deleted'
        );
    }
}
