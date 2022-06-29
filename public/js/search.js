const search = document.querySelector('#searchBar');
const bookContainer = document.querySelector('#results');

search.addEventListener("keyup", function (event) {
   if(event.key === "Enter") {
       event.preventDefault();

       const data = {search: this.value}
       fetch("/search", {
           method: 'POST',
           headers: {
               'Content-Type': 'application/json'
           },
           body: JSON.stringify(data)
       }).then(function (response) {
           return response.json();
       }).then(function(books) {
           bookContainer.innerHTML="";
           loadBooks(books);
       });

   }
});

function loadBooks(books) {
    books.forEach(book => {
        createBook(book);
    })
}

function createBook(book) {
    const template = document.querySelector('#cardTemplate');
    const clone = template.content.cloneNode(true);
    const cover = clone.querySelector('img');
    cover.src = `./public/uploads/${book.cover}`;
    const title = clone.querySelector('.book-title');
    title.innerHTML = book.title;
    const desc = clone.querySelector('.book-desc');
    desc.innerHTML = book.description;

    bookContainer.appendChild(clone);
}