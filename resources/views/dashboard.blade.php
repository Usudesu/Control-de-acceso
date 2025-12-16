<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>

        

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <div class="relative w-full text-center">
            <div class="flex max-w-[335px] mx-auto dark:text-[#EDEDEC] border-[#19140035]">
                Bienvenido
            </div>

            <p class="max-w-7xl mx-auto sm:px-6 lg:px-8 dark:text-gray-200">
                {{ __("Este es tu dashboard")}}
            </p>

    </div>


</x-app-layout>

