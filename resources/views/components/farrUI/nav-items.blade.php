<ul class="menu menu-horizontal px-1">
    <li>
        <x-nav-link wire:navigate href="#" :active="request()->routeIs('dashboard')">
            {{ __('Dashboard') }}
        </x-nav-link>
    </li>
    <li>
        <x-nav-link wire:navigate href="#" :active="request()->routeIs('documentation')">
            {{ __('Documentation') }}
        </x-nav-link>
    </li>
    <li>
        <x-partial.nav-items-dropdown>
            <li><a href="">Link 1</a></li>
            <li><a href="">Link 2</a></li>
            <li><a href="">Link 3</a></li>
        </x-partial.nav-items-dropdown>
    </li>
</ul>
