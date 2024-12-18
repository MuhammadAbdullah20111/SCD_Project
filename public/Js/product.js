document.getElementById('searchInput').addEventListener('input', function () {
    // Get the value of the search input and convert it to lowercase
    const searchValue = this.value.toLowerCase();
    
    // Select all product cards
    const productCards = document.querySelectorAll('.product-card');
    
    // Loop through each product card
    productCards.forEach(card => {
        // Get the text content of the card title and convert it to lowercase
        const title = card.querySelector('.card-title').textContent.toLowerCase();
        
        // If the title includes the search value, show the card, else hide it
        card.style.display = title.includes(searchValue) ? '' : 'none';
    });
});


document.getElementById('brandFilter').addEventListener('change', function () {
    const filterValue = this.value.toLowerCase();
    const productCards = document.querySelectorAll('.product-card');
    productCards.forEach(card => {
        const brand = card.getAttribute('data-brand').toLowerCase();
        card.style.display = (filterValue === 'all' || brand === filterValue) ? '' : 'none';
    });
});
