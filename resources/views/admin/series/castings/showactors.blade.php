@extends('layout')

@section('content')
    <h1>Acteurs de {{ $serie->name }}</h1>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <td scope="col">ID</td>
                <td scope="col">Name</td>
            </tr>
        </thead>
        <tbody>
            @foreach($actors as $actor)
            <tr>
                <td>{{ $actor->id }}</td>
                <td>{{ $actor->name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
 @endsection