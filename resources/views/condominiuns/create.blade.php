@extends('master')
@section('content')
    <main class="py-3">
        <h2 class="text-start">Registrar Residente</h2>
        <hr>
        <form action="{{ route('store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-sm-8 d-flex flex-column justify-content-center align-items-start">
                  <label for="firstName" class="form-label">Nome</label>
                  <input type="text" name="name" class="form-control">
                </div>
                <div class="col-sm-4 d-flex flex-column justify-content-center align-items-start">
                  <label for="firstName" class="form-label">ID do Condomínio</label>
                  <input type="number" name="condominia_id" class="form-control">
                </div>
            </div>
            <button class="btn btn-primary btn-sm mt-4 float-end">Adicionar</button>
        </form>
    </main>
@endsection
