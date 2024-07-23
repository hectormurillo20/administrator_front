<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    @vite('resources/css/app.css')
</head>
<body class="flex w-screen h-screen justify-center items-center bg-slate-500">
    <div class="bg-slate-300 rounded">
        {{$slot}}
    </div>
</body>
</html>