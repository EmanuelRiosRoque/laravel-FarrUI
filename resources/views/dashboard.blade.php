<x-app-layout>
    {{-- Hero --}}
    <div class="relative hero min-h-[90vh] bg-slate-100 flex items-center justify-center text-center shadow-2xl ">
        <!-- Texto centrado -->
        <div class="absolute inset-0 z-10 flex flex-col items-center justify-center">
            <h1 class="mb-5 text-3xl font-bold text-black" data-aos="zoom-in-up">Diseña interfaces dinámicas, impulsa tus ideas 🚀🌟.</h1>
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
    <div class="rotate-180">
        <x-waves />
    </div>

    <section class="container mx-auto py-20 min-h-[100vh] flex flex-col items-center justify-center" id="presetation">
        <!-- Encabezado centrado -->
        <div class="flex justify-center" data-aos="fade-up">
            <div class="text-center py-2 w-36 rounded-xl shadow-down">
                <h1 class="text-gray-700 font-bold text-xl">{{ __('Hola !') }}</h1>
            </div>
        </div>

        <!-- Contenido centrado -->
        <div class="mt-10 w-full">
            <div class="flex w-full flex-col lg:flex-row items-stretch justify-center gap-10">
                <!-- Primera tarjeta con animación, utilizando flex-grow y h-full -->
                <x-section-card class="flex-grow h-full" scroll="fade-right" title="Bienvenido a FarrUI" textButton="Empieza ahora" href="{{ route('documentation') }}" navigate="true">
                    Hola este proyecto está siendo realizado por -
                    <span class="inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-4 h-4">
                            <path d="M12 0C5.373 0 0 5.373 0 12c0 5.303 3.438 9.8 8.205 11.387.6.11.82-.26.82-.577 0-.285-.011-1.04-.016-2.04-3.338.725-4.042-1.61-4.042-1.61-.546-1.387-1.333-1.756-1.333-1.756-1.09-.745.083-.73.083-.73 1.204.085 1.838 1.236 1.838 1.236 1.07 1.834 2.805 1.304 3.492.997.107-.775.418-1.305.761-1.605-2.665-.304-5.466-1.332-5.466-5.93 0-1.31.468-2.38 1.236-3.22-.124-.303-.536-1.523.118-3.176 0 0 1.008-.323 3.3 1.23a11.52 11.52 0 013.003-.404 11.52 11.52 0 013.003.404c2.292-1.553 3.3-1.23 3.3-1.23.654 1.653.242 2.873.118 3.176.768.84 1.236 1.91 1.236 3.22 0 4.61-2.804 5.624-5.475 5.92.43.37.814 1.1.814 2.22 0 1.605-.014 2.9-.014 3.292 0 .32.216.694.825.576C20.565 21.796 24 17.302 24 12c0-6.627-5.373-12-12-12z" />
                        </svg>
                        <a href="https://github.com/EmanuelRiosRoque">@EmanuelRiosRoque</a>.
                    </span>
                    <br>El objetivo de este proyecto es juntar las mejores tecnologías y estilos de <span class="font-black"><a href="https://tailwindcss.com">Tailwind</a></span> para un desarrollo más moderno.
                </x-section-card>

                <!-- Divisor -->
                <div class="divider lg:divider-horizontal">OR</div>

                <!-- Segunda tarjeta con animación, utilizando flex-grow y h-full -->
                <x-section-card class="flex-grow h-full" scroll="fade-left" title="Sobre el Proyecto" textButton="Conocer más" href="#kwonmore">
                    Bueno este proyecto tiene como objetivo implementar librerias ui y tamplates fuera de lo convencional en dejando a un lado elementos UI facilitando al desarrollador tener a la mano componentes atractivos
                </x-section-card>
            </div>
        </div>
    </section>


    {{-- Second Section --}}
    <section class="container mx-auto py-20 min-h-[100vh]" id="kwonmore">
        <div class="flex justify-center" data-aos="fade-up">
            <div class="text-center py-2 w-36 rounded-xl shadow-down">
                <h1 class="text-gray-700 font-bold text-xl">{{ __('Hello !') }}</h1>
            </div>
        </div>

            <div class="mt-10">
                <div class="flex w-full flex-col lg:flex-row gap-5">
                    <div class="card rounded-box grid flex-grow lg:w-1/2 p-5 place-items-center px-10 relative" data-aos="fade-right">
                        <div class="absolute inset-0 z-0 flex justify-center items-center">
                            <div class="w-full h-full flex flex-col justify-center items-center">
                                <x-waves />
                                <div class="rotate-180">
                                    <x-waves />
                                </div>
                            </div>
                        </div>

                        <div x-data="{ scrollY: 0 }" x-init="window.addEventListener('scroll', () => scrollY = window.scrollY)" class="relative z-10 flex justify-center flex-col items-center p-32 text-white glass-1">
                            <span :class="scrollY > 1465 ? 'scale-125 text-black' : 'scale-100'" class="transform transition-transform duration-500">Esto es FarrUI</span>
                            <span :class="scrollY > 1595 ? 'scale-125 text-black'  : 'scale-100'" class="transform transition-transform duration-500 delay-200">Componentes Modernos</span>
                            <span :class="scrollY > 1789 ? 'scale-125 text-black' : 'scale-100'" class="transform transition-transform duration-500 delay-400">Con clases simples para modelar</span>
                        </div>
                    </div>



                    {{-- <div class="divider lg:divider-horizontal">OR</div> --}}

                    <!-- Segunda tarjeta con animación -->
                    <x-section-card w='w-40' hoverColor="bg-red-600" scroll="fade-left" title="Motivacion" textButton="Laravel" href="https://laravel.com">
                        Mi motivación para este proyecto es mejorar los elementos UI y templates en Laravel. Aunque Laravel ha evolucionado, muchos de sus componentes UI siguen siendo simples y poco atractivos. Además, hay una falta de templates versátiles, ya que la mayoría están centrados en análisis de datos. Mi objetivo es demostrar que Laravel tiene el potencial para ofrecer interfaces modernas y proyectos de alta calidad, más allá de su enfoque en bases de datos. Un ejemplo de esto es este sitio web, desarrollado con Laravel.
                    </x-section-card>
                </div>
            </div>
    </section>

    {{-- <section class="container mx-auto py-20 min-h-[100vh]" id="kwonmore">
        <div class="flex justify-center" data-aos="fade-up">
            <div class="text-center py-2 w-36 rounded-xl shadow-down">
                <h1 class="text-gray-700 font-bold text-xl">{{ __('Hello !') }}</h1>
            </div>
        </div>

            <div class="mt-10">

            </div>
    </section> --}}

    <script>
        window.addEventListener('scroll', function() {
            console.log(window.scrollY);
        });
    </script>
</x-app-layout>
