@extends('master')
@section('content')
    <main class="py-3">
        <div class="d-flex align-items-center justify-content-between flex-row">
            <h2 class="text-start">Residentes</h2>
            <a href="/yamabl/public/residents/create" class="btn btn-primary btn-sm">Novo</a>
        </div>
        <hr>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
            </tr>
        </tbody>
        </table>
        <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
        <p class="lead">
        <a href="#" class="btn btn-lg btn-light fw-bold border-white bg-white">Learn more</a>
        </p>
    </main>
@endsection
