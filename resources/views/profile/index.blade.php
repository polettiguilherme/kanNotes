@extends('templates.template')
@section('title', 'Meus Quadros - KanNotes')

   

@section('content')
    <div class="container-profile">    
        <div class="profile">
            <div class="picture">
                <img src="{{ asset('images/eu.jpg') }}" alt="foto-de-perfil" class="picture-img">
            </div>
            <div class="name">
                <p class="label">Nome</p> 
                {{ @session('email.name') }}
            </div>
            <div class="user">
                <p class="label">Usuário</p> 
                {{ @session('email.user') }}
            </div>
            <div class="edit">
                    <button class="btn "> <i class="bi bi-pencil-fill"></i> Editar Perfil  </button>
            </div>
        </div>
        
    </div>
@endsection  

