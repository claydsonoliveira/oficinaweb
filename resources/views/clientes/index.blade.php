
<x-layout titulo="Lista de Clientes">

    <div class="flex justify-end my-3">
            <a class="bg-green-500 border rounded-md p-1 px-3 text-white" href="/clientes/create">Criar cliente</a>
        </div>

        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="max-w-1 px-1 py-2">
                            Código
                        </th>
                        <th scope="col" class="max-w-1 px-1 py-2">
                            Tp. Pessoa
                        </th>
                        <th scope="col" class="max-w-2 px-1 py-2">
                            Documento
                        </th>
                        <th scope="col" class="max-w-8 px-1 py-2">
                            Nome
                        </th>
                        <th scope="col" class="max-w-3 px-1 py-2">
                            Telefone
                        </th>
                        <th scope="col" class="max-w-3 px-1 py-2">
                            Orçamentos
                        </th>
                    </tr>
                </thead>
                <tbody>
                @foreach($clientes as $cliente)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="max-w-1 px-1 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$cliente->id}}
                        </th>
                        <td class="max-w-2 px-1 py-2">
                        {{$cliente->tipo_pessoa}}
                        </td>
                        <td class="max-w-2 px-1 py-2">
                        {{$cliente->documento_1}}
                        </td>
                        <td class="max-w-8 px-1 py-2">
                        {{$cliente->nome}}
                        </td>
                        <td class="max-w-3 px-1 py-2">
                        {{$cliente->telefone}}
                        </td>
                        <td class="max-w-1 px-1 py-2">
                            @forelse ($cliente->budgets as $budget)
                                @if ($loop->last)
                                    {{$budget->numero_orcamento}}
                                @else
                                    {{$budget->numero_orcamento}}{{', '}}
                                @endif
                            @empty
                                Nenhum Orçamento
                            @endforelse
                        </td>
                        </tr>
                @endforeach
                </tbody>
            </table>
        </div>
</x-layout>


