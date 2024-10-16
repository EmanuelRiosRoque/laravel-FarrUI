<div class=" px-16 py-8"  >
    <!-- Pestañas (tabs) para navegar entre secciones -->
    <div x-data="{ tab: 'docs' }" class="mt-6 bg-white shadow-lg rounded-lg">
        <!-- Navegación de las pestañas -->
        <div class="border-b border-gray-200">
            <ul class="flex space-x-4 justify-center">
                <li>
                    <a href="#" @click.prevent="tab = 'docs'"
                        :class="tab === 'docs' ? 'border-b-4 border-slate-800 text-slate-800' : 'text-gray-500 hover:text-slate-800'"
                        class="py-3 px-6 font-semibold transition-colors duration-300">
                        Documentación
                    </a>
                </li>
                <li>
                    <a href="#" @click.prevent="tab = 'code'"
                        :class="tab === 'code' ? 'border-b-4 border-slate-800 text-slate-800' : 'text-gray-500 hover:text-slate-800'"
                        class="py-3 px-6 font-semibold transition-colors duration-300">
                        Html
                    </a>
                </li>
                <li>
                    <a href="#" @click.prevent="tab = 'component'"
                        :class="tab === 'component' ? 'border-b-4 border-slate-800 text-slate-800' : 'text-gray-500 hover:text-slate-800'"
                        class="py-3 px-6 font-semibold transition-colors duration-300">
                        Component
                    </a>
                </li>
            </ul>
        </div>

        <!-- Contenido de las pestañas -->
        <div class="mt-2 p-6">
            <!-- Contenido de Documentación -->
            <div x-show="tab === 'docs'" class="transition-all duration-500">
                <div class=" border border-gray-200 rounded-lg shadow-lg">
                    <nav x-data="{ open: false }" class="border-b bg-gray-100 border-gray-200 relative z-50" data-aos="fade-down">
                        <x-navbar-container>
                            <div class="flex justify-between items-center w-full">
                                <!-- Contenido centrado (Título) -->
                                <div class="flex-1">
                                    <a wire:navigate class="btn btn-ghost text-xl" href="{{ route('dashboard') }}">
                                        FarrUI
                                    </a>
                                </div>

                                <!-- Contenido alineado a la derecha (Input y avatar) -->
                                <div class="flex-none flex gap-4 items-center">
                                    <x-farrUI.nav-items />
                                    <x-farrUI.nav-dropdown />
                                </div>
                            </div>
                        </x-navbar-container>
                    </nav>
                </div>
            </div>

            <!-- Contenido del Código -->
            <div x-show="tab === 'code'" class="transition-all duration-500">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Código HTML</h2>
                <div class=" text-white p-4 rounded-lg shadow-lg overflow-auto">
                    <pre class="whitespace-pre-wrap">
                        <code class="language-html">
&lt;div class="p-16"&gt;
&lt;nav x-data=&quot;{ open: false }&quot; class=&quot;py-4 border-b bg-gray-100 relative z-50&quot;&gt;
    &lt;x-navbar-container&gt;
        &lt;!-- Contenido del navbar --&gt;
    &lt;/x-navbar-container&gt;
&lt;/nav&gt;
&lt;/div&gt;
                        </code>
                    </pre>
                </div>
            </div>

            <div x-show="tab === 'component'" class="transition-all duration-500">
    <h2 class="text-3xl font-bold text-gray-800 mb-4">Código del Componente</h2>

    <div x-data="{ copied: false }" class="text-white p-4 rounded-lg shadow-lg overflow-auto relative">
        <button @click="navigator.clipboard.writeText($refs.codeBlock.innerText); copied = true; setTimeout(() => copied = false, 2000)"
                class="absolute top-2 right-2 bg-gray-800 text-white px-3 py-1 rounded-md text-sm hover:bg-gray-600 transition">
            <span x-show="!copied">Copiar</span>
            <span x-show="copied" style="display: none;">¡Copiado!</span>
        </button>

        <pre class="whitespace-pre-wrap rounded-lg">
            <code x-ref="codeBlock" class="language-html">
&lt;nav x-data=&quot;{ open: false }&quot; class=&quot;border-b bg-gray-100 border-gray-200 relative z-50&quot; data-aos=&quot;fade-down&quot;&gt;
    &lt;x-navbar-container&gt;
        &lt;div class=&quot;flex justify-between items-center w-full&quot;&gt;
            &lt;!-- Contenido centrado (Título) --&gt;
            &lt;div class=&quot;flex-1&quot;&gt;
                &lt;a wire:navigate class=&quot;btn btn-ghost text-xl&quot; href=&quot;#&quot;&gt;
                    FarrUI
                &lt;/a&gt;
            &lt;/div&gt;

            &lt;!-- Contenido alineado a la derecha (Input y avatar) --&gt;
            &lt;div class=&quot;flex-none flex gap-4 items-center&quot;&gt;
                &lt;x-farrUI.nav-items /&gt;
                &lt;x-farrUI.nav-dropdown /&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/x-navbar-container&gt;
&lt;/nav&gt;
            </code>
        </pre>
    </div>
</div>
        </div>
    </div>
</div>


