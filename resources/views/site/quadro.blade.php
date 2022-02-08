@extends('templates.template')
@section('title', ' - KanNotes')

   

@section('content')

    {{-- container inteiro --}}
    <div class="q" id="box">
        <div class="quadro" v-for="(q, index) in quadros" >
            {{-- quadro mesmo --}}
            <div class="box"  >

                <div class="title">@{{  }} </div>

                <div class="btn-group ">
                    <button class="btn btn-link link-dark shadow-none dropdown-toggle dots" type="button" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="defaultDropdown">
                        <li><a class="dropdown-item" href="#">Excluir quadro</a></li>
                    </ul>
                </div>

                <div class="cartoes" id="cartoes" v-for="(ca, index) in cartoes">
                    <div class="cartao">
                        <div class="note">{{ ca.text }}</div>
                    </div> 
                </div>

                <button class="add" v-on:click="add"> <i class="bi bi-plus-lg" ></i> Adicionar cartão</button>
            </div>
        </div>
        
        <div class="quadro" >
            <div class="box">

                <div class="cartoes">
                    
                </div>
                <div id="count">
                    <button class="add-quadro add" v-on:click="addQuadro"><i class="bi bi-plus-lg"> </i>Adicionar quadro</button>
                    
                </div>
                
            </div>
        </div>
    </div>


    
@endsection  