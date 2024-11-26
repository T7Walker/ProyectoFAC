<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NavBar</title>
    <!-- Vinculación de estilos y scripts con Vite -->
    @vite(['resources/css/navBar.css', 'resources/js/navBar.js'])
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <!-- Logo -->
        <a href="#" class="navbar-logo">
            <img src="https://i.imgur.com/Kw841ke.png" alt="Logo">
        </a>

        <!-- Search Bar -->
        <div class="navbar-search">
            <input type="text" placeholder="Buscar...">
        </div>

        <!-- Profile Section -->
        <div class="navbar-profile-container" onclick="toggleDropdown()">
            <div class="navbar-profile">
                <img src="https://preview.redd.it/kefla-dragon-ball-super-akaicabbage-v0-txgvcnopre0a1.jpg?auto=webp&s=8d0cd6894b7a756079d92b3f378c25d8d830ca99" alt="Foto de Perfil">
            </div>
            <div class="profile-dropdown">
                <a href="#" onclick="openModal()">Mi Perfil</a>
                <a href="#">Cerrar Sesión</a>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div style="margin-top: 80px; padding: 20px;">
    </div>

    <!-- Modal -->
    <div id="profileModal" class="modal">
        <div class="modal-content">
            <h2>Perfil de Usuario</h2>
            <br>
            <img src="https://preview.redd.it/kefla-dragon-ball-super-akaicabbage-v0-txgvcnopre0a1.jpg?auto=webp&s=8d0cd6894b7a756079d92b3f378c25d8d830ca99" alt="Foto de perfil" style="border-radius: 50%; margin-bottom: 20px; border-radius: 50%; margin-bottom: 20px;">
            <p>Nombre de Usuario
                <br>
                <strong>User</strong>
            </p>
            <button onclick="editProfile()">Editar Perfil</button>
            <button onclick="deleteProfile()">Eliminar Perfil</button>
        </div>
    </div>
</body>
</html>
