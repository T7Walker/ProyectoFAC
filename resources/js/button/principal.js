const booksBtn = document.getElementById('books');
const mapBtn = document.getElementById('maps');
const publicationsBtn = document.getElementById('publications');

booksBtn.addEventListener('click', () => {

    window.location.href = booksPage;

});

mapBtn.addEventListener('click', () => {

    window.location.href = mapPage;

});

publicationsBtn.addEventListener('click', () => {

    window.location.href = publicationsPage;

});
