@extends('templates.template')
@section('title', 'Excluir Quadro - KanNotes')

   

@section('content')
    <div class="container" id="container">    
        <div class="row main-row">
            <div class="column main-column">
            <h3>Excluir quadro '{{ $qua->nome_quadro }}'?</h3>
                <div class="seus-quadros" id="quadro">

                    <form method="post" action="{{ route('site.deletar', $qua) }}">
                    @csrf
                    @method('delete')
                    
                    <input type="submit" class="btn btn-danger" value="Excluir">
                    <a href="{{ route('site.index') }}" class="btn btn-secondary">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <p> &copy; GUILHERME POLETTI | TODOS OS DIREITOS RESERVADOS </p>
    </footer>
@endsection  

