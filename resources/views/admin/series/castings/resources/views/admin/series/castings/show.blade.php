@extends('layout')

@section('content')
<table class="table table-dark table-striped">
    <thead>
        <tr>
            <td scope="col">Actor</td>
            <td scope="col">Character</td>
            <td scope="col">Serie</td>
        </tr>
    </thead>
    <tbody>
        @foreach($serie->characters as $character)
        <tr>
            <td>{{ $character->name }}</td>
            <td>{{ $character->actor->name }}</td>
            <td>{{ $serie->name }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
 @endsection