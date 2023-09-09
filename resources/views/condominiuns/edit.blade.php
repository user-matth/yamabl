@extends('master')
@section('content')
    <main class="py-3">
        <div class="d-flex align-items-start justify-content-center flex-column">
            <h5 class="text-start mb-0">Editar condomíno</h5>
            <h2 class="text-start fw-semibold">{{ $condominium->name }}</h2>
        </div>
        <hr>
        @if (session()->has('message'))
            <div class= "alert alert-success" role="alert">
                {{ session()->get('message') }}
            </div>
        @endif
        <form action="{{ route('condominiuns.update', ['condominium' => $condominium->id]) }}" method="post">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <div class="row">
                <div class="col-sm-12 d-flex flex-column justify-content-center align-items-start">
                  <label for="firstName" class="form-label">Nome</label>
                  <input type="text" name="name" class="form-control" value="{{ $condominium->name }}">
                </div>
            </div>
            <a class="btn btn-outline-primary btn-sm mt-4 float-start" href="{{ route('condominiuns.index') }}">Voltar</a>
            <button class="btn btn-primary btn-sm mt-4 float-end">Salvar</button>
        </form>
    </main>
@endsection
