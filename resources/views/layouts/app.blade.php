<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Servicio de Limpieza - @yield('titulo')</title>
        @vite('resources/css/app.css')
    </head>
    <body class="bg-gray-100">
        <header class="p-5 border-b bg-white shadow">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-3xl font-black">
                    Servicio de Limpieza
                </h1>

                <nav>
                    <a href="#" class="font-bold uppercase text-gray-600 text-sm">Login</a>
                    <a href="#" class="font-bold uppercase text-gray-600 text-sm">Crear cuenta</a>
                </nav>

            </div>

        </header>

        <main class="container mx-auto mt-10">
            <h2 class="font-black text-center text-3xl mb-10">
                @yield('titulo')
            </h2>
            @yield('contenido')
        </main>

        <footer class="text-center p-5 text-gray-500 uppercase font-bold">
            Servicio de Limpieza - Todos los derechos resservados {{ now()->year }}
            @endphp
        </footer>

    </body>
</html>