@extends ('layouts.main')

@section ('title', 'Produtos')

@section ('content')

<h1> Está é a página de Produtos</h1>
<a href = "/"> Voltar para home</a>
<h1> Produtos</h1>
    @if ($busca != '')

    <p>O usuário está buscando por: {{ $busca }}</p>

    @endif

@endsection