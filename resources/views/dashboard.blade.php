<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="card text-center">
                    <br>
                    <h2>Usuario Logueado con éxito.</h2>
                    <img src="https://e7.pngegg.com/pngimages/376/171/png-clipart-computer-icons-user-account-login-login-logo-vector-icons-thumbnail.png" class="rounded mx-auto d-block" alt="..." height="300" width="300">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
