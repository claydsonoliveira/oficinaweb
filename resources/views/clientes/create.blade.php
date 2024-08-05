<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
        <nav class="bg-gray-300">
            <div class="container mx-auto flex items-center justify-between p-4">
                <a href="/" class="text-2xl font-semibold">Workshop</a>

                <ul class="font-medium px-4">
                    <li class="px-4">
                        <a href="/clientes">Cadastro de Clientes</a>
                    </li>
                </ul>
            </div>
        </nav>
    <div class="container mx-auto">

        <h1 class="text-4xl font-bold text-center">
            Cadastrar Novo Clientes
        </h1>

        @if ($errors->any())
            <div class="flex justify-between items-center p-2 bg-red-500 text-white border-2 border-red-500 rounded-sm">
                <span class="text-xs">Erros de validação</span>
                <ul class="flex flex-col mt-1">
                @foreach($errors->all() as $error)
                    <li class="text-sm text-center">{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif


        <form method="post" action="/clientes" class="max-w-none mx-auto">
            @csrf
<!--            <input type="hidden" name="_token" value="{{ csrf_token() }}">
-->
            <div class="grid grid-cols-6 md:grid-cols-6 gap-4">
                    <div class="max-w-25 mb-5">
                        <label for="tipo-pessoa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo de Pessoa</label>
                        <select name="tipo_pessoa" id="tipo_pessoa" value="{{ old('tipo_pessoa') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option>Física</option>
                            <option>Jurídica</option>
                        </select>
                    </div>
                    <div class="max-w-25 mb-5">
                        <label for="tipo-documento-1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo de Documento</label>
                        <select name="tipo_documento_1" id="tipo_documento_1" value="{{ old('tipo_documento_1') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option>CPF</option>
                            <option>RG</option>
                            <option>CNPJ</option>
                            <option>INSCRIÇÃO ESTADUAL</option>
                        </select>
                    </div>
                    <div class="max-w-25 mb-5">
                        <label for="documento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Documento</label>
                        <input type="text" name="documento_1" value="{{ old('documento_1') }}" id="documento_1" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />

                    </div>
                    <div class="max-w-25 mb-5">
                        <label for="tipo-documento-2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo de Documento</label>
                        <select name="tipo_documento_2" id="tipo_documento_2" value="{{ old('tipo_documento_2') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option>CPF</option>
                            <option>RG</option>
                            <option>CNPJ</option>
                            <option>INSCRIÇÃO ESTADUAL</option>
                        </select>
                    </div>
                    <div class="max-w-25 mb-5">
                        <label for="documento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Documento</label>
                        <input type="text" name="documento_2" id="documento_2" value="{{ old('documento_2') }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
                    </div>
                    <div class="max-w-25 mb-5">
                        <label for="data-nascimento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Data Nascimento</label>
                        <input type="date" name="data_nascimento" value="{{ old('data_nascimento') }}" id="data_nascimento" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
                    </div>

            </div>

            <div class="grid grid-cols-10 md:grid-cols-10 gap-4">
                    <div class="col-span-3 max-w-full mb-5 ">
                        <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome</label>
                        <input type="text" name="nome" id="nome" value="{{ old('nome') }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
                    </div>
                    <div class="col-span-2 max-w-25 mb-5">
                        <label for="alcunha" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apelido</label>
                        <input type="text" name="alcunha" id="alcunha" value="{{ old('alcunha') }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
                    </div>
                    <div class="max-w-25 mb-5">
                        <label for="cep" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cep</label>
                        <input type="text" name="cep" id="cep" value="{{ old('cep') }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />

                    </div>
                    <div class="col-span-3 max-w-25 mb-5">
                        <label for="logradouro" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Endereço</label>
                        <input type="text" name="logradouro" id="logradouro" value="{{ old('logradouro') }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />

                    </div>
                    <div class="max-w-25 mb-5">
                        <label for="numero" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Número</label>
                        <input type="text" name="numero" id="numero" value="{{ old('numero') }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
                    </div>
            </div>



            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cadastrar Cliente</button>
        </form>







            


    </div>

</body>
</html>

