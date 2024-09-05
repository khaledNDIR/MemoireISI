<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Hebergement;
use Illuminate\Http\Request;

class HebergementController extends Controller
{
    public function index()
    {
        return Hebergement::all();
    }

    public function store(Request $request)
    {
        $hebergement = Hebergement::create($request->all());
        return response()->json($hebergement, 201);
    }

    public function show($id)
    {
        return Hebergement::find($id);
    }

    public function update(Request $request, $id)
    {
        $hebergement = Hebergement::findOrFail($id);
        $hebergement->update($request->all());
        return response()->json($hebergement, 200);
    }

    public function destroy($id)
    {
        Hebergement::destroy($id);
        return response()->json(null, 204);
    }
}
