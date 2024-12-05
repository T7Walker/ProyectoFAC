<head>
    @vite([
        //CSS
        'resources/css/principal/navbar.css',
    
        // JS
        'resources/js/principal/navbar.js',
        'resources/js/Button/inicio.js',
    ])
</head>

<header>
    <nav class="navbar">
        <!-- Logo -->
        <a class="navbar-logo" id="logo">
            <img src="https://i.imgur.com/Kw841ke.png" alt="Logo">
        </a>

        <!-- Search Bar -->
        <div class="navbar-search">
            <input type="text" placeholder="Buscar...">
        </div>

        <!-- Profile Section -->
        <div class="navbar-profile-container">
            <div class="navbar-profile">
                <img src="https://pbs.twimg.com/media/FZraIZmWIAEX8hd.jpg" alt="Foto de Perfil">
            </div>

            <div class="profile-dropdown">
                <a class="open-profile-modal" class="modalButton">Mi Perfil</a>

                <form action="{{ route('login.logout') }}" method="POST">
                    @csrf

                    <!-- Usa input submit en vez de botones, es buenas practicas y funciona mejor. -->
                    <input type="submit" value="Cerrar Sesion" class="modalButton">
                </form>
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

            <img src="https://pbs.twimg.com/media/FZraIZmWIAEX8hd.jpg" alt="Foto de perfil"
                style="border-radius: 50%; margin-bottom: 20px;">

            <p>Nombre de Usuario
                <br>
                <strong>user</strong>
            </p>

            <button class="edit-profile-btn">Editar Perfil</button>

            <div id="editProfileForm" class="edit-form hidden">
                <form action="{{ route('profile.updateData') }}" method="POST">
                    @csrf
                    <label for="name">Nombre:</label>
                    <input type="text" name="name" id="name" value="{{ $userData->name }}">

                    <label for="email">Correo:</label>
                    <input type="email" name="email" id="email" value="{{ $userData->email }}">

                    <label for="urlimg">URL de la foto de perfil:</label>
                    <input type="text" name="urlimg" id="urlimg" value="{{ $userData->urlimg }}">

                    <!-- Usa input submit en vez de botones, es buenas practicas y funciona mejor. -->
                    <input type="submit" value="Guardar Cambios">
                </form>

                <button class="close-edit-profile-form">Cancelar</button>
            </div>

            <form action="{{ route('profile.delUser') }}" method="POST"
                onsubmit="return confirm('¿Estás seguro de que deseas eliminar tu perfil?');">
                @csrf

                <!-- Usa input submit en vez de botones, es buenas practicas y funciona mejor. -->
                <input type="submit" value="Eliminar Perfil">
            </form>
        </div>
    </div>
</header>
