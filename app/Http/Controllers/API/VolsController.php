<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Vols;
use Illuminate\Http\Request;

class VolsController extends Controller
{
    public function index()
    {
        return Vols::all();
    }

    public function store(Request $request)
    {
        $vol = Vols::create($request->all());
        return response()->json($vol, 201);
    }

    public function show($id)
    {
        return Vols::find($id);
    }

    public function update(Request $request, $id)
    {
        $vol = Vols::findOrFail($id);
        $vol->update($request->all());
        return response()->json($vol, 200);
    }

    public function destroy($id)
    {
        Vols::destroy($id);
        return response()->json(null, 204);
    }
}
