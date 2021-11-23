@extends('templates.template')
@section('title', 'Meus Quadros - KanNotes')

   

@section('content')
    <div class="container">    
        <div class="row main-row">
            <div class="column main-column">
            <h3>Meus quadros</h3>
                <div class="seus-quadros">
                    
                    <a href="{{ route('site.quadro') }}" src="">
                        <div class="quadros">
                                <div class="title">
                                    <div class="nome">Nome do quadro</div>
                                </div>
                        </div>
                    </a>
                    

                    <div class="add" id="add" v-on:click="add()">
                        <div class="add-quadro"><i class="bi bi-plus-lg plus"></i></div>
                    </div>
                    
                </div>
                <div class="templates">
                    <h3 style="padding-top: 50px;">Templates</h3>
                    <div class="quadros"></div>
                    <div class="quadros"></div>
                    <div class="quadros"></div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <p> &copy; GUILHERME POLETTI | TODOS OS DIREITOS RESERVADOS </p>
    </footer>
@endsection  

