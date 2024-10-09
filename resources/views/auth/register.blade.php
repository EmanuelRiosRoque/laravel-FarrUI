<x-guest-layout>
    <div class="flex h-screen">
        <!-- Left Pane -->
        <div class="hidden lg:flex items-center justify-center flex-1 bg-gray-100 text-black">
            <div class=" max-w-2xl text-center">
                <img src="{{ asset('img/auth/register-temp.png') }}" alt="Image temporal">
            </div>
        </div>

        <!-- Right Pane -->
        <div class="w-full bg-white lg:w-1/2 flex items-center justify-center">
            <div class="max-w-md w-full p-6">
                <h1 class="text-3xl font-semibold mb-6 text-black text-center">
                    {{ __('Sing Up') }}
                </h1>
                <h1 class="text-sm font-semibold mb-6 text-gray-500 text-center">
                    {{ __('Any welcome message') }}
                </h1>
                <div class="mt-4 flex flex-col lg:flex-row items-center justify-between">
                <!-- If you need login with google in this project you have the component: -->
                {{-- <x-login-google/> --}}
                <!-- If you need login with github in this project you have the component: -->
                {{-- <x-login-github/> --}}
                </div>
                <div class="mt-4 text-sm text-gray-600 text-center">
                    <p>
                        {{ __('Or with email') }}
                    </p>
                </div>

                <form action="{{ route('register')}}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" id="name" name="name" class="mt-1 p-2 w-full border rounded-md focus:border-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 transition-colors duration-300">
                    </div>
                    @error('name')
                        <x-error-alert>
                            {{ $message }}
                        </x-error-alert>
                    @enderror
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="text" id="email" name="email" class="mt-1 p-2 w-full border rounded-md focus:border-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 transition-colors duration-300">
                    </div>
                    @error('email')
                        <x-error-alert>
                            {{ $message }}
                        </x-error-alert>
                    @enderror
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" id="password" name="password" class="mt-1 p-2 w-full border rounded-md focus:border-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 transition-colors duration-300">
                    </div>
                    @error('password')
                        <x-error-alert>
                            {{ $message }}
                        </x-error-alert>
                    @enderror
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="mt-1 p-2 w-full border rounded-md focus:border-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 transition-colors duration-300" autocomplete="new-password">
                    </div>
                    @error('password_confirmation')
                        <x-error-alert>
                            {{ $message }}
                        </x-error-alert>
                    @enderror
                    <div class=" mt-3">
                        <button type="submit" class="w-full bg-slate-400 text-white p-2 rounded-md hover:bg-green-800 focus:outline-none focus:bg-black focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900 transition-colors duration-300">
                            {{ __('Sing Up') }}
                        </button>
                    </div>
                </form>

                <div class="mt-4 text-sm text-gray-600 text-center">
                    <p>You already have an account ? <a wire:navigate href="{{route('login')}}" class="text-black hover:underline">Log In</a></p>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
