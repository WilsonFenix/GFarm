<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\Request;

class TarefaController extends Controller
{
    public function ListarTarefas(Request $request){
        $tarefas = [
            "lavrar a terra",
            "fazer colheita",
            "vender insumos"
        ];
    
        $html = "<ul>";
        foreach($tarefas as $tarefa){
            $html .= "<li>$tarefa</li>";
        }
        $html .= "</ul>";
        return $html;
    }
}