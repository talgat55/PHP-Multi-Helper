<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<div class="container">
            <div class="row">
                <div class="col-sm-9 col-xs-12">
                    <div class="row">
                        <div class="main-content">




                            <?php
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();
                            ?>
                                <div class="category">
                                    <?php
                                    $i = 0;
                                    foreach (get_the_category(get_the_ID()) as  $item){
                                        if($i > 0) {
                                            echo ', ';
                                        }
                                        echo $item->name;

                                        $i++;
                                    }
                                    ?>
                                </div>
                                <h3 class="title">
                                        <?= get_the_title(get_the_ID()) ?>
                                </h3>
                                <div class="date">
                                    <?=get_the_date('d,  M, Y') ?>
                                </div>


                            <?php

                            the_content();
                                // If comments are open or we have at least one comment, load up the comment template.
//				if ( comments_open() || get_comments_number() ) :
//					comments_template();
//				endif;



                            endwhile; // End of the loop.
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-12">
                    <div class="main-content">
                    <?php get_sidebar(); ?>
                    </div>
                </div>

            </div>
        </div>

	</div><!-- #primary -->

</div><!-- .wrap -->

<?php get_footer();
