<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colima Quest Tours</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="icon" href="source/log.ico" type="image/x-icon">
    <link rel="shortcut icon" href="source/icono.ico" type="image/x-icon">
    <style>
        .swiper-container {
            width: 100%;
            height: 60vh;
        }
        .swiper-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        body {
            padding-top: 64px; /* Ajusta este valor según la altura del encabezado */
        }
        .bg-custom {
            background-color: #617755;
        }
        .text-custom {
            color: #617755;
        }
        .bg-custom-hover:hover {
            background-color: #617755;
        }
    </style>
</head>
<body class="bg-gray-100">

    <!-- Encabezado -->
    <header class="bg-custom text-white py-4 fixed w-full top-0 z-50">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center">
                <img src="source/log.png" alt="Logo" class="h-12 w-12 mr-2">
                <h1 class="text-3xl font-bold">Colima Quest Tours</h1>
            </div>
            <nav class="hidden md:block">
                <a href="index.html" class="mx-2">Inicio</a>
                <a href="index.html" class="mx-2">Servicios</a>
                <a href="index.html" class="mx-2">Contacto</a>
            </nav>
            <button class="md:hidden text-white" id="menu-btn">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
        <nav class="md:hidden bg-custom hidden" id="menu">
            <a href="index.html" class="block px-4 py-2">Inicio</a>
            <a href="index.html" class="block px-4 py-2">Servicios</a>
            <a href="index.html" class="block px-4 py-2">Contacto</a>
        </nav>
    </header>
    
    <!-- Formulario de Contacto -->
    <section id="contacto" class="py-20 bg-gray-100">
    <div class="container mx-auto">
        <h2 class="text-3xl font-bold text-center mb-12">Contacto</h2>
        <div class="max-w-md mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
            <form class="p-6" method="POST">
                <div class="mb-4">
                    <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                    <input type="text" id="nombre" name="nombre" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
                    <input type="email" id="email" name="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>
                <div class="mb-4">
                    <label for="mensaje" class="block text-sm font-medium text-gray-700">Mensaje</label>
                    <textarea id="mensaje" name="mensaje" rows="3" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required></textarea>
                </div>
                <div class="text-center">
                    <button name="send" type="submit" class="inline-block bg-custom text-white px-6 py-3 rounded-full">Enviar Mensaje</button>
                </div>
            </form>
        </div>
    </div>
</section>

    <!-- Pie de página -->
    <footer id="contacto" class="bg-custom text-white py-8">
        <div class="container mx-auto text-center">
            <p class="mb-4">© 2024 Colima Quest Tours. Todos los derechos reservados.</p>
            <div>
                <a href="#" class="mx-2">Facebook</a>
                <a href="#" class="mx-2">Twitter</a>
                <a href="#" class="mx-2">Instagram</a>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            loop: true,
            autoplay: {
                delay: 5000,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });

        // Menú desplegable para dispositivos móviles
        const menuBtn = document.getElementById('menu-btn');
        const menu = document.getElementById('menu');

        menuBtn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
<?php
    //recuperar los datos del form
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    if(isset($_POST['send']))
    {
        include 'sendmail.php';
    }
    
?>
