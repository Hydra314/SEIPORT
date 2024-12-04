<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos SEIport</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="SRC/logoblanco.png">
</head>

<body class="bg-cover bg-center bg-no-repeat text-gray-800" style="background-image: url('SRC/EDU4ALL.png');">
    <!-- Navbar (Incluido desde PHP) -->
    <?php include 'navbar.php'; ?>

    <!-- Main Content -->
    <main class="container mx-auto bg-white bg-opacity-80 rounded-lg p-6 mt-20 mb-10 shadow-md pt-5">

        <!-- Our Mission Section -->
        <section class="mb-12 p-10">

        </section>

        <!-- What We Offer Section -->
        <section class="mb-12">
            <h2 class="text-3xl font-bold text-center mb-8 text-red-600">Servicios</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Diverse Courses -->
                <div class="text-center p-6 bg-white bg-opacity-80 rounded-lg shadow-md">
                    <div class="text-6xl mb-4 text-green-600">📚</div>
                    <h3 class="text-xl font-bold mb-2 text-red-700">Recargas</h3>
                    <p class="text-gray-600">Tipos de   Recargas</p>
                </div>
                <!-- Global Community -->
                <div class="text-center p-6 bg-white bg-opacity-80 rounded-lg shadow-md">
                    <div class="text-6xl mb-4 text-green-600">👥</div>
                    <h3 class="text-xl font-bold mb-2 text-red-700">Acerca de Nosotros</h3>
                    <p class="text-gray-600">Acerca de Nosotros</p>
                </div>
                <!-- Accessible Learning -->
                <div class="text-center p-6 bg-white bg-opacity-80 rounded-lg shadow-md">
                    <div class="text-6xl mb-4 text-green-600">🌐</div>
                    <h3 class="text-xl font-bold mb-2 text-red-700">Pedidos</h3>
                    <p class="text-gray-600">¿Tienes duda con tu pedido?</p>
                </div>
            </div>
        </section>
    
<!-- Meet Our Team Section -->

</main>
    <?php include 'footer.php'; ?>
</body>

</html>

