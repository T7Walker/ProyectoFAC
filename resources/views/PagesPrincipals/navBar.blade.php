<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NavBar</title>
    @vite([
        // CSS
        'resources/css/navBar.css',
        ])
</head>

    <!-- Navbar -->
    <nav class="navbar">
        <!-- Logo -->
        <a href="#" class="navbar-logo">
            <img src="{{ asset('storage/logo.png' . session('image')) }}" alt="Logo"> <!-- Ruta local -->
        </a>

        <!-- Search Bar -->
        <div class="navbar-search">
            <input type="text" placeholder="Buscar...">
        </div>

        <!-- Profile Section -->
        <div class="navbar-profile-container" onclick="toggleDropdown()">
            <div class="navbar-profile">
                <img src="https://preview.redd.it/kefla-dragon-ball-super-akaicabbage-v0-txgvcnopre0a1.jpg?auto=webp&s=8d0cd6894b7a756079d92b3f378c25d8d830ca99" alt="Foto de Perfil"> <!-- Ruta local -->
            </div>
            <div class="profile-dropdown">
                <a href="#">Mi Perfil</a>
                <a href="#">Configuración</a>
                <a href="#">Cerrar Sesión</a>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div style="margin-top: 80px; padding: 20px;">
    </div>

    <script>
        function toggleDropdown() {
            const profileContainer = document.querySelector('.navbar-profile-container');
            profileContainer.classList.toggle('active');
        }

        // Close dropdown when clicking outside
        document.addEventListener('click', function (event) {
            const profileContainer = document.querySelector('.navbar-profile-container');
            if (!profileContainer.contains(event.target)) {
                profileContainer.classList.remove('active');
            }
        });
    </script>

</body>
</html>