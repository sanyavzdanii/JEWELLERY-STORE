<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" class="d-flex align-items-center">
    <label class="d-flex align-items-center">
       <input type="submit" id="searchsubmit" value="найти" />
       <svg class="svg-icon hide-when-search hide pointer">
           <?php echo '<use xlink:href="' . get_stylesheet_directory_uri() . '/assets/sprite.svg#search-icon"/>'; ?>
       </svg>
      </label>
	<label class="screen-reader-text" for="s">Поиск: </label>
	<input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder="Search for products" />
</form>