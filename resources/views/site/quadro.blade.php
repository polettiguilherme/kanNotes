@extends('templates.template')
@section('title', ' Meu Quadro - KanNotes')

   

@section('content')
    <input type="integer" id="id_quadro" class="hide" value="{{ $quadro->id }}">
    {{-- container inteiro --}}
    <div class="q" id="box">
        
        @foreach($boards as $board)
            <div class="quadro">
                {{-- quadro mesmo --}}
                <div class="box" >

                    <input class="hide" id="boardId" value="{{ $board->id }}">

                    <div class="title">{{ $board->nome_categoria }}</div>

                    <div class="btn-group ">
                        <button class="btn btn-link link-dark shadow-none dropdown-toggle dots" type="button" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="defaultDropdown">
                            <li><a class="dropdown-item" @click="remover( {{ $board->id }} )">Excluir quadro</a></li>
                        </ul>
                    </div>
                    
                    @foreach($cards as $card)
                        @if ($card->id_categoria == $board->id)
                            <div class="cartoes" id="cartoes">
                                <div class="cartao">
                                    {{ $card->descricao }}
                                    <span class="ar remover" @click="removerCard( {{ $card->id }} )">X</span>
                                </div>
                                
                            </div>
                        @endif
                    @endforeach
                    <div class="cartoes">
                        
                        <input type="text" id="card" class="cartao ">
                        <button type="submit" class="add" @click="addCard( {{ $board->id }} )">+ Adicionar cartão</button>
                        
                    </div>

                    
                </div>
            </div>
        @endforeach

        <div class="quadro" >
            <div class="box">

                <div id="count">

                    <input type="text" class="add" v-model="categoria.nome_cat" placeholder="Criar lista">
                    
                    <button class="add-quadro add" @click="addCategoria"><i class="bi bi-plus-lg"></i>  Adicionar lista</button>
                    
                </div>
                
            </div>
        </div>
    </div>

@endsection  