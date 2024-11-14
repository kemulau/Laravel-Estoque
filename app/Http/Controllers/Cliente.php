<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClienteModel; // insira essa linha pra podermos usar o model

class Cliente extends Controller
{
    public function create(){
        return view('Cliente.create');
    }

    public function store(Request $request){
        $status = ClienteModel::salvar($request);
        if($status){
            return redirect()->back()->with('mensagem','Cliente cadastrado com sucesso!');
        }
        else{
            return redirect()->back()->with('mensagem','Erro ao cadastrar o cliente. Tente novamente!');
        }
    }
}
