@extends('templates.template')
@section('title', 'Meus Quadros - KanNotes')

   

@section('content')
    <div class="container" id="container">    
        <div class="row main-row">
            <div class="column main-column">
            <h3>Meus quadros</h3>
                <div class="seus-quadros" id="quadro">

                    @foreach($quadros as $qua)
                        
                            <div class="quadros">
                                    <div class="title">
                                    <a class="a" href="{{ route('site.quadro', $qua) }}">
                                        <div class="nome" id="nome"> {{$qua->nome_quadro}} </div>
                                    </a>
                                        <div class="remover"> <a class="a" href="{{ route('site.excluir', $qua)}}">X</a> </div>
                                    </div>
                                    
                            </div>
                        
                    @endforeach

                    <div class="add" id="add">
                        <form method="post" action="{{ route('site.criar') }}" enctype="multipart/form-data">
                        @csrf
                            <input type="text" id="nome_quadro" name="nome_quadro" class="add-quadro" placeholder="Criar Quadro">
                            <button type="submit" class="add-quadro">Criar</button>
                        </form>
                    </div>
                    
                </div>
                {{-- <div class="templates">
                    <h3 style="padding-top: 50px;">Templates</h3>
                    <div class="quadros"></div>
                    <div class="quadros"></div>
                    <div class="quadros"></div>
                </div> --}}
            </div>
        </div>
    </div>
    <footer class="footer">
        <p> &copy; GUILHERME POLETTI | TODOS OS DIREITOS RESERVADOS </p>
    </footer>
@endsection  

