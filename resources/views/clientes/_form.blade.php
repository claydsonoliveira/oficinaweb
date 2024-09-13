<div class="grid grid-cols-6 md:grid-cols-6 gap-4">
    <div class="max-w-25 mb-5">
        <label for="tipo-pessoa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo de Pessoa</label>
        <select name="tipo_pessoa" id="tipo_pessoa" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option value="Física" @if (old('tipo_pessoa', $cliente->tipo_pessoa ?? '') == "Física") {{ 'selected' }} @endif>Física</option>
            <option value="Jurídica" @if (old('tipo_pessoa', $cliente->tipo_pessoa ?? '') == "Jurídica") {{ 'selected' }} @endif>Jurídica</option>
        </select>
    </div>
    <div class="max-w-25 mb-5">
        <label for="tipo-documento-1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo de Documento</label>
        <select name="tipo_documento_1" id="tipo_documento_1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
            <option value="CPF" @if (old('tipo_documento_1', $cliente->tipo_documento_1 ?? '') == "CPF") {{ 'selected' }} @endif>CPF</option>
            <option value="RG" @if (old('tipo_documento_1', $cliente->tipo_documento_1 ?? '') == "RG") {{ 'selected' }} @endif>RG</option>
            <option value="CNPJ" @if (old('tipo_documento_1', $cliente->tipo_documento_1 ?? '') == "CNPJ") {{ 'selected' }} @endif>CNPJ</option>
            <option value="INSCRIÇÃO ESTADUAL" @if (old('tipo_documento_1', $cliente->tipo_documento_1 ?? '') == "INSCRIÇÃO ESTADUAL") {{ 'selected' }} @endif>INSCRIÇÃO ESTADUAL</option>
        </select>
    </div>
    <div class="max-w-25 mb-5">
        <label for="documento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Documento</label>
        <input type="text" name="documento_1" value="{{ old('documento_1', $cliente->documento_1 ?? '') }}" id="documento_1" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />

    </div>
    <div class="max-w-25 mb-5">
        <label for="tipo-documento-2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo de Documento</label>
        <select name="tipo_documento_2" id="tipo_documento_2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option value="CPF" @if (old('tipo_documento_2', $cliente->tipo_documento_2 ?? '') == "CPF") {{ 'selected' }} @endif>CPF</option>
            <option value="RG" @if (old('tipo_documento_2', $cliente->tipo_documento_2 ?? '') == "RG") {{ 'selected' }} @endif>RG</option>
            <option value="CNPJ" @if (old('tipo_documento_2', $cliente->tipo_documento_2 ?? '') == "CNPJ") {{ 'selected' }} @endif>CNPJ</option>
            <option value="INSCRIÇÃO ESTADUAL" @if (old('tipo_documento_2', $cliente->tipo_documento_2 ?? '') == "INSCRIÇÃO ESTADUAL") {{ 'selected' }} @endif>INSCRIÇÃO ESTADUAL</option>
        </select>
    </div>
    <div class="max-w-25 mb-5">
        <label for="documento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Documento</label>
        <input type="text" name="documento_2" id="documento_2" value="{{ old('documento_2', $cliente->documento_2 ?? '') }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" />
    </div>
    <div class="max-w-25 mb-5">
        <label for="data-nascimento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Data Nascimento</label>
        <input type="date" name="data_nascimento" value="{{ old('data_nascimento', $cliente->data_nascimento ?? '') }}" id="data_nascimento" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" />
    </div>

</div>


<div class="grid grid-cols-10 md:grid-cols-10 gap-4">
    <div class="col-span-3 max-w-full mb-5 ">
        <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome</label>
        <input type="text" name="nome" id="nome" value="{{ old('nome', $cliente->nome ?? '') }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
    </div>
    <div class="col-span-2 max-w-25 mb-5">
        <label for="alcunha" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apelido</label>
        <input type="text" name="alcunha" id="alcunha" value="{{ old('alcunha', $cliente->alcunha ?? '') }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" />
    </div>
    <div class="max-w-25 mb-5">
        <label for="cep" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cep</label>
        <input type="text" name="cep" id="cep" value="{{ old('cep', $cliente->cep ?? '') }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />

    </div>
    <div class="col-span-3 max-w-25 mb-5">
        <label for="logradouro" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Endereço</label>
        <input type="text" name="logradouro" id="logradouro" value="{{ old('logradouro', $cliente->logradouro ?? '') }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />

    </div>
    <div class="max-w-25 mb-5">
        <label for="numero" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Número</label>
        <input type="text" name="numero" id="numero" value="{{ old('numero', $cliente->numero ?? '') }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
    </div>
