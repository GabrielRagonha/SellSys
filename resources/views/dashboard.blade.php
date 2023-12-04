<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ session::get('success') }}
            </div>
        @endif

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    @if ($sales->count() > 0)
                        <div class="mb-4 relative overflow-x-auto shadow-md sm:rounded-lg">
                            <table class="rounded-lg w-full text-sm text-left">
                                <thead class="text-xs text-black uppercase bg-table-head">
                                    <tr>
                                        <th class="px-6 py-3">ID da venda</th>
                                        <th class="px-6 py-3">Vendedor</th>
                                        <th class="px-6 py-3">Email do vendedor</th>
                                        <th class="px-6 py-3">Comissão</th>
                                        <th class="px-6 py-3">Preço da venda</th>
                                        <th class="px-6 py-3">Data da venda</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sales as $key => $sale)
                                        <tr class="text-black {{ $key % 2 ? 'bg-table-row' : 'bg-white' }}">
                                            <td class="px-6 py-4">{{ $sale->id }}</td>
                                            <td class="px-6 py-4">{{ $sale->name }}</td>
                                            <td class="px-6 py-4">{{ $sale->email }}</td>
                                            <td class="px-6 py-4">R$ {{ number_format($sale->commission, 2, ',', '.') }}
                                            </td>
                                            <td class="px-6 py-4">R$ {{ number_format($sale->sale_value, 2, ',', '.') }}
                                            </td>
                                            <td class="px-6 py-4">{{ date('d/m/Y', strtotime($sale->created_at)) }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>

                        {{ $sales->links() }}
                    @else
                        <p>Nenhuma venda cadastrada!
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
