<div class="grid grid-cols-6 md:grid-cols-6 gap-4">
    <div class="max-w-25 mb-5">
        <label for="tipo-pessoa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo de Pessoa</label>
        <select name="tipo_pessoa" id="tipo_pessoa" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option value="Física" @if (old('tipo_pessoa', $funcionario->tipo_pessoa ?? '') == "Física") {{ 'selected' }} @endif>Física</option>
            <option value="Jurídica" @if (old('tipo_pessoa', $funcionario->tipo_pessoa ?? '') == "Jurídica") {{ 'selected' }} @endif>Jurídica</option>
        </select>
    </div>
    <div class="max-w-25 mb-5">
        <label for="tipo-documento-1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo de Documento</label>
        <select name="tipo_documento_1" id="tipo_documento_1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option value="CPF" @if (old('tipo_documento_1', $funcionario->tipo_documento_1 ?? '') == "CPF") {{ 'selected' }} @endif>CPF</option>
            <option value="RG" @if (old('tipo_documento_1', $funcionario->tipo_documento_1 ?? '') == "RG") {{ 'selected' }} @endif>RG</option>
            <option value="CNPJ" @if (old('tipo_documento_1', $funcionario->tipo_documento_1 ?? '') == "CNPJ") {{ 'selected' }} @endif>CNPJ</option>
            <option value="INSCRIÇÃO ESTADUAL" @if (old('tipo_documento_1', $funcionario->tipo_documento_1 ?? '') == "INSCRIÇÃO ESTADUAL") {{ 'selected' }} @endif>INSCRIÇÃO ESTADUAL</option>
        </select>
    </div>
    <div class="max-w-25 mb-5">
        <label for="documento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Documento</label>
        <input type="text" name="documento_1" value="{{ old('documento_1', $funcionario->documento_1 ?? '') }}" id="documento_1" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />

    </div>
    <div class="max-w-25 mb-5">
        <label for="tipo-documento-2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo de Documento</label>
        <select name="tipo_documento_2" id="tipo_documento_2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option value="CPF" @if (old('tipo_documento_2', $funcionario->tipo_documento_2 ?? '') == "CPF") {{ 'selected' }} @endif>CPF</option>
            <option value="RG" @if (old('tipo_documento_2', $funcionario->tipo_documento_2 ?? '') == "RG") {{ 'selected' }} @endif>RG</option>
            <option value="CNPJ" @if (old('tipo_documento_2', $funcionario->tipo_documento_2 ?? '') == "CNPJ") {{ 'selected' }} @endif>CNPJ</option>
            <option value="INSCRIÇÃO ESTADUAL" @if (old('tipo_documento_2', $funcionario->tipo_documento_2 ?? '') == "INSCRIÇÃO ESTADUAL") {{ 'selected' }} @endif>INSCRIÇÃO ESTADUAL</option>
        </select>
    </div>
    <div class="max-w-25 mb-5">
        <label for="documento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Documento</label>
        <input type="text" name="documento_2" id="documento_2" value="{{ old('documento_2', $funcionario->documento_2 ?? '') }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
    </div>
    <div class="max-w-25 mb-5">
        <label for="data-nascimento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Data Nascimento</label>
        <input type="date" name="data_nascimento" value="{{ old('data_nascimento', $funcionario->data_nascimento ?? '') }}" id="data_nascimento" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
    </div>

</div>

<div class="grid grid-cols-10 md:grid-cols-10 gap-4">
    <div class="col-span-3 max-w-full mb-5 ">
        <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome</label>
        <input type="text" name="nome" id="nome" value="{{ old('nome', $funcionario->nome ?? '') }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
    </div>
    <div class="col-span-2 max-w-25 mb-5">
        <label for="alcunha" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apelido</label>
        <input type="text" name="alcunha" id="alcunha" value="{{ old('alcunha', $funcionario->alcunha ?? '') }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
    </div>
    <div class="max-w-25 mb-5">
        <label for="cep" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cep</label>
        <input type="text" name="cep" id="cep" value="{{ old('cep', $funcionario->cep ?? '') }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />

    </div>
    <div class="col-span-3 max-w-25 mb-5">
        <label for="logradouro" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Endereço</label>
        <input type="text" name="logradouro" id="logradouro" value="{{ old('logradouro', $funcionario->logradouro ?? '') }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />

    </div>
    <div class="max-w-25 mb-5">
        <label for="numero" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Número</label>
        <input type="text" name="numero" id="numero" value="{{ old('numero', $funcionario->numero ?? '') }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
    </div>
</div>
