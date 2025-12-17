<?php

namespace App\Http\Controllers;

use App\Models\Beneficiary;
use Illuminate\Http\Request;

class BeneficiaryController extends Controller
{
    // GET all beneficiaries
    public function index()
    {
        $beneficiaries = Beneficiary::all();
        return response()->json($beneficiaries, 200);
    }

    // POST create a new beneficiary
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'nullable|string|max:10',
            'phone_number' => 'required|string|max:15|unique:beneficiaries',
            'date_of_birth' => 'nullable|date',
            'national_id' => 'nullable|string|max:20|unique:beneficiaries',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
        ]);

        $beneficiary = Beneficiary::create($validated);

        return response()->json($beneficiary, 201); // Return 201 status for created resource
    }

    // GET a single beneficiary by ID
    public function show($id)
    {
        $beneficiary = Beneficiary::find($id);

        if (!$beneficiary) {
            return response()->json(['message' => 'Beneficiary not found'], 404);
        }

        return response()->json($beneficiary, 200);
    }

    // PUT/PATCH update an existing beneficiary
    public function update(Request $request, $id)
    {
        $beneficiary = Beneficiary::find($id);

        if (!$beneficiary) {
            return response()->json(['message' => 'Beneficiary not found'], 404);
        }

        $validated = $request->validate([
            'name' => 'nullable|string|max:255',
            'gender' => 'nullable|string|max:10',
            'phone_number' => 'nullable|string|max:15|unique:beneficiaries,phone_number,' . $id,
            'date_of_birth' => 'nullable|date',
            'national_id' => 'nullable|string|max:20|unique:beneficiaries,national_id,' . $id,
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
        ]);

        $beneficiary->update($validated);

        return response()->json($beneficiary, 200);
    }

    // DELETE a beneficiary
    public function destroy($id)
    {
        $beneficiary = Beneficiary::find($id);

        if (!$beneficiary) {
            return response()->json(['message' => 'Beneficiary not found'], 404);
        }

        $beneficiary->delete();

        return response()->json(['message' => 'Beneficiary deleted successfully'], 200);
    }
}

