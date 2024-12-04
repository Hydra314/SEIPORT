<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edu4All Join Us</title>
  <!-- Agregar enlace de Font Awesome para los iconos -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="icon" href="SRC/logoblanco.png">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-cover bg-center h-screen" style="background-image: url('SRC/EDU4ALL.png');">
<div class="flex items-center justify-center h-full bg-black bg-opacity-50">
    <div class="relative bg-white p-8 rounded-lg shadow-md max-w-md w-full">
      <!-- Iconos de casita y tacha -->
      <div class="absolute top-0 right-0 mt-2 mr-2 flex space-x-4">
          <!-- Icono de casita en color verde -->
          <a href="logins/login.php" class="text-red-500 hover:text-red-700">
              <i class="fas fa-home fa-lg"></i>
          </a>
      </div>

      <!-- Título del formulario -->
      <h1 class="text-2xl font-bold text-red-600 mb-6 text-center">Join Us</h1>

      <!-- Formulario -->
      <form action="" method="post" class="space-y-4">
        <div>
          <label for="name" class="block text-sm font-medium text-red-600">Name:</label>
          <input type="text" name="name" id="name" required class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500" placeholder="Name">
        </div>
        <div>
          <label for="age" class="block text-sm font-medium text-red-600">Age:</label>
          <input type="number" name="age" id="age" required class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500" placeholder="Age">
        </div>
        <div>
          <label for="email" class="block text-sm font-medium text-red-600">Email:</label>
          <input type="email" name="email" id="email" required class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500" placeholder="youremail@gmail.com">
        </div>
        <div>
          <label for="password" class="block text-sm font-medium text-red-600">Password:</label>
          <input type="password" name="password" id="password" required class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500" placeholder="Password">
        </div>
        <div>
          <label for="gender" class="block text-sm font-medium text-red-600">Gender:</label>
          <select name="gender" id="gender" required class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
            <option value="" disabled selected>Select an option</option>
            <option value="Hombre">Man</option>
            <option value="Mujer">Woman</option>
          </select>
        </div>
        <div>
          <label for="role" class="block text-sm font-medium text-red-600">Role:</label>
          <select name="role" id="role" required class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
            <option value="" disabled selected>Select an option</option>
            <option value="Donor">Donor</option>
            <option value="teacher">Teacher</option>
            <option value="student">Student</option>
          </select>
        </div>
        <div class="mt-4 flex items-center">
          <input type="checkbox" id="terms" name="terms" required class="h-4 w-4 text-red-500">
          <label for="terms" class="ml-2 text-gray-700">I accept the <a href="SRC/Politica_de_privacidad_Edu4All.pdf" class="text-red-500 underline">Terms and Conditions</a></label>
        </div>
        <div class="flex justify-center">
          <button type="submit" name="enviar" class="mt-4 px-4 py-2 bg-red-600 text-white font-semibold rounded-md shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">Submit</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>

<?php
  if (isset($_POST['enviar'])){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $role = $_POST['role'];
    
    if ($age <= 17 || $age > 60)
    {
        $mostrarExito1 =true;
    }else
    {
      require_once("Conexion/contacto.php");
      $obj = new contacto();
      $obj-> subir($name, $age, $email, $password, $gender, $role);
      echo "Datos Guardados";
    }
    
  }
?>

<script>
    // Bloquear números en el campo de nombre
    document.getElementById('name').addEventListener('keypress', function (e) {
        const char = String.fromCharCode(e.keyCode);
        if (!/^[a-zA-Z\s]+$/.test(char)) {
            e.preventDefault();
        }
    });

    // Bloquear letras en el campo de edad
    document.getElementById('age').addEventListener('input', function (e) {
        this.value = this.value.replace(/[^0-9]/g, '');
    });

    // Validar el formulario antes de enviar
    function validateForm() {
        const name = document.getElementById('name').value;
        const age = document.getElementById('age').value;

        const nameRegex = /^[A-Za-z\s]+$/; // Solo letras y espacios
        const ageRegex = /^[0-9]+$/; // Solo números

        // Validar el campo de nombre
        if (!nameRegex.test(name)) {
            alert('Please enter a valid name (letters only).');
            return false;
        }

        // Validar el campo de edad
        if (!ageRegex.test(age)) {
            alert('Please enter a valid age (numbers only).');
            return false;
        }

        return true; // Si todo está bien, enviar el formulario
    }

    // Script para mostrar/ocultar la contraseña
    document.querySelector('.toggle-password').addEventListener('click', function (e) {
        const passwordField = document.querySelector('#password');
        const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordField.setAttribute('type', type);
        this.classList.toggle('fa-eye-slash');
        this.classList.toggle('fa-eye');
    });
</script>
