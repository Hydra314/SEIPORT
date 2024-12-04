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
            <h2 class="text-3xl font-bold text-center mb-4 text-red-600">Mision de Empresa</h2>
            <p class="text-lg text-center text-gray-700">
            Nuestra misión es garantizar un entorno de trabajo seguro y libre de riesgos para las empresas e industrias, 
            protegiendo la vida y el bienestar de sus colaboradores. A través de soluciones integrales de seguridad, prevención y control, 
            nos enfocamos en reducir al mínimo los accidentes laborales, cumpliendo con los más altos estándares normativos y fomentando una cultura de prevención. 
            Nuestro objetivo es crear espacios de trabajo donde la seguridad sea prioridad, promoviendo la productividad y el crecimiento sostenible de nuestros clientes.
            </p>
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
<section class="mb-12">
    <h2 class="text-3xl font-bold text-center mb-8 text-red-700">Productos </h2>
    <div class="flex flex-wrap justify-center gap-8">
        <!-- Team Member 1 -->
        <div class="text-center p-6 bg-white bg-opacity-80 rounded-lg shadow-md">
            <img src="SRC/EXTINTOR.png" alt="Extinores" class="w-32 h-32 mx-auto rounded-full mb-4">
            <h3 class="text-xl font-bold mb-2 text-red-700">Tipos de Extintores</h3>
            <p class="text-gray-600">Extintores</p>
        </div>
        <!-- Team Member 2 -->
        <div class="text-center p-6 bg-white bg-opacity-80 rounded-lg shadow-md">
            <img src="SRC/cascos.png" alt="Cascos" class="w-32 h-32 mx-auto rounded-full mb-4">
            <h3 class="text-xl font-bold mb-2 text-red-700">Tipos de Cascos</h3>
            <p class="text-gray-600">Cascos</p>
        </div>
        <!-- Team Member 3 -->
        <div class="text-center p-6 bg-white bg-opacity-80 rounded-lg shadow-md">
            <img src="SRC/guantes.png" alt="Guantes" class="w-32 h-32 mx-auto rounded-full mb-4">
            <h3 class="text-xl font-bold mb-2 text-red-700">Tipos de Guantes</h3>
            <p class="text-gray-600">Guantes</p>
        </div>
        <!-- Team Member 4 -->
        <div class="text-center p-6 bg-white bg-opacity-80 rounded-lg shadow-md">
            <img src="SRC/chaleco.png" alt="chalecos" class="w-32 h-32 mx-auto rounded-full mb-4">
            <h3 class="text-xl font-bold mb-2 text-red-700">Tipos de chalecos</h3>
            <p class="text-gray-600">Chalecos</p>
        </div>
        <!-- Team Member 5 -->
        <div class="text-center p-6 bg-white bg-opacity-80 rounded-lg shadow-md">
            <img src="SRC/botas.png" alt="Botas" class="w-32 h-32 mx-auto rounded-full mb-4">
            <h3 class="text-xl font-bold mb-2 text-red-700">Tipo de Botas</h3>
            <p class="text-gray-600">Botas</p>
        </div>
    </div>
</section>
</main>
    <?php include 'footer.php'; ?>
</body>

</html>

