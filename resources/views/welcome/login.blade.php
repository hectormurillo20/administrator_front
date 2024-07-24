<x-welcome>
    <h1 class="flex text-4xl p-4 justify-center">Inicio de Sesión</h1>
    <form action="{{route('login')}}" method="POST" class="p-4 items-center justify-center">
        @csrf
        @method('POST')
        <div class="p-2">
            <label for="email" class="mr-2">Correo electronico</label>
            <input id="email" class="rounded" type="email" name="email" placeholder="Ingresa tu correo electronico" size="30" required>
        </div>
        <div class="p-2">
            <label for="password" class="mr-2">Contraseña</label>
            <input id="password" class="rounded" type="password" name="password" placeholder="Ingresa tu contraseña" required>
        </div>
        <div class="flex p-2 justify-end">
            <button class="bg-slate-400 rounded p-2 hover:bg-white" type="submit">Iniciar Sesión</button>
        </div>
    </form>
</x-welcome>