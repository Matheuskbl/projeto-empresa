<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vaga;
use App\Models\Curriculo; 

class SiteController extends Controller
{
    public function index(){
        $vagas = Vaga::where('ativa', true)->get();
        return view('home', compact('vagas'));
    }

    public function show($id){
        $vaga = Vaga::findOrFail($id);
        return view('vaga', compact('vaga'));
    }

    public function enviarCurriculo(Request $request, $id_vaga)
    {
        $request->validate([
        'nome'      => 'required|string|max:255',
        'email'     => 'required|email',
        'descricao' => 'required|string'
    ]);


        return redirect()->back()->with('success', 'Currículo enviado com sucesso! Boa sorte.');
    }
}