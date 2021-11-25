@extends('templates.template')
@section('title', ' - KanNotes')

   

@section('content')

    {{-- container inteiro --}}
    <div class="q">
        <div class="quadro">
            {{-- quadro mesmo --}}
            <div class="box">

                <div class="title">A fazer</div>

                <div class="btn-group ">
                    <button class="btn btn-link link-dark shadow-none dropdown-toggle dots" type="button" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="defaultDropdown">
                        <li><a class="dropdown-item" href="#">Excluir quadro</a></li>
                    </ul>
                </div>

                <div class="cartoes">
                    <div class="cartao">
                        <div class="note">Desenvolvimento da função de arrastar</div>
                    </div> 
                    <div class="cartao"></div> 
                    <div class="cartao"></div> 
                    <div class="cartao"></div> 
                    <div class="cartao"></div> 
                    <div class="cartao"></div> 
                    <div class="cartao"></div> 
                </div>

                <div class="add"><i class="bi bi-plus-lg"> </i> Adicionar cartão</div>
            </div>
        </div>
        <div class="quadro">
            <div class="box">
                <div class="title"> Fazendo </div>

                <div class="btn-group ">
                    <button class="btn btn-link link-dark shadow-none dropdown-toggle dots" type="button" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="defaultDropdown">
                        <li><a class="dropdown-item" href="#">Excluir quadro</a></li>
                    </ul>
                </div>

                <div class="cartoes">
                    <div class="cartao"></div> 
                    <div class="cartao"></div> 
                    <div class="cartao"></div> 
                    <div class="cartao"></div> 
                    <div class="cartao"></div> 
                    <div class="cartao"></div> 
                    <div class="cartao"></div> 
                </div>
                
                <div class="add"><i class="bi bi-plus-lg"> </i>Adicionar cartão</div>
            </div>
        </div>
        <div class="quadro">
            <div class="box">
                <div class="title"> Testando </div>

                <div class="btn-group">
                    <button class="btn btn-link link-dark shadow-none dropdown-toggle dots" type="button" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="defaultDropdown">
                        <li><a class="dropdown-item" href="#">Excluir quadro</a></li>
                    </ul>
                </div>

                <div class="cartoes">
                    <div class="cartao"></div> 
                    <div class="cartao"></div> 
                    <div class="cartao"></div> 
                    <div class="cartao"></div> 
                    <div class="cartao"></div> 
                </div>
               
                <div class="add"><i class="bi bi-plus-lg"> </i>Adicionar cartão</div>
            </div>
        </div>
        <div class="quadro">
            <div class="box">
                <div class="title"> Feito </div>
                
                <div class="btn-group">
                    <button class="btn btn-link link-dark shadow-none dropdown-toggle dots" type="button" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="defaultDropdown">
                         <li><a class="dropdown-item" href="#">Excluir quadro</a></li>
                    </ul>
                </div>

                <div class="cartoes">
                    
                </div>
                
                <div class="add"><i class="bi bi-plus-lg"> </i>Adicionar cartão</div>
            </div>
        </div>
        <div class="quadro">
            <div class="box">

                <div class="cartoes">
                    
                </div>
                <div id="count">
                    <div class="add-quadro" v-on:click="log()"><i class="bi bi-plus-lg"> </i>Adicionar quadro</div>
                    @{{counter}} 
                </div>
                
            </div>
        </div>
        <template ></template>
    </div>


    
@endsection  