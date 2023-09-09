@extends('master')
@section('content')
    <main class="py-3">
        <div class="d-flex align-items-center justify-content-between flex-row">
            <h4 class="text-start">Condomínos</h4>
            <a href="{{ route('condominiuns.create') }}" class="btn btn-primary btn-sm">Novo</a>
        </div>
        @if (session()->has('message'))
            <div class= "alert alert-success" role="alert">
                {{ session()->get('message') }}
            </div>
        @endif
        <table class="table">
        <thead>
            <tr>
                <th scope="col" style="width: 40px">#</th>
                <th scope="col" class="text-start">Nome</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($condominiuns as $condominium)
                <tr>
                    <th scope="row">{{ $condominium->id }}</th>
                    <td class="text-start">{{ $condominium->name }}</td>
                    <td class="text-end">
                        <a href="{{ route('condominiuns.edit', ['condominium' => $condominium->id]) }}" class="text-black text-decoration-none">
                            <span class="material-symbols-outlined">
                                edit
                            </span>
                        </a>
                        <a href="{{ route('condominiuns.show', ['condominium' => $condominium->id]) }}" class="text-black text-decoration-none">
                            <span class="material-symbols-outlined">
                                visibility
                            </span>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
    </main>
@endsection
