<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vaga;

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
}
