<?php
/*
 * Template Name: Страница поиск
 */

  ?>
<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <div class="container">
            <div class="row">

            <?php  get_search_form(   $echo = true );?>
            </div>
        </div>
    </div><!-- #primary -->

<?php get_footer();

