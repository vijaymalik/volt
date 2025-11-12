(function($){
const slides = document.querySelectorAll(".slide_new");
const thumbs = document.querySelectorAll(".thumb_new");
const thumbContainer = document.querySelector(".thumbnails_new");
const nextBtn = document.querySelector(".thumb-nav.prev");
let index = 0;
let thumbScroll = 0;

// Show large image when thumbnail is clicked
function showSlide(i) {
  slides.forEach(s => s.classList.remove("active"));
  thumbs.forEach(t => t.classList.remove("active-thumb"));
  slides[i].classList.add("active");
  thumbs[i].classList.add("active-thumb");
  index = i;
}

// Thumbnail click → change large image
thumbs.forEach(thumb => {
  thumb.addEventListener("click", (e) => {
    e.preventDefault();
    e.stopPropagation();
    const i = parseInt(thumb.getAttribute("data-index"));
    showSlide(i);
  });
});

// Next button → scroll thumbnails only
nextBtn.addEventListener("click", (e) => {
    e.preventDefault(); // prevent page scroll
    e.stopPropagation();

    const thumbWidth = thumbs[0].offsetWidth + 10; // width + gap
    const visibleWidth = thumbContainer.offsetWidth; // 212px container
    const totalWidth = thumbs.length * thumbWidth;
    const maxScroll = totalWidth - visibleWidth + 20; // last thumb fully visible + right gap

    thumbScroll += thumbWidth; // move one thumbnail
    if (thumbScroll > maxScroll) {
        thumbScroll = 0; // loop back
    }

    thumbContainer.scrollTo({
        left: thumbScroll,
        behavior: "smooth"
    });
});

// Initialize first image
window.addEventListener("DOMContentLoaded", () => {
  showSlide(0);
});

//our recipes slider
/* Updated product data with category filter support */
const allProducts = [
{ image: "https://codevaani.com/wp-content/uploads/2025/10/brownie-200x300.webp", name: "Vegan Cracker Breakfast", time: "30min", categories: ["VG", "CR"], extra: "Cold", filter: "vegan" },
{ image: "https://codevaani.com/wp-content/uploads/2025/10/veganroll.jpeg", name: "Rustic Bowl With Spicy Side-Up", time: "25min", categories: ["RU", "SP"], extra: "Hot", filter: "plant" },
{ image: "https://codevaani.com/wp-content/uploads/2025/10/brownie-200x300.webp", name: "Chocolate Chip Cookies & Cream", time: "35min", categories: ["CH", "CO"], extra: "Sweet", filter: "nonveg" },
{ image: "https://codevaani.com/wp-content/uploads/2025/10/veganroll.jpeg", name: "Gourmet Crepes With Toppings", time: "20min", categories: ["GO", "CR"], extra: "Warm", filter: "plant" },
{ image: "https://codevaani.com/wp-content/uploads/2025/10/Crunchy-Granola-Bites-1-300x300.jpg", name: "Custard Cake With Blueberries", time: "40min", categories: ["CU", "CA"], extra: "Chilled", filter: "nonveg" },
{ image: "https://codevaani.com/wp-content/uploads/2025/10/Traditional-English-breakfast.jpg", name: "Delectable Flan Dessert", time: "45min", categories: ["DE", "FL"], extra: "Cold", filter: "vegan" },
{ image: "https://codevaani.com/wp-content/uploads/2025/10/savory-morning-delight-box-300x300.webp", name: "Pomegranate Ice Cream Bangers", time: "15min", categories: ["PO", "IC"], extra: "Frozen", filter: "plant" },
{ image: "https://codevaani.com/wp-content/uploads/2025/10/brownie-200x300.webp", name: "Non Vegan Elegant Seafood", time: "22min", categories: ["NO", "OA"], extra: "Hot", filter: "nonveg" },
{ image: "https://codevaani.com/wp-content/uploads/2025/10/veganroll.jpeg", name: "Green Buddha Bowl", time: "18min", categories: ["GB", "BO"], extra: "Fresh", filter: "vegan" },
{ image: "https://codevaani.com/wp-content/uploads/2025/10/Crunchy-Granola-Bites-1-300x300.jpg", name: "Spiced Lentil Curry", time: "38min", categories: ["SL", "CU"], extra: "Warm", filter: "plant" },
{ image: "https://codevaani.com/wp-content/uploads/2025/10/Traditional-English-breakfast.jpg", name: "Grilled Fish Delight", time: "28min", categories: ["GF", "DE"], extra: "Savory", filter: "nonveg" },
{ image: "https://codevaani.com/wp-content/uploads/2025/10/brownie-200x300.webp", name: "Tofu Stir Fry", time: "20min", categories: ["TS", "FR"], extra: "Quick", filter: "vegan" },
{ image: "https://codevaani.com/wp-content/uploads/2025/10/veganroll.jpeg", name: "Green Buddha Bowl", time: "18min", categories: ["GB", "BO"], extra: "Fresh", filter: "vegan" },
{ image: "https://codevaani.com/wp-content/uploads/2025/10/Crunchy-Granola-Bites-1-300x300.jpg", name: "Spiced Lentil Curry", time: "38min", categories: ["SL", "CU"], extra: "Warm", filter: "plant" },
{ image: "https://codevaani.com/wp-content/uploads/2025/10/Traditional-English-breakfast.jpg", name: "Grilled Fish Delight", time: "28min", categories: ["GF", "DE"], extra: "Savory", filter: "nonveg" },
{ image: "https://codevaani.com/wp-content/uploads/2025/10/brownie-200x300.webp", name: "Tofu Stir Fry", time: "20min", categories: ["TS", "FR"], extra: "Quick", filter: "vegan" },
];


let products = [...allProducts];
let currentPage = 0;
let currentFilter = 'all';
/* Changed itemsPerPage from 4 to 8 (4 columns x 2 rows) */
const itemsPerPage = 8;
let totalPages = 0;

/* Added tab filter functionality */
function setupTabFilters() {
const tabButtons = document.querySelectorAll('.tab-button');
tabButtons.forEach(button => {
button.addEventListener('click', function() {
// Remove active class from all buttons
tabButtons.forEach(btn => btn.classList.remove('active'));
// Add active class to clicked button
this.classList.add('active');
// Update filter and reset pagination
currentFilter = this.getAttribute('data-filter');
filterProducts();
currentPage = 0;
renderProducts();
});
});
}

/* Added filterProducts function to filter by selected category */
function filterProducts() {
if (currentFilter === 'all') {
products = [...allProducts];
} else {
products = allProducts.filter(p => p.filter === currentFilter);
}
totalPages = Math.ceil(products.length / itemsPerPage);
}

function renderProducts() {
const grid = document.getElementById('productsGrid');
grid.innerHTML = '';

const start = currentPage * itemsPerPage;
const end = start + itemsPerPage;
const visibleProducts = products.slice(start, end);

visibleProducts.forEach((product) => {
const card = document.createElement('div');
card.className = 'cards recipe-card';
let categoriesHTML = '';
product.categories.forEach((cat) => {
categoriesHTML += `<div class="category-tag">${cat}</div>`;
});

card.innerHTML = `
<div class="img">
<img src="${product.image}" alt="${product.name}" class="product-image">
</div>
<div class="details">
<h3>${product.name}</h3>
<div class="details-bottom d-flex align-items-center">
<div class="detail-item">
<span><i class="ri-history-line"></i> ${product.time}</span>
<h6>Cooking Time</h6>
</div>
<div class="divider"></div>
<div class="detail-item">
<div class="category-tags">${categoriesHTML}</div>
<h6>Category</h6>
</div>
<div class="divider"></div>
<div class="detail-item">
<span><i class="ri-star-line"></i> ${product.extra}</span>
<h6>Extra Info</h6>
</div>
</div>
</div>
`;
grid.appendChild(card);
});

updatePaginationButtons();
}

function updatePaginationButtons() {
const pageNum = currentPage + 1;
document.getElementById('currentPage').textContent = String(pageNum).padStart(2, '0');
document.getElementById('totalPages').textContent = String(totalPages).padStart(2, '0');
}


document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('nextBtn').addEventListener('click', function() {
        currentPage = (currentPage + 1) % totalPages;
        renderProducts();
    });

    document.getElementById('prevBtn').addEventListener('click', function() {
        currentPage = (currentPage - 1 + totalPages) % totalPages;
        renderProducts();
    });
});
// Initialize slider and tabs
filterProducts();
renderProducts();
setupTabFilters();


})(jQuery);

