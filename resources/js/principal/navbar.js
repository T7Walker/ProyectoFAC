document.addEventListener('DOMContentLoaded', function () {
    const profileContainer = document.querySelector('.navbar-profile-container');
    const modal = document.getElementById("profileModal");
    const editProfileForm = document.getElementById('editProfileForm');
    const openProfileModalBtn = document.querySelector('.open-profile-modal');
    const editProfileBtn = document.querySelector('.edit-profile-btn');
    const closeEditProfileBtn = document.querySelector('.close-edit-profile-form');

    // Función para alternar el desplegable del perfil
    function toggleDropdown() {
        profileContainer.classList.toggle('active');
    }

    // Función para abrir el modal
    function openModal() {
        modal.style.display = "block";
    }

    // Función para cerrar el modal
    function closeModal() {
        modal.style.display = "none";
    }

    // Función para abrir el formulario de edición de perfil
    function openEditProfileForm() {
        editProfileForm.classList.remove('hidden');
    }

    // Función para cerrar el formulario de edición de perfil
    function closeEditProfileForm() {
        editProfileForm.classList.add('hidden');
    }

    // Asignar eventos dinámicamente
    if (profileContainer) {
        profileContainer.addEventListener('click', toggleDropdown);
    }

    if (openProfileModalBtn) {
        openProfileModalBtn.addEventListener('click', openModal);
    }

    if (editProfileBtn) {
        editProfileBtn.addEventListener('click', openEditProfileForm);
    }

    if (closeEditProfileBtn) {
        closeEditProfileBtn.addEventListener('click', closeEditProfileForm);
    }

    // Cerrar el modal al hacer clic fuera de él
    window.onclick = function (event) {
        if (event.target == modal) {
            closeModal();
        }
    };
});
