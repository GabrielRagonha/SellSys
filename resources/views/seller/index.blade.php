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
                <div class="p-6 text-gray-900">
                    @if ($sellers->count() > 0)
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <table
                                class="rounded-lg w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th class="px-6 py-3">ID</th>
                                        <th class="px-6 py-3">Nome</th>
                                        <th class="px-6 py-3">Email</th>
                                        <th class="px-6 py-3">Data da criação</th>
                                        <th class="px-6 py-3">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sellers as $seller)
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <td
                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $seller->id }}</td>
                                            <td class="px-6 py-4">{{ $seller->name }}</td>
                                            <td class="px-6 py-4">{{ $seller->email }}</td>
                                            <td class="px-6 py-4">{{ date('d/m/Y', strtotime($seller->created_at)) }}
                                            </td>
                                            <td class="px-6 py-4">
                                                <div>
                                                    <a href="{{ route('seller.show', $seller->id) }}" type="button"
                                                        class="btn btn-secondary">Detalhes</a>
                                                    <a href="{{ route('seller.edit', $seller->id) }}" type="button"
                                                        class="btn btn-warning">Editar</a>
                                                    <form action="{{ route('seller.destroy', $seller->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger m-0">Excluir</button>
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
