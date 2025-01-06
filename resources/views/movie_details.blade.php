<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CINEMA21 | LOOKED MOVIES AND TV SHOWS</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="w-full h-screen flex flex-col relative">
        @php
            $backdropPath = $movieData ? "{$imageBaseURL}/original{$movieData->backdrop_path}" : "";
        @endphp
        <img class="w-full h-screen absolute object-cover lg:object-fill" src="{{ $backdropPath }}" alt="Backdrop">
        <div class="w-full h-screen absolute bg-black bg-opacity-60 z-10"></div>

        <div class="w-full h-full z-20 flex flex-col justify-center px-20">
            <span class="font-quicksand font-bold text-6xl mt-4 text-white">{{ $title }}</span>

            @if ($trailerID)
            <button class="w-fit bg-blue-500 text-white pl-4 pr-6 py-3 mt-5 font-inter text-xl flex flex-row rounded-lg items-center hover:drop-shadow-lg duration-200" onclick="showTrailer(true, '{{ $trailerID }}')">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.525 18.025C9.19167 18.2417 8.854 18.254 8.512 18.062C8.17067 17.8707 8 17.575 8 17.175V6.82499C8 6.42499 8.17067 6.12899 8.512 5.93699C8.854 5.74566 9.19167 5.75832 9.525 5.97499L17.675 11.15C17.975 11.35 18.125 11.6333 18.125 12C18.125 12.3667 17.975 12.65 17.675 12.85L9.525 18.025Z" fill="white"></path>
                </svg>
                <span>Play Trailer</span>
            </button>
            @endif
        </div>

        <div id="trailerWrapper" class="absolute z-10 w-full h-screen p-20 bg-black hidden flex-col">
            <button class="ml-auto group mb-4" onclick="showTrailer(false)">
                <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48">
                    <path d="m12.45 37.65-2.1-2.1L21.9 24 10.35 12.45l2.1-2.1L24 21.9l11.55-11.55 2.1 2.1L26.1 24l11.55 11.55-2.1 2.1L24 26.1Z" class="fill-white group-hover:fill-red-500 duration-200"></path>
                </svg>
            </button>
            <iframe id="trailerFrame" class="w-full h-full" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>

    <script>
        window.onload = function() {
            function showTrailer(show, trailerID = '') {
                const trailerWrapper = document.getElementById('trailerWrapper');
                const trailerFrame = document.getElementById('trailerFrame');

                if (show) {
                    trailerWrapper.classList.remove('hidden');
                    trailerFrame.src = `https://www.youtube.com/embed/${trailerID}?autoplay=1`;
                } else {
                    trailerWrapper.classList.add('hidden');
                    trailerFrame.src = '';
                }
            }
        }
    </script>
</body>
</html>
