<div class="dropdown dropdown-end">
    <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
        <div class="w-10 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-10">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            </svg>
        </div>
    </div>
    <ul tabindex="0"
        class="menu menu-sm dropdown-content bg-base-100 rounded-box mt-3 w-52 p-2 shadow z-20">
        <li>
            <a class="justify-between" href="{{ route('profile.show') }}">
                {{ __('Profile') }}
            </a>
        </li>
        <form method="POST" action="{{ route('logout') }}" x-data>
            <li>
                @csrf
                <a href="{{ route('logout') }}" @click.prevent="$root.submit();">
                    {{ __('Log Out') }}
                </a>
            </li>
        </form>
    </ul>
</div>
