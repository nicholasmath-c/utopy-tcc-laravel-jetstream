<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LiveSearchController extends Controller
{
    public function gameSearch(Request $request){
        if($request->ajax()){
            $output = '';
            $query = $request->get('query');
            if($query != ''){
                $data = DB::table('games')
                    ->where('title', 'like', '%'.$query.'%')
                    ->orderBy('id', 'desc')
                    ->get();
            }
            else{
                $data = DB::table('games')
                    ->orderBy('id', 'desc')
                    ->get();
            }

            $total_row = $data->count();
            if($total_row > 0){
               foreach($data as $games){
                    $output .= '
                    <article
                                class="mx-auto rounded-xl bg-slate-900 p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 max-w-fit">
                                <a href="'. route('game-page', ['id' => $games->id, 'title' => $games->title]).'"
                                    target="_blank">
                                    <div class="relative flex items-center overflow-hidden rounded-xl">
                                        <img src="{{ url("storage/games/$games->title/$games->banner") }}"
                                            alt="{{ $games->title }}" class="object-cover h-48 mx-auto" />
                                    </div>

                                    <div class="mt-1 p-2">
                                        <h2 class="text-white">{{ $games->title }}</h2>
                                        <p class="mt-1 text-sm text-slate-400">{{ $games->genreGame->name }}</p>

                                        <div class="mt-3 flex items-end justify-between">
                                            <p class="text-lg font-bold text-white">R${{ $games->final_price }}</p>
                                            <div class="flex flex-row gap-2">
                                                <a href="'. route('game-page', ['id' => $games->id, 'title' => $games->title]) .'"
                                                    target="_blank">
                                                    <div
                                                        class="flex items-center justify-center space-x-1.5 rounded-lg bg-slate-700 px-6 py-3 text-white duration-100 hover:bg-slate-300">
                                                        <svg class="h-4 w-4 fill-white"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                            x="0px" y="0px" viewBox="0 0 24 30"
                                                            enable-background="new 0 0 24 24" xml:space="preserve">
                                                            <g>
                                                                <path fill="#ffffff"
                                                                    d="M18.8,13.7c-0.2,0-0.4,0.2-0.4,0.4v6.2H3.6V5.8h6.3c0.2,0,0.4-0.2,0.4-0.4S10.1,5,9.9,5H3.2   C3,5,2.8,5.2,2.8,5.4v15.3c0,0.2,0.2,0.4,0.4,0.4h15.6c0.2,0,0.4-0.2,0.4-0.4v-6.6C19.2,13.9,19.1,13.7,18.8,13.7z" />
                                                                <path fill="#ffffff"
                                                                    d="M20.8,2.8h-6.7c-0.2,0-0.4,0.2-0.4,0.4s0.2,0.4,0.4,0.4h5.7L8.3,15.1c-0.2,0.2-0.2,0.4,0,0.6   c0.1,0.1,0.2,0.1,0.3,0.1s0.2,0,0.3-0.1L20.4,4.3V10c0,0.2,0.2,0.4,0.4,0.4s0.4-0.2,0.4-0.4V3.3C21.2,3,21,2.8,20.8,2.8z" />
                                                            </g>

                                                        </svg>
                                                    </div>
                                                </a>
                                                <a href="'. route('game.edit', $games->id) .'">
                                                    <div
                                                        class="flex items-center justify-center space-x-1.5 rounded-lg bg-slate-700 px-6 py-3 text-white duration-100 hover:bg-slate-300">
                                                        <svg class="h-4 w-4 fill-white"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                            x="0px" y="0px" viewBox="0 0 32 36"
                                                            style="enable-background:new 0 0 32 32;"
                                                            xml:space="preserve">
                                                            <path
                                                                d="M15.9868164,25.2851562l12.953125-12.953125C29.6235352,11.6484375,30,10.7397461,30,9.7734375  c0-0.9667969-0.3764648-1.8754883-1.0600586-2.5585938l-4.1542969-4.1547852c-1.4111328-1.4111328-3.706543-1.4121094-5.1176758,0  l-12.953125,12.953125c-1.0883789,1.0883789-1.8774414,2.4477539-2.2817383,3.9316406l-2.3979492,8.7919922  C1.8586705,29.3444157,2.3612406,30.0179615,3,30h26c0.5522461,0,1-0.4477539,1-1s-0.4477539-1-1-1H10.4672241l1.5879517-0.4331055  C13.5390625,27.1625977,14.8989258,26.3735352,15.9868164,25.2851562z M11.5288086,25.637207l-7.1035156,1.9375l1.9375-7.1040039  c0.3129883-1.1484375,0.9238281-2.2006836,1.7661133-3.043457l8.8837891-8.8837891l6.4438477,6.4438477l-8.8837891,8.8837891  c-0.8427734,0.8422852-1.8950195,1.453125-3.043457,1.7661133C11.5288086,25.637207,11.5288086,25.637207,11.5288086,25.637207z   M23.371582,4.4741211l4.1542969,4.1547852C27.831543,8.9345703,28,9.3413086,28,9.7734375s-0.168457,0.8383789-0.4741211,1.1445312  l-2.6552734,2.6552734l-6.4438477-6.4438477l2.6552734-2.6552734c0.315918-0.3154297,0.7299805-0.4731445,1.1450195-0.4731445  C22.6411133,4.0009766,23.0561523,4.1586914,23.371582,4.4741211z" />
                                                        </svg>
                                                    </div>
                                                </a>

                                                <form action="'. route('game.destroy', $games->id) .'" method="POST"
                                                    class="delete inline-block">
                                                    @csrf
                                                    @method("DELETE")
                                                    <button type="submit"
                                                        class="flex items-center justify-center space-x-1.5 rounded-lg bg-red-500 px-6 py-3 text-white duration-100 hover:bg-slate-300">
                                                        <svg class="h-4 w-4 fill-white"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                            x="0px" y="0px" viewBox="0 0 100 125"
                                                            enable-background="new 0 0 100 100" xml:space="preserve">
                                                            <path
                                                                d="M42.69,86.005c0.015,0,0.03,0,0.045,0c1.381-0.024,2.479-1.163,2.456-2.543l-1-56.782c-0.024-1.38-1.133-2.487-2.544-2.456  c-1.381,0.024-2.479,1.163-2.456,2.543l1,56.782C40.216,84.915,41.33,86.005,42.69,86.005z M57.315,86.005  c1.36,0,2.475-1.09,2.499-2.456l1-56.782c0.023-1.38-1.075-2.519-2.456-2.543c-1.367-0.032-2.519,1.076-2.544,2.456l-1,56.782  c-0.023,1.38,1.075,2.519,2.456,2.543C57.285,86.005,57.301,86.005,57.315,86.005z M76.977,24.224  c-1.358-0.031-2.534,1.038-2.579,2.418l-2.001,62.22c0,1.695-1.376,3.073-3.067,3.073H30.68c-1.694,0-3.073-1.378-3.074-3.154  l-2-62.14c-0.045-1.38-1.227-2.456-2.579-2.418c-1.38,0.044-2.463,1.199-2.419,2.579l1.999,62.059c0,4.452,3.622,8.073,8.073,8.073  h38.649c4.448,0,8.067-3.622,8.066-7.993l2-62.14C79.439,25.423,78.356,24.269,76.977,24.224z M82.02,14.224H17.98  c-1.381,0-2.5,1.119-2.5,2.5s1.119,2.5,2.5,2.5H82.02c1.381,0,2.5-1.119,2.5-2.5S83.4,14.224,82.02,14.224z M34.469,12.064  c1.381,0,2.5-1.119,2.5-2.5c0-0.827,0.673-1.5,1.5-1.5h23.063c0.827,0,1.5,0.673,1.5,1.5c0,1.381,1.119,2.5,2.5,2.5  s2.5-1.119,2.5-2.5c0-3.584-2.916-6.5-6.5-6.5H38.469c-3.584,0-6.5,2.916-6.5,6.5C31.969,10.945,33.088,12.064,34.469,12.064z" />
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </article>
                    ';
               }
            }
            else{
                $output = 'Nenhum resultado encontrado... ☹️';
            }

            $data = array(
                'table_data' => $output,
                'total_data' => $total_row
            );

            echo json_encode($data);
        }
    }
}
