<head>
    @vite([
        //CSS
        'resources/css/principal/navbar.css',
    
        // JS
        'resources/js/principal/navbar.js',
        'resources/js/Button/inicio.js',
        'resources/js/Button/principal.js',
    ])
    <script>
        const booksPage = "{{ route('Books.allBooks') }}";
        const mapPage = "{{ route('map.mainPage') }}";
        const publicationsPage = "{{ route('Publications.allPublication') }}";
        const indexPage = "{{ route('mainPage.index') }}"
    </script>
</head>

<header>
    <div class="contenedor-navbar">
        <nav class="navbar">
            <!-- Logo -->
            <a class="navbar-logo" id="logo">
                <img src="https://i.imgur.com/Kw841ke.png" alt="Logo">
            </a>

            <div id="maps">
                <img src="https://i.imgur.com/I2bMcOZ.png" alt="maps" class="buttonNav">
                <p class="buttonNav-p">Mapa</p>
            </div>

            <div id="books">
                <img src="https://i.imgur.com/Ra0Sys9.png" alt="Libros" class="buttonNav">
                <p class="buttonNav-p">Libros</p>
            </div>

            <div id="publications">
                <img src="https://i.imgur.com/1OBqIVP.png" alt="Post" class="buttonNav">
                <p class="buttonNav-p">Posts</p>
            </div>

            <!-- Profile Section -->
            <div class="navbar-profile-container">
                <div class="navbar-profile">
                    <img src="{{ $userData->urlimg }}" alt="Foto de Perfil">
                </div>

                <div class="profile-dropdown">
                    <a a class="open-profile-modal" class="modalButton">Mi Perfil</a>

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
                <p>{{ $userData->name }}</p>
                </p>

                <button class="edit-profile-btn">Editar Perfil</button>

                <div id="editProfileForm" class="edit-form hidden">
                    <form action="{{ route('profile.updateData') }}" method="POST">
                        @csrf
                        <label for="name">Nombre:</label>
                        <div class="textInputWrapper">
                            <input type="text" name="name" id="name" value="{{ $userData->name }}"
                                class="textInput">
                        </div>

                        <label for="email">Correo:</label>
                        <div class="textInputWrapper">
                            <input type="email" name="email" id="email" value="{{ $userData->email }}"
                                class="textInput">
                        </div>

                        <label for="urlimg">URL de la foto de perfil:</label>
                        <div class="textInputWrapper">
                            <input type="text" name="urlimg" id="urlimg" value="{{ $userData->urlimg }}"
                                class="textInput">
                        </div>

                        <!-- Usa input submit en vez de botones, es buenas practicas y funciona mejor. -->
                        <input type="submit" value="Guardar Cambios" class="btn">
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
    </div>
</header>
