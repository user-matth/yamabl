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
        <a class="btn btn-outline-primary btn-sm mt-4 float-start" href="{{ route('residents.index') }}">Voltar</a>
    </main>
@endsection
