<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-500">
    <div class="flex justify-end">
        @if (Route::is('login'))
            <a class="p-2 m-4 bg-slate-400 hover:bg-white rounded" href="{{route('register')}}">Registro</a>    
        @else
            <a class="p-2 m-4 bg-slate-400 hover:bg-white rounded" href="{{route('login')}}">Iniciar sesion</a>
        @endif
    </div>
    <div class="flex w-screen h-screen justify-center items-center">
        <div class="bg-slate-300 rounded">
            {{$slot}}
        </div>
    </div>
</body>
</html>