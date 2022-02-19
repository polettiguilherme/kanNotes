<?php

namespace App\Http\Controllers;

use App\Models\Quadros;
use App\Models\Categorias;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class QuadrosController extends Controller
{
    public function excluir(Quadros $qua) {

        return view('site.excluir', ['qua' => $qua, 'page' => 'excluir']);

    }

    public function deletar(Quadros $qua) {

        $qua->delete();

        return redirect()->route('site.index');
        
    }

    // 

}
