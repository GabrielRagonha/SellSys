<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @if (Session::has('success'))
            <div class="fixed z-10 bottom-5 right-10 rounded-md bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md"
                role="alert">
                <div class="flex">
                    <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path
                                d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                        </svg></div>
                    <div>
                        <p class="font-bold">Sucesso!</p>
                        <p class="text-sm">{{ session::get('success') }}</p>
                    </div>
                </div>
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
                        <p>Nenhuma venda cadastrada!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script type="module" src="{{ Vite::asset('resources/js/alerts.js') }}"></script>
    @endpush
</x-app-layout>
