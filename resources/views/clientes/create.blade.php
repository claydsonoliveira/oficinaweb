<x-layout titulo="Cadastrar Novo Cliente">



        <form method="post" action="/clientes" class="max-w-none mx-auto">
            @csrf
<!--            <input type="hidden" name="_token" value="{{ csrf_token() }}">
-->

            @include('clientes._form')


            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cadastrar Cliente</button>
        </form>

</x-layout>





            



