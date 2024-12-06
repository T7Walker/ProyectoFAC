document.addEventListener('DOMContentLoaded', () => {
    const createBtn = document.getElementById('create');

    if (createBtn) {
        createBtn.addEventListener('click', () => {
            console.log('Create button clicked');
            console.log('Navigating to:', createPostPage);
            window.location.href = createPostPage;
        });
    } else {
        console.error('Create button not found');
    }
});