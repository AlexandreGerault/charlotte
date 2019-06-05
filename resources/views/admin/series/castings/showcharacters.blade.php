@extends('layout')

@section('content')
<h1>{{ $characters[0]->serie->name }}</h1>
<table class="table table-dark table-striped">
    <thead>
        <tr>
            <td scope="col">ID</td>
            <td scope="col">Name</td>
        </tr>
    </thead>
    <tbody>
        @foreach($characters as $character)
        <tr>
            <td>{{ $character->id }}</td>
            <td>{{ $character->name }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
 @endsection