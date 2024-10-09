<x-app-layout>
    {{-- Hero --}}
    <div class="relative hero min-h-[90vh] bg-gray-100 flex items-center justify-center text-center shadow-2xl z-10">
        <!-- Texto centrado -->
        <div class="absolute inset-0 z-10 flex flex-col items-center justify-center">
            <h1 class="mb-5 text-3xl font-bold text-black">Diseña interfaces dinámicas, impulsa tus ideas 🚀🌟.</h1>
            <!-- Arrow  -->
            <a href="#presetation">
                <div class="text-black mt-5 animate-bounce">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
            </a>
        </div>

        <!-- Waves  -->
        <div class="absolute bottom-0 left-0 right-0 w-full">
            <x-waves />
        </div>
    </div>



    {{-- First Section --}}
    <section class="container mx-auto py-20" id="presetation">
        <div class="flex justify-center">
            <div class=" text-center  py-2 w-36 rounded-xl shadow-shadow-down">
                <h1 class=" text-gray-700 font-bold text-xl">{{__('Hello !') }}</h1>
            </div>
        </div>

        <div class="mt-10">
            <div class="flex w-full flex-col lg:flex-row">
                <!-- Primera tarjeta con alto automático -->
                <x-section-card title="Bienvenido a FarrUI" textButton="Empieza ahora" href="{{ route('documentation') }}">
                    Hola este proyecto esta siendo realizado por -
                    <span class="inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-4 h-4">
                            <path
                                d="M12 0C5.373 0 0 5.373 0 12c0 5.303 3.438 9.8 8.205 11.387.6.11.82-.26.82-.577 0-.285-.011-1.04-.016-2.04-3.338.725-4.042-1.61-4.042-1.61-.546-1.387-1.333-1.756-1.333-1.756-1.09-.745.083-.73.083-.73 1.204.085 1.838 1.236 1.838 1.236 1.07 1.834 2.805 1.304 3.492.997.107-.775.418-1.305.761-1.605-2.665-.304-5.466-1.332-5.466-5.93 0-1.31.468-2.38 1.236-3.22-.124-.303-.536-1.523.118-3.176 0 0 1.008-.323 3.3 1.23a11.52 11.52 0 013.003-.404 11.52 11.52 0 013.003.404c2.292-1.553 3.3-1.23 3.3-1.23.654 1.653.242 2.873.118 3.176.768.84 1.236 1.91 1.236 3.22 0 4.61-2.804 5.624-5.475 5.92.43.37.814 1.1.814 2.22 0 1.605-.014 2.9-.014 3.292 0 .32.216.694.825.576C20.565 21.796 24 17.302 24 12c0-6.627-5.373-12-12-12z" />
                        </svg>
                        <a href="https://github.com/EmanuelRiosRoque">
                            @EmanuelRiosRoque.
                        </a>
                    </span>
                    <br>
                    El objetivo de este proyecto es juntar las mejores tecnologías y estilos de <span
                        class="font-black">Tailwind</span>
                    para un desarrollo más moderno
                    <br> Si deseas empezar:
                    <br>

                </x-section-card>

                <div class="divider lg:divider-horizontal">OR</div>


                <x-section-card title="About Project" textButton="Conocer mas" href="{{ route('documentation') }}">
                    En este apartado conoceras el motivo de el proyecto y el por que debes usar esta libreria de
                    componentes, te facilitara el proceso de ralizar sitios modernos sin necesidad de empezar desdes 0
                    esta libreria cuenta con la ayuda de librerias UI ya existentes tales como:

                    <div class=" flex justify-between gap-10 p-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 54 33" fill="currentColor" class="w-6 h-6">
                            <path
                                d="M13.5 0C7.706 0 3.614 2.67 1.224 8.01c2.26-1.682 4.504-2.496 6.731-2.446 2.752.06 4.86 1.364 6.325 3.913C16.744 13.026 18.51 15.2 22.5 15.2c5.794 0 9.886-2.67 12.276-8.01-2.26 1.682-4.505 2.496-6.732 2.446-2.752-.06-4.86-1.364-6.325-3.913C20.756 2.174 18.99 0 15 0zm18 16.5c-5.794 0-9.886 2.67-12.276 8.01 2.26-1.682 4.505-2.496 6.732-2.446 2.752.06 4.86 1.364 6.325 3.913C37.256 30.826 39.022 33 43.012 33c5.794 0 9.886-2.67 12.276-8.01-2.26 1.682-4.505 2.496-6.732 2.446-2.752-.06-4.86-1.364-6.325-3.913C38.744 18.474 36.978 16.5 33 16.5z" />
                        </svg>

                        <p class="font-black">
                            DaisyUI
                        </p>
                    </div>
                </x-section-card>


            </div>
        </div>
    </section>
</x-app-layout>
