<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        
        $clients = Client::when($search, function ($query, $search) {
            return $query->where('name', 'like', "%{$search}%")
                         ->orWhere('cpf', 'like', "%{$search}%");
        })->get();

        return view('clients.index', compact('clients'));
    }
    
    public function create()
    {
        return view('clients.create');
    }
    
    public function store(Request $request)
    {
        $request->merge([
            'cpf' => preg_replace('/\D/', '', $request->input('cpf')),      
            'celular' => preg_replace('/\D/', '', $request->input('celular')) 
        ]); 

        $request->validate([
            'cpf' => 'required', 
            'celular' => 'required', 
        ]);

        $client = Client::create($request->all());

        return redirect('/clients')
            ->with('success', 'Cliente cadastrado com sucesso! Clique em "Novo Veículo" na lista para adicionar um carro.');
    }

    public function show(string $id)
    {

    }

    public function edit(Client $client) 
    {
        return view('clients.edit', compact('client'));
    }

    public function update(Request $request, Client $client) 
    {
        $request->merge([
            'cpf' => preg_replace('/\D/', '', $request->input('cpf')),
            'celular' => preg_replace('/\D/', '', $request->input('celular')),
        ]);

        $request->validate([
            'name' => 'required',
            'cpf' => 'required|unique:clients,cpf,' . $client->id, 
            'celular' => 'required', // ATENÇÃO: Corrigi de 'phone' para 'celular' para bater com o banco
            'address' => 'required',
        ]);

        $client->update($request->all());

        return redirect('/clients')->with('success', 'Cliente atualizado!');
    }

    public function destroy(Client $client) 
    {
        $client->delete();
        return redirect('/clients')->with('success', 'Cliente removido!');
    }
}