<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite([
        // CSS
        'resources/css/navBar.css',
        ])
</head>
<body>
     <!-- Navbar -->
     <nav class="navbar">
        <!-- Logo -->
        <a href="#" class="navbar-logo">MiLogo</a>

        <!-- Search Bar -->
        <div class="navbar-search">
            <input type="text" placeholder="Buscar...">
        </div>

        <!-- Profile Button -->
        <div class="navbar-profile">
            <img src="https://via.placeholder.com/45" alt="Foto de Perfil">
        </div>

        <!-- Menu Icon for Mobile -->
        <div class="menu-icon">
            &#9776; <!-- Hamburger icon -->
        </div>
    </nav>

    <!-- Page Content -->
    <div style="margin-top: 80px; padding: 20px;">
        <h1>Bienvenido a la página</h1>
        <p>Este es el contenido principal de la página...</p>
    </div>

    
</body>
</html>