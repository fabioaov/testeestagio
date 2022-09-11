<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="grid grid-cols-5 gap-4">
                        @foreach ($mesas as $mesa)
                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                    <div class="p-6 bg-white border-b border-gray-200">
                                        <h2 class="text-center font-bold pb-3">{{ $mesa->nome }}</h2>
                                        <span class="font-semibold">Vagas:</span> {{ $mesa->vagas }}<br>
                                        <span class="font-semibold">Ocupantes:</span> {{ $mesa->ocupantes }}<br>
                                        <h2 class="text-center font-semibold pt-3">
                                            @if ($mesa->condicao == 0)
                                                <span class="text-green-500">Mesa livre</span>
                                            @else
                                                <span class="text-red-500">Mesa ocupada</span>
                                            @endif
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
