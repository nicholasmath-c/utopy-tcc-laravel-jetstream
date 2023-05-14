<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Início') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="card-header">
                    Cadastro de Categorias
                    <a href="{{ url('/admin/genre-game/') }}" class="btn btn-success btn-sm float-end"
                        style="color: rgb(214, 31, 175)">
                        Consulta Categorias
                    </a>
                    <br>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ url("admin/genre-game/$categoria->id") }}">
                        {{ method_field('PATCH') }}
                        @csrf


                        <div class="mb-2">
                            <label for="nome">Nome da categoria</label>
                            <input type="text" name="id" id="nome_categoria" class="form-control hidden" required
                                value="{{ $categoria->id }}" />
                            <input type="text" name="nome" id="nome_categoria" class="form-control" required
                                value="{{ $categoria->name }}" />

                        </div>
                        <button type="submit" class="btn btn-success"
                            style="padding: 12px; background: #444; color: #fff;">
                            Gravar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>

</x-admin-layout>
