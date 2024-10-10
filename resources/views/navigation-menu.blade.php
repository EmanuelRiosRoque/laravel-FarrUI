<nav x-data="{ open: false }" class="py-4 border-b  bg-gray-100 border-gray-100 relative z-50" data-aos="fade-down">
    <x-navbar-container>
        <div class="flex justify-between items-center w-full">
            <!-- Contenido centrado (Título) -->
            <div class="flex-1">
                <a wire:navigate class="btn btn-ghost text-xl" href="{{ route('dashboard') }}">
                    <x-logo/>FarrUI</a>
            </div>

            <!-- Contenido alineado a la derecha (Input y avatar) -->
            <div class="flex-none flex gap-4 items-center">
                <x-partial.nav-items/>

                <x-partial.nav-dropdown-menu/>
            </div>
        </div>
    </x-navbar-container>
</nav>
