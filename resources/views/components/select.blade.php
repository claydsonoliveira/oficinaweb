@php
    $valorPadrao = old($nome, $valorPadrao ?? '');
@endphp

<div class="col-span-1 max-w-25 mb-5">
    <label for="uf" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">UF</label>
    <select name="uf" id="uf" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

        @foreach ($lista as $item)
            <option value="{{$item->name}}" {{ $item->name == $valorPadrao ? 'selected' : '' }} >{{$item->value}}</option>
        @endforeach
    </select>
</div>
