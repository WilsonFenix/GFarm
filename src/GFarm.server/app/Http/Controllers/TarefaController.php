<?php

namespace App\Http\Controllers;

class TarefaController extends Controller
{
    public function index(){
        $tarefas = [
            "lavrar a terra",
            "fazer colheita",
            "vender insumos"
        ];
    
        return view("dasboard.index", compact('tarefas'));
    }
}