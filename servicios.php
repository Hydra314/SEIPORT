<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos SEIPORT</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="SRC/logoblanco.png">
</head>

<body class="bg-cover bg-center bg-no-repeat text-gray-800" style="background-image: url('SRC/EDU4ALL.png');">
    <!-- Navbar (Incluido desde PHP) -->
    <?php include 'navbar.php'; ?>

    <!-- Main Content -->
    <main class="container mx-auto bg-white bg-opacity-80 rounded-lg p-6 mt-20 mb-10 shadow-md pt-5">

        <!-- What We Offer Section -->
        <section class="mb-12">
            <h2 class="text-3xl font-bold text-center mb-8 text-red-600">Servicios</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Diverse Courses -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <!-- Botón Recargas -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <!-- Botón Recargas -->
    <a href="recargas.php" class="flex flex-col items-center justify-center p-6 bg-white border border-gray-300 rounded-lg shadow-lg hover:bg-red-100 hover:shadow-xl transition w-64 h-48">
        <img src="icono-recargas.png" alt="Recargas" class="w-16 h-16 mb-3">
        <span class="text-red-600 font-bold text-lg">Recargas</span>
        <p class="text-gray-500 text-sm">Tipos de Recargas</p>
    </a>

    <!-- Botón Acerca de Nosotros -->
    <a href="acerca.php" class="flex flex-col items-center justify-center p-6 bg-white border border-gray-300 rounded-lg shadow-lg hover:bg-red-100 hover:shadow-xl transition w-64 h-48">
        <img src="icono-nosotros.png" alt="Acerca de Nosotros" class="w-16 h-16 mb-3">
        <span class="text-red-600 font-bold text-lg">Acerca de Nosotros</span>
        <p class="text-gray-500 text-sm">Más sobre nosotros</p>
    </a>

    <!-- Botón Pedidos -->
    <a href="pedidos.php" class="flex flex-col items-center justify-center p-6 bg-white border border-gray-300 rounded-lg shadow-lg hover:bg-red-100 hover:shadow-xl transition w-64 h-48">
        <img src="icono-pedidos.png" alt="Pedidos" class="w-16 h-16 mb-3">
        <span class="text-red-600 font-bold text-lg">Pedidos</span>
        <p class="text-gray-500 text-sm">¿Tienes duda con tu pedido?</p>
    </a>
</div>


        </section>
    
<!-- Meet Our Team Section -->

</main>
    <?php include 'footer.php'; ?>
</body>

</html>

