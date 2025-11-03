<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VOLT</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/store-style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/home.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/our-recipe.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <?php get_template_part('header', 'volt'); ?>

    <div class="our-recipe-hero">
        <?php
        // Fetch the latest recipe
        $top_recipe = new WP_Query([
            'post_type' => 'recipe',
            'posts_per_page' => 1,
            'orderby' => 'date',
            'order' => 'DESC',
        ]);

        if ($top_recipe->have_posts()):
            while ($top_recipe->have_posts()):
                $top_recipe->the_post();

                // Get custom fields
                $category = get_field('categories') ?: 'Vegan';
                $extra_info = get_field('extrainfo') ?: 'Gluten Free';
                $image = get_field('image');
                $image_url = '';

                if ($image) {
                    if (is_array($image) && isset($image['url'])) {
                        $image_url = $image['url'];
                    } elseif (is_numeric($image)) {
                        $image_url = wp_get_attachment_image_url($image, 'full');
                    } else {
                        $image_url = $image;
                    }
                } else {
                    $image_url = get_template_directory_uri() . '/assets/images/our-recipe-banner.jpg';
                }
                ?>
                <!-- <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>"> -->
                <!-- <div class="recipe-overlayer">
                    <div class="recipe-bottom">
                        <div class="d-flex align-items-center gap-2">
                            <button type="button"><?php echo esc_html($category); ?></button>
                            <button type="button"><?php echo esc_html($extra_info); ?></button>
                        </div>
                        <h1><?php the_title(); ?></h1>
                        <p><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                      <button class="learn-morebtn" type="button">Learn More</button>
                    </div>
                </div> -->
                <div class="slider_new">
  <div class="slides_new">
    <div class="slide_new active">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/browine.jpg" alt="">
      <div class="recipe-overlayer">
        <div class="recipe-bottom">
          <div class="d-flex align-items-center gap-2">
            <button type="button"><?php echo esc_html($category); ?></button>
            <button type="button"><?php echo esc_html($extra_info); ?></button>
          </div>
          <h1><?php the_title(); ?></h1>
          <p>Discover our flagship favorites trusted by generations,<br> loved by every Fijian home.</p>
          <button class="learn-morebtn" type="button">Learn More</button>
        </div>
      </div>
    </div>

    <div class="slide_new">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/3rd.png" alt="">
      <div class="recipe-overlayer">
        <div class="recipe-bottom">
          <div class="d-flex align-items-center gap-2">
            <button type="button"><?php echo esc_html($category); ?></button>
            <button type="button"><?php echo esc_html($extra_info); ?></button>
          </div>
          <h1><?php the_title(); ?></h1>
          <p>Discover our flagship favorites trusted by generations,<br> loved by every Fijian home.</p>
          <button class="learn-morebtn" type="button">Learn More</button>
        </div>
      </div>
    </div>

    <div class="slide_new">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/browine.jpg" alt="">
      <div class="recipe-overlayer">
        <div class="recipe-bottom">
          <div class="d-flex align-items-center gap-2">
            <button type="button"><?php echo esc_html($category); ?></button>
            <button type="button"><?php echo esc_html($extra_info); ?></button>
          </div>
          <h1><?php the_title(); ?></h1>
          <p>Discover our flagship favorites trusted by generations,<br> loved by every Fijian home.</p>
          <button class="learn-morebtn" type="button">Learn More</button>
        </div>
      </div>
    </div>
  </div>

  <!-- <div class="navigation">
    <span class="prev">&#10094;</span>
    <span class="next">&#10095;</span>
  </div> -->

  <!-- Thumbnails -->
  <div class="thumbnail-container">
  <span class="thumb-nav prev"><i class="ri-arrow-left-s-line left"></i></span>
  <div class="thumbnails_new">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/browine.jpg" class="thumb_new active-thumb" data-index="0" alt="thumb1" />
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/3rd.png" class="thumb_new" data-index="1" alt="thumb2" />
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/browine.jpg" class="thumb_new" data-index="2" alt="thumb3" />
  </div>
  <!-- <span class="thumb-nav next"><i class="ri-arrow-right-s-line right"></i></span> -->
 </div>
