@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalhes da Cidade</h1>
    <h2>{{ $cidade['nome'] }} - {{ $cidade['estado'] }}</h2>
    <p><strong>População:</strong> {{ number_format($cidade['populacao']) }} habitantes</p>
    <p><strong>Área:</strong> {{ $cidade['area'] }} km²</p>
    <p><strong>País:</strong> {{ $cidade['pais'] }}</p>
    <a href="{{ url('/') }}" class="btn btn-primary">Voltar</a>
</div>
@endsection
