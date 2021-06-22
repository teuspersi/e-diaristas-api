@extends('app')

@section('titulo', 'Criar Diarista')

@section('conteudo')
    <h1>Criar Diarista</h1>
    <form action="{{ route('diaristas.store') }}" method="POST" enctype="multipart/form-data" class="mt-3 mb-3">
       
        @include('_form')

    </form>
@endsection
