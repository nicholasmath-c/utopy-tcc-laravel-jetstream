@extends('layouts.admin.master')
@section('title','Categorias')
@section('content')

<div class="container">
    <div class="row mt-3">
        <div class="col-sm-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    Cadastro de Categorias
                    <a href="{{route('game.genre.index')}}" class="btn btn-success btn-sm float-end">Consulta Categorias</a>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('game.genre.store') }}" >
                        @csrf

                        <div class="mb-2">
                            <label for="nome">Nome da categoria</label>
                            <input type="text" name="nome" id="nome_categoria" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-success">Gravar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
