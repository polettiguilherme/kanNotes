@extends('templates.template')
@section('title', 'Meus Quadros - KanNotes')

   

@section('content')
    <div class="container">    
        <div class="row main-row">
            <div class="column main-column">
                <div class="seus-quadros">
                    <h3>Meus quadros</h3>
                    <a href="{{ route('site.quadro') }}" src=""><div class="quadros"></div></a>
                    <div class="quadros"></div>
                    <div class="quadros"></div>
                    <div class="quadros criar-quadro"></div>
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
@endsection  

