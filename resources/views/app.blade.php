<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <main class=" bg-[#F5F7F8] h-screen flex flex-col items-center">
        <nav class="w-full border-b-2 flex flex-row justify-between h-[75px] items-center px-16 bg-white">
            <ul class=" flex flex-row gap-10">
                <li>
                    <div>
                        <img src="{{ route('image.show', ['filename' => 'justread-logo.webp']) }}" alt="Imagen">
                    </div>
                </li>
                <li>ABOUT</li>
                <li>CATEGORIES</li>
                <li>READABILITY</li>
                <li>CONTACT</li>
            </ul>
            <ul class="flex flex-row h-[75px] items-center gap-3">
                <li class="hover:cursor-pointer">
                    <img src="{{ route('svg.show', ['filename' => 'facebook.svg']) }}" alt="SVG">
                </li>
                <li class="hover:cursor-pointer">
                    <img src="{{ route('svg.show', ['filename' => 'bxl-twitter.svg']) }}" alt="SVG">
                </li>
                <li class="hover:cursor-pointer">
                    <img src="{{ route('svg.show', ['filename' => 'bxl-github.svg']) }}" alt="SVG">
                </li>
                <li class="hover:cursor-pointer">
                    <img src="{{ route('svg.show', ['filename' => 'bxl-instagram.svg']) }}" alt="SVG">
                </li>
                <li class=" bg-[#0066CC] h-full flex w-[75px] justify-center items-center ml-3 hover:cursor-pointer">
                    <button>
                        <img src="{{ route('svg.show', ['filename' => 'bx-search.svg']) }}" alt="SVG">
                    </button>
                </li>
            </ul>
        </nav>
        <div class="w-[80%] flex flex-row flex-wrap justify-around p-10">

            @foreach ($formattedPosts as $post)
                <x-card>
                    <x-slot name="titulo">
                        {{ $post->titulo }}
                    </x-slot>
                    <x-slot name="genero">
                        {{ $post->genero }}
                    </x-slot>
                    <x-slot name="descripcion">
                        {{ $post->descripcion }}
                    </x-slot>
                    <x-slot name="nombreAutor">
                        {{ $post->autor }}
                    </x-slot>
                    <x-slot name="fechaPost">
                        {{ $post->fecha_de_publicacion }}
                    </x-slot>
                    <x-slot name="imgPost">
                        data:image/jpeg;base64,{{ base64_encode($post->imagen_post) }}
                    </x-slot>
                    <x-slot name="imgAutor">
                        data:image/jpeg;base64,{{ base64_encode($post->imagen_autor) }}
                    </x-slot>
                </x-card>
            @endforeach


        </div>
    </main>
</body>

</html>
