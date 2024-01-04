@extends('layouts.auth')

@section('content')
    <div class="container">
        <h2>Inserir Dados</h2>

        <form action="{{ route('cars.store') }}" method="post">
            @csrf
            <!-- Adicione os campos necessários para a inserção de dados -->
            <!-- Exemplo: -->
            <label for="brand">Marca:</label>
            <select name="brand" id="brand">
                @foreach($brands as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                @endforeach
            </select>

            <!-- Adicione os outros campos, como modelo, características, etc. -->

            <button type="submit">Inserir</button>
        </form>
    </div>
@endsection