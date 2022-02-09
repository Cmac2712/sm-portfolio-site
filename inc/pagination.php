<?php

    $current_url = $_SERVER['REQUEST_URI'];

    $pages = Array(
        '/target-beauty-ausmade-folio',
        '/target-thermals-folio',
        '/target-beauty-main-folio',
        '/target-maxx-socks-folio',
        '/disney-kitchen-folio',
        '/reeses-rounds-folio',
        '/eat-me-folio',
        '/stacy-hannah-folio'
    );

    function get_previous_page($current_url, $pages) {
        $current_index = array_search($current_url, $pages);
        $last_index = count($pages) -1;

        return ($current_index === 0) ? $pages[$last_index] : $pages[$current_index - 1];
    }

    function get_next_page($current_url, $pages) {
        $current_index = array_search($current_url, $pages);
        $last_index = count($pages) -1;

        return ($current_index === $last_index) ? $pages[0] : $pages[$current_index + 1];
    }

?>

<div class="dk-pagination">
    <div class="container">
        <a 
        href="<?php echo get_previous_page($current_url, $pages); ?>" 
        class="dk-pagination-prev justify-content-start">
        <span class="dk-pagination-icon"><span class="icon pe-7s-angle-left"></span></span>Previous Project</a>

        <a href="/" class="dk-pagination-center">
            <span class="dk-pagination-center justify-content-center">
                <span class="dk-icon-quote"></span>
            </span>

        </a>
        <a
            href="<?php echo get_next_page($current_url, $pages); ?>" 
            class="dk-pagination-next justify-content-end"
        >
            Next Project<span class="dk-pagination-icon"><span class="icon pe-7s-angle-right"></span></span>
        </a>
    </div>
</div>