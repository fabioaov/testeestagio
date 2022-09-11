<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Produtos') }}
        </h2>
        <h2 class="font-semibold text-l text-gray-800 leading-tight pt-4">
            <x-nav-link :href="route('produtos.novo')" :active="request()->routeIs('produtos.novo')">
                {{ __('Novo produto') }}
            </x-nav-link>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="w-full whitespace-no-wrapw-full whitespace-no-wrap">
                        <thead>
                            <tr class="text-center font-bold">
                                <td class="border px-6 py-4">Nome</td>
                                <td class="border px-6 py-4">Valor</td>
                                <td class="border px-6 py-4">Estoque</td>
                            </tr>
                        </thead>
                        @foreach ($produtos as $produto)
                            <tr>
                                <td class="border px-6 py-4"><a href="{{ route('produtos.ver', $produto->id) }}">{{ $produto->nome }}</a></td>
                                <td class="border px-6 py-4"><a href="{{ route('produtos.ver', $produto->id) }}">{{ $produto->valor }}</a></td>
                                <td class="border px-6 py-4"><a href="{{ route('produtos.ver', $produto->id) }}">{{ $produto->estoque }}</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
