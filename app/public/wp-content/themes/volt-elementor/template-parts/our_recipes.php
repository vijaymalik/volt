<div class="our-recipes-mbl px-4 mt-2 position-relative">
    <h2>Our Recipes</h2>
    <p>Make snack time exciting! Discover quick, tasty <br> ways to enjoy from classic tea-time treats to fun, <br>
        family-friendly desserts.</p>
    <?php get_template_part('template-parts/recipe-slider'); ?>
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
            <button class="nav-button" id="prevBtn"><i class="ri-arrow-left-s-line left"></i></button>
            <div class="pagination-info">
                <span id="currentPage">01</span>/<span id="totalPages">06</span>
            </div>
            <button class="nav-button" id="nextBtn" ><i class="ri-arrow-right-s-line right"></i></button>
          </div>
     </div>
</div>