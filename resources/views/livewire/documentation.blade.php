<div class="container">
    <div x-data="{ active: 'instalacion' }">
        <div class="drawer lg:drawer-open">
            <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
            <div class="drawer-content flex flex-col">
              <!-- Contenido dinámico según el elemento activo -->
              <div class="p-20">
                  <template x-if="active === 'instalacion'">
                        <section class="bg-gray-100 shadow-shadow-up p-4 rounded-lg">
                            La forma de instalar los nuevos components es la siguiente forma:
                            <div class=" shadow-shadow-down p-5 rounded-lg">
                                @composer require laravel/ui
                            </div>
                        </section>
                  </template>

                  <template x-if="active === 'item2'">
                      <div>Item 2: Contenido dinámico para el segundo ítem.</div>
                  </template>

                  <template x-if="active === 'item3'">
                      <div>Item 3: Contenido dinámico para el tercer ítem.</div>
                  </template>
                  <!-- Agrega más templates para más items -->
              </div>

              <!-- Botón para abrir el drawer en pantallas pequeñas -->
              <label for="my-drawer-2" class="btn btn-primary drawer-button lg:hidden">
                Open drawer
              </label>
            </div>

            <div class="drawer-side">
              <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>

              <!-- Sidebar con scroll y items -->
              <ul class="menu bg-base-100 text-base-content min-h-full w-80 p-4 overflow-y-auto rounded-xl">
                <li>
                  <a href="#" :class="{ 'shadow-shadow-down': active === 'instalacion' }" @click.prevent="active = 'instalacion'">
                    👨‍💻 Instalación
                  </a>
                </li>
                <li>
                  <a href="#" :class="{ 'shadow-shadow-down': active === 'item2' }" @click.prevent="active = 'item2'">
                    Sidebar Item 2
                  </a>
                </li>
                <li>
                  <a href="#" :class="{ 'shadow-shadow-down': active === 'item3' }" @click.prevent="active = 'item3'">
                    Sidebar Item 3
                  </a>
                </li>
                <!-- Agrega más items según sea necesario -->
              </ul>
            </div>
        </div>
    </div>
</div>

