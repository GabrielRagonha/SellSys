<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inserir novo vendedor') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-sm m-auto">
                    <form class="w-full px-3" action="{{ route('seller.store') }}" method="post">
                        @csrf
                        <div class="flex flex-col gap-4 flex-wrap mb-6">
                            <div class="w-full">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="name">
                                    Nome do vendedor
                                </label>

                                <input
                                    class="appearance-none block w-full bg-white text-gray-700 border border-gray-300 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 placeholder:text-sm placeholder:text-black-300"
                                    id="name" name="name" type="text" placeholder="Insira o nome aqui"
                                    required>

                                @error('name')
                                    <span class="text-red-700 text-sm">Digite um nome válido</span>
                                @enderror
                            </div>

                            <div class="w-full">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="email">
                                    Email do vendedor
                                </label>

                                <input
                                    class="appearance-none block w-full bg-white text-gray-700 border border-gray-300 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 placeholder:text-sm placeholder:text-black-300"
                                    id="email" name="email" type="email" placeholder="Insira o email aqui"
                                    required>

                                @error('email')
                                    <span class="text-red-700 text-sm">Email já cadastrado</span>
                                @enderror
                            </div>
                        </div>

                        <button
                            class="w-full py-2 flex justify-center items-center font-md rounded-md font-semibold text-xs text-white uppercase bg-primary-blue-700 hover:bg-primary-blue-600 transition ease-in-out duration-150"
                            type="submit">Criar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
