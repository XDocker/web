<?php get_header(); ?>
<?php get_template_part('menu');  ?>
    <div class="container padt60 pos-center">
        <header class="page-header">
            <div class="error_title"><?php echo __("404","theme2035-fm"); ?></div>
        </header>
        <div class="page-wrapper">
            <div class="page-content">
                <?php echo $smof_data['error_page']; ?>
                <div class="error_search">
                    <?php get_search_form(); ?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>