<x-admin-layout>
    <div class="w-full py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-800 p-10 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex flex-col-2 justify-between">
                    <h1 class="font-heading text-white text-xl mb-10">Admissões</h1>

                    <div>
                        <form action=""
                            class="relative mx-auto w-max items-center search-cancel-button:appearance-none ">
                            <input id="search" type="search"
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
                <div class="mt-4 mx-4">
                    <div class="w-full overflow-hidden rounded-lg shadow-xs">
                        <div class="w-full overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                    <tr
                                        class="text-xs font-semibold tracking-wide text-left uppercase border-b border-slate-700 text-slate-400 bg-slate-900">
                                        <th class="px-4 py-3">Código da Admissão</th>
                                        <th class="px-4 py-3">Desenvolvedor</th>
                                        <th class="px-4 py-3">Status</th>
                                        <th class="px-4 py-3">Ações</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-700 bg-slate-800">
                                    @foreach ($admission as $admissions)
                                        <tr class="bg-slate-700 text-slate-100">
                                            <td class="px-4 py-3 text-sm">{{ $admissions->id }}</td>

                                            <td class="px-4 py-3">
                                                <div class="flex items-center text-sm">
                                                    <div>
                                                        <p class="font-semibold">
                                                            {{ $admissions->developer->user->firstname }}
                                                            {{ $admissions->developer->user->lastname }}</p>
                                                        <p class="text-xs">{{ $admissions->developer->user->nickname }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="px-4 py-3 text-xs">
                                                @if ($admissions->developer->admission == 'Approved')
                                                    <span
                                                        class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                                        Aprovado </span>
                                                @elseif ($admissions->developer->admission == 'Rejected')
                                                    <span
                                                        class="px-2 py-1 font-semibold leading-tight text-gray-700 bg-gray-100 rounded-full dark:text-gray-100 dark:bg-gray-700">
                                                        Rejeitado </span>
                                                @elseif ($admissions->developer->admission == 'Pending')
                                                    <span
                                                        class="px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-100 rounded-full">
                                                        Pendente </span>
                                                @endif
                                            </td>
                                            <td class="px-4 py-3 text-sm flex flex-row gap-5">
                                                @if ($admissions->developer->admission != 'Approved' && $admissions->developer->admission != 'Rejected')
                                                    <form method="POST"
                                                        action="{{ route('developer.admissions.control', $admissions->id) }}"
                                                        class="flex flex-row gap-5">
                                                        @csrf
                                                        <input type="text" value="{{ $admissions->developer->id }}"
                                                            name="developer_id" hidden>
                                                        <x-button name="approve" class="bg-green-600 hover:bg-green-700 focus:bg-green-500 focus:ring-green-600">Aprovar
                                                        </x-button>
                                                        <x-button name="reject" class="">Reprovar</x-button>
                                                    </form>
                                                @endif
                                                <a
                                                    href="{{ route('game-page', ['id' => $admissions->id, 'title' => $admissions->title]) }}">
                                                    <x-button class="bg-slate-500 hover:bg-slate-600 focus:bg-slate-400 focus:ring-slate-500">Analisar Jogo</x-button>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="my-4 text-white flex-grow col-span-4">
                            {{ $admission->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-admin-layout>
