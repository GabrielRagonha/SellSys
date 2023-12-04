<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vendedor') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <form action="{{ route('seller.update', $seller->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <input name="name" type="text" value="{{ $seller->name }}" required>

                        <input name="email" type="email" value="{{ $seller->email }}" required>

                        <button type="submit">Editar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
