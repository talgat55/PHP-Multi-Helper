<?php
/*
 * Template Name: Страница новостей
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
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = [
                    'post_type' => 'post',
                    'posts_per_page' => '1',
                    'post_status' => 'publish',
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'paged' => $paged,
                    'page' => $paged
                ];

                $query = new WP_Query($args); ?>
                <div class="clearfix">
                    <ul class="lists">
                        <?php
                        while ($query->have_posts()) : $query->the_post();
                            $post_id = $query->post->ID;
                            $anons = get_field('anons', $post_id);
                            // $img_url = wp_get_attachment_url( get_post_thumbnail_id($post_id),'full');
                            ?>
                            <li class="item col-sm-4 col-xs-12">
                                <div class="item-walp">
                                    <div class="pre-block">
                                        <i class="fas fa-pencil-alt"></i>
                                    </div>
                                    <div class="category">
                                        <?php   echo  get_the_category( $post_id)[0]->name;  ?>
                                    </div>
                                    <h3 class="title">
                                        <a href="<?= get_the_permalink($post_id) ?>">
                                            <?= get_the_title($post_id) ?>
                                        </a>
                                    </h3>
                                    <div class="date">
                                        <?=get_the_date('d,  M, Y') ?>
                                    </div>
                                    <div class="anons">
                                        <?= $anons; ?>
                                    </div>
                                    <a href="<?= get_the_permalink($post_id) ?>" class="link-to-article"><?  _e('Читать далее', 'light'); ?></a>
                                </div>
                            </li>
                        <?php  endwhile; ?>
                    </ul>
                </div>
                <div class="col-sm-12 col-xs-12">


                    <?php

                    $GLOBALS['wp_query'] = $query;
                    the_posts_pagination([
                        'show_all' => false,
                        'prev_text' => __('Предыдущая страница', 'light'),
                        'next_text' => __('Следующая страница', 'light'),
                        'end_size' => '2',     // количество страниц на концах
                        'mid_size' => '2',
                        'screen_reader_text' => __(' ', 'light'),
                    ]);
                    ?>
                </div>
            </div>
        </div>
    </div><!-- #primary -->

<?php get_footer();

