document.addEventListener('DOMContentLoaded', function () {

    // Función para alternar el desplegable del perfil
    function toggleDropdown() {
        const profileContainer = document.querySelector('.navbar-profile-container');
        profileContainer.classList.toggle('active');
    }

    // Abre el modal
    function openModal() {
        document.getElementById("profileModal").style.display = "block";
    }

    // Cierra el modal
    function closeModal() {
        document.getElementById("profileModal").style.display = "none";
    }

    // Abre el formulario de edición de perfil
    function openEditProfileForm() {
        document.getElementById('editProfileForm').classList.remove('hidden');
    }

    // Cierra el formulario de edición de perfil
    function closeEditProfileForm() {
        document.getElementById('editProfileForm').classList.add('hidden');
    }

    // Funciones de botones
    function editProfile() {
        openEditProfileForm();
    }

    function logout() {
        alert("Cerrando sesión...");
        document.querySelector('#logoutForm').submit(); // Suponiendo que el formulario para cerrar sesión tiene este ID
    }

    function deleteProfile() {
        const confirmation = confirm("¿Estás seguro de que deseas eliminar tu perfil?");
        if (confirmation) {
            alert("Perfil eliminado");
            document.querySelector('#deleteProfileForm').submit(); // Suponiendo que el formulario para eliminar perfil tiene este ID
        }
    }

    // Cerrar el modal si se hace clic fuera del modal
    window.onclick = function(event) {
        if (event.target == document.getElementById("profileModal")) {
            closeModal();
        }
    };

    // Asignación de eventos a elementos del DOM
    const profileContainer = document.querySelector('.navbar-profile-container');
    const dropdownLinks = document.querySelectorAll('.profile-dropdown a');

    // Agregar el evento para alternar el dropdown
    if (profileContainer) {
        profileContainer.addEventListener('click', toggleDropdown);
    }

    // Asignar los eventos a los enlaces del dropdown
    if (dropdownLinks) {
        dropdownLinks.forEach(link => {
            if (link.innerText === 'Mi Perfil') {
                link.addEventListener('click', openModal);
            } else if (link.innerText === 'Cerrar Sesión') {
                link.addEventListener('click', logout);
            }
        });
    }

});
