<div>
    <div
        class=" bg-white w-[350px] rounded -drop-shadow-md hover:drop-shadow-xl transition-all shadow-black overflow-hidden">
        <div class=" flex flex-row">
            <div class="relative overflow-hidden group ">
                <div class=" w-[350px] h-[180px] overflow-hidden ">
                    <img src="{{ $imgPost }}" alt=""
                        class=" w-full transition-transform duration-500 transform-gpu group-hover:scale-110 ">
                </div>
                <div class=" h-[250px] w-[350px] px-8 py-5">
                    <h2 class=" text-gray-400">{{ $genero }}</h2>
                    <h3 class=" text-[24px] font-bold">{{ $titulo }}</h3>
                    <p>{{ $descripcion }}</p>
                </div>
                <div class=" h-[50px] flex px-10 justify-between text-gray-400">
                    <div class=" relative flex flow-row h-7 justify-center gap-3">
                        <img src="{{ $imgAutor }}" alt="" class=" rounded-full">
                        <p>{{ $nombreAutor }}</p>
                    </div>
                    <div>
                        <p>{{ $fechaPost }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
