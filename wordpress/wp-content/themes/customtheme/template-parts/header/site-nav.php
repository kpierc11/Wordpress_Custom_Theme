<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <?php wp_nav_menu($args = array(
                'menu_class'        => "navbar-nav", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
                'menu_id'           => "nav-item", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
                'theme_location'    => "primary", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.

            )) ?>
        </div>
    </div>
</nav>