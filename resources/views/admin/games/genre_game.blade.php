@extends('layouts.admin.master')
@section('title','Categoria de Jogos')
@section('content')

<div class="container">
    <div class="row mt-3">
        <div class="col-sm-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    Consulta Categoria de Jogos
                    <a href="{{route('game.genre.create')}}" class="btn btn-success btn-sm float-end">Nova Notícia</a>
                </div>

                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                          </tr>
                        </thead>
                        <tbody>

                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
