<body class="bg-cover bg-center bg-no-repeat text-gray-800 min-h-screen flex flex-col" style="background-image: url('SRC/EDU4ALL.png');">
    <!-- Navbar -->
    <?php include 'navbar.php'; ?>

    <!-- Main Content -->
    <main class="container mx-auto bg-white bg-opacity-80 rounded-lg p-6 mt-20 mb-10 shadow-md flex-grow">
        <!-- Sección de Servicios -->
        <section class="mb-12">
            <h2 class="text-3xl font-bold text-center mb-8 text-red-600">Servicios</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 justify-items-center">
                <!-- Botón Recargas -->
                    <a href="recargas.php" class="flex flex-col items-center justify-center p-6 bg-white border border-gray-300 rounded-lg shadow-lg hover:bg-red-100 hover:shadow-xl transition w-64 h-48">
                        <img src="SRC/1.jpg" alt="" class="w-50 h-55 mb-3">
                        <span class="text-lg font-medium text-gray-700"></span>
                    </a>

                <!-- Botón Acerca de Nosotros -->
                <a href="acerca.php" class="flex flex-col items-center justify-center p-6 bg-white border border-gray-300 rounded-lg shadow-lg hover:bg-red-100 hover:shadow-xl transition w-64 h-48">
                    <img src="SRC/icono-nosotros.png" alt="Acerca de Nosotros" class="w-16 h-16 mb-4">
                    <span class="text-lg font-medium text-gray-700">Acerca de Nosotros</span>
                </a>

                <!-- Botón Pedidos -->
                <a href="pedidos.php" class="flex flex-col items-center justify-center p-6 bg-white border border-gray-300 rounded-lg shadow-lg hover:bg-red-100 hover:shadow-xl transition w-64 h-48">
                    <img src="SRC/icono-pedidos.png" alt="Pedidos" class="w-16 h-16 mb-4">
                    <span class="text-lg font-medium text-gray-700">Pedidos</span>
                </a>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <?php include 'footer.php'; ?>
</body>
