<x-guest-layout title="Login">
    <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
        <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
            <div class="flex flex-col overflow-y-auto md:flex-row">
                <div class="h-32 md:h-auto md:w-1/2">
                    <img aria-hidden="true" class="object-cover w-full h-full dark:hidden" src="{{ asset('img/login-pills.jpeg') }}" alt="Office" />
                    <img aria-hidden="true" class="hidden object-cover w-full h-full dark:block" src="{{ asset('img/login-office-dark.jpeg')}}" alt="Office" />
                </div>
                <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                    <div class="w-full">
                        <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
                            Tratamientos Médicos Farmacológicos
                        </h1>
                        @if ($errors->any())
                        <div class="mb-4">
                            <div class="font-medium text-red-600">Algo ha ido mal.</div>

                            <ul class="mt-3 text-sm text-red-600 list-disc list-inside">
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        @if (session('status'))
                        <div class="mb-4 text-sm font-medium text-green-600">
                            {{ session('status') }}
                        </div>
                        @endif
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <label class="block text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Email</span>
                                <x-input placeholder="Jane Doe" name="email" value="{{ old('email') }}" required autofocus />
                            </label>
                            <label class="block mt-4 text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Password</span>
                                <x-input placeholder="***************" type="password" name="password" required autocomplete="current-password" />
                            </label>
                            <label class="block mt-4 text-sm">
                                <input type="checkbox" class="form-checkbox" name="remember"> <span class="ml-1 text-gray-700 dark:text-gray-400">Recuérdame</span>
                            </label>
                            <x-button class="block w-full px-4" type="submit">
                                {{ __('Login') }}
                            </x-button>
                        </form>

                        <p class="mt-4">
                            <x-responsive-nav-link href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </x-responsive-nav-link>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
