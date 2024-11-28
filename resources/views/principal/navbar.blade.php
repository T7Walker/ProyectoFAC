<head>
    @vite([
        //CSS
        'resources/css/principal/navbar.css',

        // JS
        '/resources/js/principal/navbar.js',
    ])
</head>

<header>
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
                <img src="https://preview.redd.it/kefla-dragon-ball-super-akaicabbage-v0-txgvcnopre0a1.jpg?auto=webp&s=8d0cd6894b7a756079d92b3f378c25d8d830ca99"
                    alt="Foto de Perfil">
            </div>

            <div class="profile-dropdown">
                <a onclick="openModal()">Mi Perfil</a>

                <form action="{{ route('login.logout') }}" method="POST">
                    @csrf

                    <input type="submit" value="Cerrar Sesion">
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

            <img src="https://preview.redd.it/kefla-dragon-ball-super-akaicabbage-v0-txgvcnopre0a1.jpg?auto=webp&s=8d0cd6894b7a756079d92b3f378c25d8d830ca99"
                alt="Foto de perfil"
                style="border-radius: 50%; margin-bottom: 20px; border-radius: 50%; margin-bottom: 20px;">

            <p>Nombre de Usuario
                <br>
                <strong>User</strong>
            </p>

            <button onclick="openEditProfileForm()">Editar Perfil</button>

            <div id="editProfileForm" class="edit-form hidden">
                <form action="{{ route('profile.updateData') }}" method="POST">
                    @csrf

                    <label for="name">Nombre:</label>
                    <input type="text" name="name" id="name" value="{{ $userData->name }}" required>

                    <label for="email">Correo:</label>
                    <input type="email" name="email" id="email" value="{{ $userData->email }}" required>

                    <label for="URLProfileIMG">URL de la foto de perfil:</label>
                    <input type="text" name="URLProfileIMG" id="URLProfileIMG" required>

                    <input type="submit" value="Guardar Cambios">
                </form>

                <button onclick="closeEditProfileForm()">Cancelar</button>
            </div>

            <form action="{{ route('profile.delUser') }}" method="POST"
                onsubmit="return confirm('¿Estás seguro de que deseas eliminar tu perfil?');">
                @csrf

                <input type="submit" value="Eliminar Perfil">
            </form>

        </div>
    </div>
</header>
