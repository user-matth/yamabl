@extends('master')
@section('content')
    <main class="py-3">
        <div class="d-flex align-items-start justify-content-center flex-column">
            <h5 class="text-start mb-0">Cadastrar morador</h5>
        </div>
        <hr>
        @if (session()->has('message'))
            <div class= "alert alert-success" role="alert">
                {{ session()->get('message') }}
            </div>
        @endif
        <form action="{{ route('residents.store') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-sm-8 d-flex flex-column justify-content-center align-items-start">
                  <label for="firstName" class="form-label">Nome</label>
                  <input type="text" name="name" class="form-control">
                </div>
                <div class="col-sm-4 d-flex flex-column justify-content-center align-items-start">
                    <label for="firstName" class="form-label">Condomínio</label>
                    <select class="form-select" name="condominia_id" aria-label="Select Condominium">
                        @foreach ($condominiums as $condominium)
                            <option value="{{ (int)$condominium->id }}">{{ $condominium->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <a class="btn btn-outline-primary btn-sm mt-4 float-start" href="{{ route('residents.index') }}">Voltar</a>
            <button class="btn btn-primary btn-sm mt-4 float-end">Cadastrar</button>
        </form>
    </main>
@endsection
