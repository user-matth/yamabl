@extends('master')
@section('content')
    <main class="py-3">
        <div class="d-flex align-items-center justify-content-between flex-row">
            <h4 class="text-start">Residentes</h4>
            <a href="{{ route('residents.create') }}" class="btn btn-primary btn-sm">Novo</a>
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
            @foreach ($residents as $resident)
                <tr>
                    <th scope="row">{{ $resident->id }}</th>
                    <td class="text-start">{{ $resident->name }}</td>
                    <td class="text-end">
                        <a href="{{ route('residents.edit', ['resident' => $resident->id]) }}" class="text-black text-decoration-none">
                            <span class="material-symbols-outlined">
                                edit
                            </span>
                        </a>
                        <a href="{{ route('residents.show', ['resident' => $resident->id]) }}" class="text-black text-decoration-none">
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
