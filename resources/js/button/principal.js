const bookBtn = document.getElementById('books');
const mapBtn = document.getElementById('map');
const publicationBtn = document.getElementById('publications');

books.addEventListener('click', () => {

    window.location.href = booksPage;

});

map.addEventListener('click', () => {

    window.location.href = mapPage;

});

publications.addEventListener('click', () => {

    window.location.href = publicationsPage;

});