</div>

  </div>
  </div>
                <?php
            endwhile;
            wp_reset_postdata();
        else:
            ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-recipe-banner.jpg" alt="">
            <div class="recipe-overlayer">
                <div class="recipe-bottom">
                    <div class="d-flex align-items-center gap-2">
                        <button type="button">Vegan</button>
                        <button type="button">Gluten Free</button>
                    </div>
                    <h1>Chip Cookies Brownie</h1>
                    <p>Discover our flagship favorites trusted by generations,<br> loved by every Fijian home.</p>
                    <button class="learn-morebtn" type="button">Learn More</button>
                </div>
            </div>
        <?php endif; ?>
    </div>


    <div class="our-recipes-mbl px-4 mt-2 position-relative">
        <h2>Our Recipes</h2>
        <p>Make snack time exciting! Discover quick, tasty <br> ways to enjoy from classic tea-time treats to fun, <br>
            family-friendly desserts.</p>
        <?php get_template_part('template-parts/recipie-slider'); ?>
    </div>

<div class="other-recipe-container">
    <div class="other-recipe">
        <!-- Added header with title and tab filters -->
        <div class="header-section">
            <h2>Other Recipes</h2>
            <div class="tabs-container top-section">
                <button class="tab-button active" data-filter="all">All Recipes</button>
                <button class="tab-button" data-filter="vegan">Vegan</button>
                <button class="tab-button" data-filter="plant">Plant-Based</button>
                <button class="tab-button" data-filter="nonveg">Non Veg</button>
            </div>
        </div>
        
        <div class="slider-wrapper">
            <div class="products-grid" id="productsGrid">
                <!-- Products will be populated by JavaScript -->
            </div>
        </div>

        <div class="pagination-section">
            <button class="nav-button" id="prevBtn" onclick="prevSlide()"><i class="ri-arrow-left-s-line left"></i></button>
            <div class="pagination-info">
                <span id="currentPage">01</span>/<span id="totalPages">06</span>
            </div>
            <button class="nav-button" id="nextBtn" onclick="nextSlide()"><i class="ri-arrow-right-s-line right"></i></button>
        </div>
     </div>
 </div>

    <?php get_template_part('template-parts/nearby-store'); ?>

    <?php get_template_part('footer', 'volt'); ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var swiper2 = new Swiper(".our-recipe-slider", {
                effect: "coverflow",
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: "auto",
                loop: true,
                coverflowEffect: {
                    rotate: 0,
                    stretch: 0,
                    depth: 200,
                    modifier: 2,
                    slideShadows: false,
                },
            });

            const accordions = document.querySelectorAll(".accordion-header");
            accordions.forEach(header => {
                header.addEventListener("click", () => {
                    const parent = header.parentElement;
                    document.querySelectorAll(".accordion-item").forEach(item => {
                        if (item !== parent) item.classList.remove("active");
                    });
                    parent.classList.toggle("active");
                });
            });

            const categoryButtons = document.querySelectorAll('.top-section button[data-filter]');
            const recipeCols = document.querySelectorAll('.recipe-col');

            function setActiveButton(clickedBtn) {
                categoryButtons.forEach(b => b.classList.remove('active'));
                clickedBtn.classList.add('active');
            }

            function filterRecipes(filter) {
                recipeCols.forEach(col => {
                    const cats = (col.getAttribute('data-categories') || '').split(',').map(s => s.trim()).filter(Boolean);
                    if (filter === 'all') {
                        col.style.display = '';
                    } else {
                        if (cats.indexOf(filter) !== -1) {
                            col.style.display = '';
                        } else {
                            col.style.display = 'none';
                        }
                    }
                });
            }

            categoryButtons.forEach(btn => {
                btn.addEventListener('click', function (e) {
                    e.preventDefault();
                    const filter = btn.getAttribute('data-filter');
                    setActiveButton(btn);
                    filterRecipes(filter);
                });
            });

            const activeBtn = document.querySelector('.top-section button.active');
            if (activeBtn) {
                filterRecipes(activeBtn.getAttribute('data-filter') || 'all');
            } else {
                filterRecipes('all');
            }
        });
    </script>
<script>
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
</script>

<script>
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

        function nextSlide() {
            currentPage = (currentPage + 1) % totalPages;
            renderProducts();
        }

        function prevSlide() {
            currentPage = (currentPage - 1 + totalPages) % totalPages;
            renderProducts();
        }

        // Initialize slider and tabs
        filterProducts();
        renderProducts();
        setupTabFilters();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>