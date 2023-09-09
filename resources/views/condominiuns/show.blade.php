@extends('master')
@section('content')
    <main class="py-3">
        <div class="d-flex align-items-start justify-content-center flex-column">
            <h5 class="text-start mb-0">Condomíno</h5>
            <h2 class="text-start fw-semibold">{{ $condominium->name }}</h2>
        </div>
        <hr>
        <div class="d-flex align-items-start justify-content-center flex-column">
            <small>Nome</small>
            <p>{{ $condominium->name }}</p>
        </div>
        <form action="{{ route('condominiuns.destroy', ['condominium' => $condominium->id]) }}" method="post">
            @csrf
            <input type="hidden" name="_method" value="delete">
            <a class="btn btn-outline-primary btn-sm float-start" href="{{ route('condominiuns.index') }}">Voltar</a>
            <button type="submit" class="text-decoration-none btn border-0 shadow-none text-danger float-end p-0">
                <span class="material-symbols-outlined">
                    delete
                </span>
            </button>
        </form>
    </main>
@endsection
