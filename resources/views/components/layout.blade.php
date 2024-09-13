<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <x-menu />

    <div class="container mx-auto">

        <h1 class="text-2xl font-bold text-center">
             {{ $titulo }}
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

        @if (session('mensagem'))  
            <div class="p-2 bg-lime-500 text-black border-2 border-lime-600 rounded-sm text-center">
                {{ session('mensagem') }}
            </div>
        @endif


        {{ $slot}}

    </div>

    @stack('scripts')

</body>
</html>
