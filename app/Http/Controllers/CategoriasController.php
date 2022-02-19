<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Models\Quadros;
use App\Models\Cards;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoriasController extends Controller
{
    public function show(Quadros $qua)
    {
        $boards = Categorias::orderBy('id', 'asc')->get();
        $cards = Cards::orderBy('id', 'asc')->get();
        
        $boards_quadro = array();
        $cards_board = array();

        foreach ($boards as $board) {
            
            if ($board["id_quadros"] == $qua["id"]){

                $boards_quadro[] = $board;
            
            }

        }

        foreach($cards as $card) {

            foreach($boards_quadro as $b) {

                if ($card["id_categoria"] == $b["id"]){

                    $cards_board[] = $card;
                
                }

            }
            

        }


        return view('site.quadro', ['quadro' => $qua,'boards' => $boards_quadro,'cards' => $cards_board, 'page' => 'quadro']);
        
    }


    public function add(Request $request)
    {
        $data = $request->all();

        if ($data['function'] == 'adicionar') {

            $categorias = new Categorias();

            $categorias->id_quadros = $data['id_quadro'];
            $categorias->nome_categoria = $data['nome_cat'];
            
            $categorias->save();

            
            return response()->json($categorias);

        } elseif ($data['function'] == 'remover') {

            $boards = Categorias::orderBy('id', 'asc')->get();

            foreach ($boards as $board) {

                if($data['id_board'] == $board['id']) {

                    $board->delete();

                }
            }

            return response()->json($data);

        } elseif ($data['function'] == 'novo_card') {

            $cards = new Cards();

            $cards->id_categoria = $data['id'];
            $cards->descricao = $data['novo'];
            
            $cards->save();

            
            return response()->json($cards);

        } elseif ($data['function'] == 'get_notes') {

            $cards = Categorias::orderBy('id', 'asc')->get();
        
            $all_cards = array();

            foreach ($cards as $card) {
                
                if ($card["id_categoria"] == $data["id"]){

                    $all_cards[] = $card;
                
                }

            }

            return response()->json(['data' => $all_cards]);

        } elseif ($data['function'] == 'removerCard') {

            $cards = Cards::orderBy('id', 'asc')->get();

            foreach ($cards as $card) {

                if($data['id_card'] == $card['id']) {

                    $card->delete();

                }
            }

            return response()->json($data);

        }

    }

}