</div>

<div class="grid grid-cols-10 md:grid-cols-10 gap-4">
    <div class="col-span-1 max-w-full mb-5 ">
        <label for="complemento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Complem.</label>
        <input type="text" name="complemento" id="complemento" value="{{ old('complemento', $cliente->complemento ?? '') }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" />
    </div>
    <div class="col-span-2 max-w-25 mb-5">
        <label for="bairro" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bairro</label>
        <input type="text" name="bairro" id="bairro" value="{{ old('bairro', $cliente->bairro ?? '') }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" />
    </div>
    <div class="col-span-3 max-w-25 mb-5">
        <label for="cidade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cidade</label>
        <input type="text" name="cidade" id="cidade" value="{{ old('cidade', $cliente->cidade ?? '') }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" />

    </div>

    <x-select nome="uf" :lista="\App\Enums\EstadosBrasileiros::cases()" :valorPadrao="$cliente->uf ?? ''"></x-select>

    <div class="max-w-25 mb-5">
        <label for="regiao" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Região</label>
        <input type="text" name="regiao" id="regiao" value="{{ old('regiao', $cliente->regiao ?? '') }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" />
    </div>
    <div class="max-w-25 mb-5">
        <label for="telefone-contato" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telefone</label>
        <input type="text" name="telefone_contato" id="telefone_contato" value="{{ old('telefone_contato', $cliente->telefone_contato ?? '') }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"/>
    </div>
    <div class="max-w-25 mb-5">
        <label for="celular" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Celular</label>
        <input type="text" name="celular" id="celular" value="{{ old('celular', $cliente->celular ?? '') }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" />
    </div>
</div>


<div class="grid grid-cols-10 md:grid-cols-10 gap-4">
    <div class="col-span-2 max-w-full mb-5 ">
        <label for="segment_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seguimento</label>
        <select name="segment_id" id="segment_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option value="">Selecione</option>              
            @forelse ($seguimentos as $seguimento)
                <option value="{{ $seguimento->id }}" {{ old('segment_id', $cliente->segment_id ?? '') == $seguimento->id ? 'selected' : '' }} >{{ $seguimento->seguimento }}</option>
            @empty
                <option>Nenhum seguimento encontrado</option>              
            @endforelse    
        </select>
    </div>
    <div class="col-span-3 max-w-25 mb-5">
        <label for="contato" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contato</label>
        <input type="text" name="contato" id="contato" value="{{ old('contato', $cliente->contato ?? '') }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" />
    </div>
    <div class="col-span-3 max-w-25 mb-5">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
        <input type="text" name="email" id="email" value="{{ old('email', $cliente->email ?? '') }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" />

    </div>
    <div class="col-span-1 max-w-25 mb-5">
        <label for="restricao" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Restrição</label>
        <select name="restricao" id="restricao" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option value="Bom" @if (old('restricao', $cliente->restricao ?? '') == "Bom") {{ 'selected' }} @endif>Bom</option>
            <option value="Regular" @if (old('restricao', $cliente->restricao ?? '') == "Regular") {{ 'selected' }} @endif>Regular</option>
            <option value="Ruim" @if (old('restricao', $cliente->restricao ?? '') == "Ruim") {{ 'selected' }} @endif>Ruim</option>
        </select>
    </div>
    <div class="col-span-1 max-w-25 mb-5">
        <label for="tabela-preco" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tab.Preço</label>
        <select name="tabela_preco" id="tabela_preco" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option value="Cliente" @if (old('tabela_preco', $cliente->tabela_preco ?? '') == "Cliente") {{ 'selected' }} @endif>Cliente</option>
            <option value="Locadora" @if (old('tabela_preco', $cliente->tabela_preco ?? '') == "Locadora") {{ 'selected' }} @endif>Locadora</option>
            <option value="Seguradora" @if (old('tabela_preco', $cliente->tabela_preco ?? '') == "Seguradora") {{ 'selected' }} @endif>Seguradora</option>
        </select>
    </div>
</div>

@push('scripts')
    <script src="https://unpkg.com/imask"></script>

    <script>
        IMask(
            document.getElementById('documento_1'),{
                mask: '000.000.000-00'
            }
        );
        IMask(
            document.getElementById('cep'),{
                mask: '00.000-000'
            }
        );
    </script>

@endpush
