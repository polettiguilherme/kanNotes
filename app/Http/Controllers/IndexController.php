<?php

namespace App\Http\Controllers;

use App\Models\Quadros;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $quadros = Quadros::orderBy('id', 'asc')->get();

        return view('site.index', ['quadros' => $quadros, 'page' => 'index']);

    }

    public function criar(Request $form)
    {

        $quadro = new Quadros();

        $quadro->nome_quadro = $form->nome_quadro;
        $quadro->id_user = 1;

        $quadro->save();

        return redirect()->route('site.index');
    }
    
}
