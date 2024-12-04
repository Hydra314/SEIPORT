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

        <!-- Our Mission Section -->

    
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

