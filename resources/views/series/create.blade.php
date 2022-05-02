@extends('layout')

@section('cabecalho')
    Adicinar Série
@endsection

@section('conteudo')
    <form method="post">
        @csrf
            <div class="form-group">
                <label for="nome" class="">Nome</label>
                <input type="text" class="form-control" name="nome">
            </div>

            <button class="btn btn-primary">Adicionar</button>
        </form>
@endsection
