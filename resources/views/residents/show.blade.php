@extends('master')
@section('content')
    <main class="py-3">
        <div class="d-flex align-items-start justify-content-center flex-column">
            <h5 class="text-start mb-0">Morador(a)</h5>
            <h2 class="text-start fw-semibold">{{ $resident->name }}</h2>
        </div>
        <hr>
        <div class="d-flex align-items-start justify-content-center flex-column">
            <small>Nome</small>
            <p>{{ $resident->name }}</p>
            <small>Condomínio</small>
            <p>{{ $condominiuns['name'] }}</p>
        </div>
        <form action="{{ route('residents.destroy', ['resident' => $resident->id]) }}" method="post">
            @csrf
            <input type="hidden" name="_method" value="delete">
            <a class="btn btn-outline-primary btn-sm float-start" href="{{ route('residents.index') }}">Voltar</a>
            <button type="submit" class="text-decoration-none btn border-0 shadow-none text-danger float-end p-0">
                <span class="material-symbols-outlined">
                    delete
                </span>
            </button>
        </form>
    </main>
@endsection
