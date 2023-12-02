<x-mail::message>
    # {{ date('d/m/Y') }} - Relatório de vendas

    Prezado vendedor, o total de vendas foi: R$ {{ number_format($sales, 2, ',', '.') }}

    {{ config('app.name') }}
</x-mail::message>
