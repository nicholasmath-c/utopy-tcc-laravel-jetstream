<div class="min-h-screen flex flex-row sm:justify-center pt-6 sm:pt-0 bg-slate-900">
    <div class=" w-3/5 flex flex-col justify-center items-center bg-slate-900 shadow-xl" style="box-shadow: 4px 0px 4px -2px #0d1424;">
        <div class=" top-0 left-0 ml-7 mt-5 absolute ">
            {{ $logo }}
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-slate-900  overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>

    <div class="w-full flex justify-center items-center ">
        <h1 class=" text-white">
            <img src="{{ url('img\utopy\floatingIsland.png') }}" alt="" class=" animate-updown">
        </h1>
    </div>
</div>
