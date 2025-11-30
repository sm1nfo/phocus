<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Vehicle;
use Illuminate\Support\Facades\DB; // Importante para a transação

class PublicController extends Controller
{
    public function showForm()
    {
        return view('public-form');
    }

    public function store(Request $request)
    {
        $request->validate([
            // Dados do Cliente
            'name' => 'required',
            'phone' => 'required',
            'cpf' => 'nullable|unique:clients,cpf',
            
            'plate' => 'required|unique:vehicles,plate', 
            'brand' => 'nullable',
            'model' => 'nullable',
            'year'  => 'nullable|integer',
        ]);

        
        DB::transaction(function () use ($request) {
            
            
            $client = Client::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'cpf' => $request->cpf,
                'address' => $request->address ?? 'Endereço não informado', 
            ]);

            
            Vehicle::create([
                'client_id' => $client->id, 
                'brand' => $request->brand,
                'model' => $request->model,
                'plate' => $request->plate,
                'year' => $request->year,
            ]);
        });

        return redirect()->back()->with('success', 'Cadastro realizado com sucesso! Em breve entraremos em contato.');
    }
}