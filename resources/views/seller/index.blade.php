<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vendedores') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ session::get('success') }}
            </div>
        @endif

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    @if ($sellers->count() > 0)
                        <div class="mb-4 relative overflow-x-auto shadow-md sm:rounded-lg">
                            <table class="rounded-lg w-full text-sm text-left">
                                <thead class="text-xs text-black uppercase bg-table-head">
                                    <tr>
                                        <th class="px-6 py-3">ID</th>
                                        <th class="px-6 py-3">Nome</th>
                                        <th class="px-6 py-3">Email</th>
                                        <th class="px-6 py-3">Data da criação</th>
                                        <th class="px-6 py-3">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sellers as $key => $seller)
                                        <tr class="text-black {{ $key % 2 ? 'bg-table-row' : 'bg-white' }}">
                                            <td class="px-6 py-4">{{ $seller->id }}</td>
                                            <td class="px-6 py-4">{{ $seller->name }}</td>
                                            <td class="px-6 py-4">{{ $seller->email }}</td>
                                            <td class="px-6 py-4">{{ date('d/m/Y', strtotime($seller->created_at)) }}
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="flex flex-col gap-2">
                                                    <a href="{{ route('seller.show', $seller->id) }}" type="button"
                                                        class="flex text-white items-center justify-center w-full bg-blue-500 rounded-sm py-1 text-sm">Detalhes</a>
                                                    <a href="{{ route('seller.edit', $seller->id) }}" type="button"
                                                        class="flex text-white items-center justify-center w-full bg-yellow-500 rounded-sm py-1 text-sm">Editar</a>
                                                    <form action="{{ route('seller.destroy', $seller->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button
                                                            class="flex text-white items-center justify-center w-full bg-red-500 rounded-sm py-1 text-sm">Excluir</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        {{ $sellers->links() }}
                    @else
                        <p>Nenhum vendedor cadastrado!
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
