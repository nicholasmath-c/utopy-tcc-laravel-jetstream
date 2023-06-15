<x-admin-layout>
    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-800 p-10 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="card-header">
                    <h1 class="font-heading text-white text-xl mb-10">Todos os Jogos</h1>
                </div>
                <div class="flex flex-row justify-between ">
                    <div>
                        <x-button class="w-auto mb-10 align-center"><a href="{{ route('game.create') }}"
                                class="">Adicionar</a>
                        </x-button>
                    </div>
                    <div>
                        <form action="" class="relative mx-auto w-max items-center search-cancel-button:appearance-none ">
                            <input type="search"
                                class="peer cursor-pointer relative z-10 h-12 rounded-full border bg-transparent pl-12 ring-main-500 outline-none w-full focus:cursor-text focus:border-main-500 focus:pl-16 focus:pr-4 transition-all ease-linear focus:ring-0" />
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="absolute inset-y-2 h-8 w-12 border-r border-transparent stroke-slate-500 px-3.5 peer-focus:border-main-500 peer-focus:stroke-main-500"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </form>
                    </div>
                </div>

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    @csrf
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-white uppercase bg-main-500">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Capa
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Título
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Gênero
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Desenvolvedor
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Descrição
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Preço
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Data de Lançamento
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Classificação Indicativa
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Ações
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-slate-900">
                            @foreach ($game as $games)
                                <tr>
                                    <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">
                                        <img src="{{ asset("storage/img/games_img/$games->thumb") }}" alt=""
                                            width=150>
                                    </th>
                                    <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">
                                        {{ $games->title }}
                                    </th>
                                    <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">
                                        {{ $games->genreGame->name }}
                                    </th>
                                    <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">
                                        {{ $games->developer->firstname }} {{ $games->developer->lastname }}
                                    </th>
                                    <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">
                                        {{ $games->description }}
                                    </th>
                                    <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">
                                        R$ {{ $games->price }}
                                    </th>
                                    <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">
                                        {{ $games->release_date }}
                                    </th>
                                    <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">
                                        {{ $games->age_rating }}
                                    </th>
                                    <td class="px-6 py-4 gap-10">
                                        <a href="{{ route('game.edit', $games->id) }}"
                                            class="font-medium text-white hover:underline">
                                            Editar
                                        </a>
                                        <form action="" method="POST" class="delete inline-block ml-2">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="font-medium text-main-500 hover:underline">
                                                Excluir
                                            </button>
                                        </form>
                                        <button id='btnRm' data-game='{{ $games->id }}'
                                            class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Abrir
                                            Popup</button>

                                        <div id="popup"
                                            class="game{{ $games->id }} fixed inset-0 flex items-center justify-center z-10 hidden">
                                            <!-- Overlay -->
                                            <div class="fixed inset-0 bg-gray-900 opacity-75"></div>

                                            <!-- Conteúdo do Popup -->
                                            <div class="relative bg-white rounded-lg p-8">
                                                <h2 class="text-2xl font-bold mb-4">Título do Popup</h2>
                                                <p>Conteúdo do Popup vai aqui...</p>
                                                <div class="mt-6 flex justify-end">
                                                    <button onclick="closePopup()"
                                                        class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Fechar</button>
                                                </div>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="my-4">
                        {{ $game->links() }}
                    </div>

                    <section class="py-10">
                        <div class="mx-auto grid max-w-6xl  grid-cols-1 gap-6 p-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                          <article class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 ">
                            <a href="#">
                              <div class="relative flex items-end overflow-hidden rounded-xl">
                                <img src="https://images.unsplash.com/photo-1515955656352-a1fa3ffcd111?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="Hotel Photo" />
                                <div class="flex items-center space-x-1.5 rounded-lg bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                  </svg>

                                  <button class="text-sm">Add to cart</button>
                                </div>
                              </div>

                              <div class="mt-1 p-2">
                                <h2 class="text-slate-700">Adobe Photoshop CC 2022</h2>
                                <p class="mt-1 text-sm text-slate-400">Lisbon, Portugal</p>

                                <div class="mt-3 flex items-end justify-between">
                                    <p class="text-lg font-bold text-blue-500">$850</p>

                                  <div class="flex items-center space-x-1.5 rounded-lg bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                    </svg>

                                    <button class="text-sm">Add to cart</button>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </article>
                          <article class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 ">
                            <a href="#">
                              <div class="relative flex items-end overflow-hidden rounded-xl">
                                <img src="https://images.unsplash.com/photo-1511556532299-8f662fc26c06?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="Hotel Photo" />
                                <div class="absolute bottom-3 left-3 inline-flex items-center rounded-lg bg-white p-2 shadow-md">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                  </svg>
                                  <span class="ml-1 text-sm text-slate-400">4.9</span>
                                </div>
                              </div>

                              <div class="mt-1 p-2">
                                <h2 class="text-slate-700">The Hilton Hotel</h2>
                                <p class="mt-1 text-sm text-slate-400">Lisbon, Portugal</p>

                                <div class="mt-3 flex items-end justify-between">
                                    <p class="text-lg font-bold text-blue-500">$850</p>


                                  <div class="flex items-center space-x-1.5 rounded-lg bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                    </svg>

                                    <button class="text-sm">Add to cart</button>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </article>

                          <article class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 ">
                            <a href="#">
                              <div class="relative flex items-end overflow-hidden rounded-xl">
                                <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="Hotel Photo" />
                                <div class="flex items-center space-x-1.5 rounded-lg bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                  </svg>

                                  <button class="text-sm">Add to cart</button>
                                </div>
                              </div>

                              <div class="mt-1 p-2">
                                <h2 class="text-slate-700">The Hilton Hotel</h2>
                                <p class="mt-1 text-sm text-slate-400">Lisbon, Portugal</p>

                                <div class="mt-3 flex items-end justify-between">
                                    <p class="text-lg font-bold text-blue-500">$450</p>
                                  <div class="flex items-center space-x-1.5 rounded-lg bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                    </svg>

                                    <button class="text-sm">Add to cart</button>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </article>

                          <article class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 ">
                            <a href="#">
                              <div class="relative flex items-end overflow-hidden rounded-xl">
                                <img src="https://images.unsplash.com/flagged/photo-1556637640-2c80d3201be8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="Hotel Photo" />
                                <div class="flex items-center space-x-1.5 rounded-lg bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                  </svg>

                                  <button class="text-sm">Add to cart</button>
                                </div>
                              </div>

                              <div class="mt-1 p-2">
                                <h2 class="text-slate-700">The Hilton Hotel</h2>
                                <p class="mt-1 text-sm text-slate-400">Lisbon, Portugal</p>

                                <div class="mt-3 flex items-end justify-between">
                                    <p class="text-lg font-bold text-blue-500">$450</p>
                                  <div class="flex items-center space-x-1.5 rounded-lg bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                    </svg>

                                    <button class="text-sm">Add to cart</button>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </article>
                          <article class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 ">
                            <a href="#">
                              <div class="relative flex items-end overflow-hidden rounded-xl">
                                <img src="https://images.unsplash.com/photo-1520256862855-398228c41684?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1169&q=80" alt="Hotel Photo" />
                                <div class="flex items-center space-x-1.5 rounded-lg bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                  </svg>

                                  <button class="text-sm">Add to cart</button>
                                </div>
                              </div>

                              <div class="mt-1 p-2">
                                <h2 class="text-slate-700">The Hilton Hotel</h2>
                                <p class="mt-1 text-sm text-slate-400">Lisbon, Portugal</p>

                                <div class="mt-3 flex items-end justify-between">
                                    <p class="text-lg font-bold text-blue-500">$450</p>
                                  <div class="flex items-center space-x-1.5 rounded-lg bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                    </svg>

                                    <button class="text-sm">Add to cart</button>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </article>
                          <article class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 ">
                            <a href="#">
                              <div class="relative flex items-end overflow-hidden rounded-xl">
                                <img src="https://images.unsplash.com/photo-1551107696-a4b0c5a0d9a2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1112&q=80" alt="Hotel Photo" />
                                <div class="flex items-center space-x-1.5 rounded-lg bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                  </svg>

                                  <button class="text-sm">Add to cart</button>
                                </div>
                              </div>

                              <div class="mt-1 p-2">
                                <h2 class="text-slate-700">The Hilton Hotel</h2>
                                <p class="mt-1 text-sm text-slate-400">Lisbon, Portugal</p>

                                <div class="mt-3 flex items-end justify-between">
                                    <p class="text-lg font-bold text-blue-500">$450</p>

                                  <div class="flex items-center space-x-1.5 rounded-lg bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                    </svg>

                                    <button class="text-sm">Add to cart</button>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </article>
                          <article class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 ">
                            <a href="#">
                              <div class="relative flex items-end overflow-hidden rounded-xl">
                                <img src="https://images.unsplash.com/photo-1539185441755-769473a23570?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80" alt="Hotel Photo" />
                                <div class="flex items-center space-x-1.5 rounded-lg bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                  </svg>

                                  <button class="text-sm">Add to cart</button>
                                </div>
                              </div>

                              <div class="mt-1 p-2">
                                <h2 class="text-slate-700">The Hilton Hotel</h2>
                                <p class="mt-1 text-sm text-slate-400">Lisbon, Portugal</p>

                                <div class="mt-3 flex items-end justify-between">
                                    <p class="text-lg font-bold text-blue-500">$450</p>

                                  <div class="flex items-center space-x-1.5 rounded-lg bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                    </svg>

                                    <button class="text-sm">Add to cart</button>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </article>
                          <article class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 ">
                            <a href="#">
                              <div class="relative flex items-end overflow-hidden rounded-xl">
                                <img src="https://images.unsplash.com/photo-1549298916-b41d501d3772?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1112&q=80" alt="Hotel Photo" />
                                <div class="flex items-center space-x-1.5 rounded-lg bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                  </svg>

                                  <button class="text-sm">Add to cart</button>
                                </div>
                              </div>

                              <div class="mt-1 p-2">
                                <h2 class="text-slate-700">The Hilton Hotel</h2>
                                <p class="mt-1 text-sm text-slate-400">Lisbon, Portugal</p>

                                <div class="mt-3 flex items-end justify-between">
                                    <p class="text-lg font-bold text-blue-500">$450</p>

                                  <div class="flex items-center space-x-1.5 rounded-lg bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                    </svg>

                                    <button class="text-sm">Add to cart</button>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </article>
                      </section>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
</x-admin-layout>

<script>
    $(document).on('submit', '.delete', function() {
        return confirm('Deseja realmente excluir esse jogo?');
    });

    $('#btnRm').click(function(e) {
        var gameClass = e.currentTarget.dataset.game;
        $(`.game${gameClass}`).removeClass('hidden');
    });

    /*function openPopup() {
        var popup = document.getElementById("popup");
        popup.classList.remove("hidden");
    }*/

    function closePopup() {
        var popup = document.getElementById("popup");
        popup.classList.add("hidden");
    };
</script>
