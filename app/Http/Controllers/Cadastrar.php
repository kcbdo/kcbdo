<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cadastrar extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nome = "Matheus";
        $idade = "29";
    
        $arr = [1,2,3,4,5];
        $nomes = ["Matheus", "Maria", "Kathleen", "Vitim", "Fagundes", "Vinicios"]; 
        return view('welcome', ['nome'=> $nome, 'idade' => $idade, 'arr' => $arr, 'nomes'=> $nomes]);
    }

    public function cadastrar ()
    {
        return view("cadastrar.cadastrar");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
