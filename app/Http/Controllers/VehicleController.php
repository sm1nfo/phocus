<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\Client;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $vehicles = Vehicle::with('client')
            ->when($search, function ($query, $search) {
                return $query->where('plate', 'like', "%{$search}%")
                             ->orWhere('model', 'like', "%{$search}%");
            })->get();

        return view('vehicles.index', compact('vehicles'));
    }

    public function create()
    {
        $clients = Client::all();
        return view('vehicles.create', compact('clients'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'client_id' => 'required|exists:clients,id',
            'brand' => 'required',
            'model' => 'required',
            'plate' => 'required|unique:vehicles',
            'year' => 'required|integer',
        ]);

        Vehicle::create($request->all());
        return redirect()->route('vehicles.index');
    }

    public function edit(Vehicle $vehicle)
    {
        $clients = Client::all();
        return view('vehicles.edit', compact('vehicle', 'clients'));
    }

    public function update(Request $request, Vehicle $vehicle)
    {
        $request->validate([
            'client_id' => 'required',
            'brand' => 'required',
            'model' => 'required',
            // A correção está aqui: ignorar o ID do veículo atual
            'plate' => 'required|unique:vehicles,plate,' . $vehicle->id,
            'year' => 'required|integer',
        ]);

        $vehicle->update($request->all());
        return redirect()->route('vehicles.index');
    }

    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();
        return redirect()->route('vehicles.index');
    }
}