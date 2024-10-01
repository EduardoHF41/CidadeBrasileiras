@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Cidades</h1>
    <ul class="list-group">
        @foreach($cidades as $cidade)
        <li class="list-group-item">
            <a class="" style="color: black;" href="{{ url('/cidade/' . $cidade['id']) }}">
                {{ $cidade['nome'] }} - {{ $cidade['estado'] }} - {{$cidade['pais']}}
            </a>
        </li>
        @endforeach
    </ul>
</div>
@endsection
