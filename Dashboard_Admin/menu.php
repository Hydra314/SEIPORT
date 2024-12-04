<div class="flex flex-col bg-red-500 fixed h-screen justify-between w-64 py-4 px-2">

    <!-- El título de la dashboard -->
    <div class="flex items-center text-white text-3xl px-5">
    <div class="flex-shrink-0">
        <!-- Aumentamos el tamaño de la imagen y agregamos forma redonda -->
        <img class="w-18 h-16 rounded-full" 
             src="../SRC/logoblanco.png" 
             alt="Logo Edu4All">
    </div>
    <b class="ml-0 text-4xl">SEIport</b>
</div>


    <!-- Aquí va el icono grill -->
    <div class="flex flex-col flex-auto">

        <!-- Dashboard -->
        <div class="p-2 hover:bg-red-700 rounded-md transition duration-500 ease-in-out">
            <a href="?action=dashboard" class="flex flex-row space-x-3">
                <h4 class="text-white hover:text-black">
                    <i class="fa-solid fa-list"></i>
                    Dashboard
                </h4>
            </a>
        </div>

        <!-- Sección Desplegable - Usuarios -->
        <div class="p-2 hover:bg-green-700 rounded-md transition duration-500 ease-in-out">
            <button id="toggleUsuarios" class="flex flex-row items-center justify-between w-full focus:outline-none">
                <span class="text-white hover:text-black">
                    <i class="fa-solid fa-user"></i>
                    User
                </span>
                <span id="iconUsuarios" class="text-white">
                    <i class="fa fa-plus"></i>
                </span>
            </button>
            <div id="submenu" class="ml-6 mt-2 hidden">
                <a href="?action=crear_usuario" class="block text-white hover:text-black rounded-md transition duration-500 ease-in-out">
                    <i class="fa-solid fa-user-plus"></i>
                    Create user
                </a>
                <a href="?action=listar_usuarios" class="block text-white hover:text-black rounded-md transition duration-500 ease-in-out">
                    <i class="fa-solid fa-list-check"></i>
                    List user
                </a>
            </div>
        </div>

        <div class="p-2 hover:bg-green-700 text-white rounded-md transition duration-500 ease-in-out">
            <button id="toggleActividades" class="flex flex-row items-center justify-between w-full focus:outline-none">
                <span class="text-white hover:text-black">
                    <i class="fa-solid fa-bookmark"></i>
                    Activities
                </span>
                <span id="iconActividades" class="text-white">
                    <i class="fa fa-plus"></i>
                </span>
            </button>
            <div id="submenuActividades" class="ml-6 mt-2 hidden">
                <a href="?action=crear_actividades" class="block text-white hover:text-black rounded-md transition duration-500 ease-in-out">
                    <i class="fa-solid fa-pen"></i>
                    Create activities
                </a>
                <a href="?action=listar_actividades" class="block text-white hover:text-black rounded-md transition duration-500 ease-in-out">
                    <i class="fa-solid fa-clipboard-list"></i>
                    List activities
                </a>
            </div>
        </div>

        <div class="p-2 hover:bg-green-700 text-white rounded-md transition duration-500 ease-in-out">
            <button id="toggleMaterias" class="flex flex-row items-center justify-between w-full focus:outline-none">
                <span class="text-white hover:text-black">
                    <i class="fa-solid fa-book"></i>
                    Subjects
                </span>
                <span id="iconMaterias" class="text-white">
                    <i class="fa fa-plus"></i>
                </span>
            </button>
            <div id="submenuMaterias" class="ml-6 mt-2 hidden">
                <a href="?action=crear_materias" class="block text-white hover:text-black rounded-md transition duration-500 ease-in-out">
                    <i class="fa-solid fa-pen"></i>
                    Create Subject
                </a>
                <a href="?action=listar_materias" class="block text-white hover:text-black rounded-md transition duration-500 ease-in-out">
                    <i class="fa-solid fa-clipboard-list"></i>
                    List Subject
                </a>
            </div>
        </div>

        <!-- Monitoreo de Desempeño -->
        <div class="p-2 hover:bg-green-700 rounded-md transition duration-500 ease-in-out">
            <a href="#" class="flex flex-row space-x-3">
                <h4 class="text-white hover:text-black">
                    <i class="fa-solid fa-chart-line"></i>
                    Performance monitoring
                </h4>
            </a>
        </div>

        <!-- Recursos -->
        <div class="p-2 hover:bg-green-700 rounded-md transition duration-500 ease-in-out">
            <a href="#" class="flex flex-row space-x-3">
                <h4 class="text-white hover:text-black">
                    <i class="fa-solid fa-coins"></i>
                    Resources
                </h4>
            </a>
        </div>
    </div>

    <!-- Botón de salir -->
    <div class="flex flex-col">
        <a class="rounded-full bg-red-900 py-2 text-white text-lg hover:bg-green-700 text-center" href="../logins/logout.php">Sign Out</a>
    </div>

</div>
