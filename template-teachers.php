<?php
/*
 Template Name: Teachers
*/

$teachers_args = array(
    'post_type' => 'teachers',
    'post_status' => 'publish',
    'posts_per_page' => 9999,
);

$teachers = new WP_Query($teachers_args);


get_header(); ?>

<?php do_action( 'advance_fitness_gym_page_header' ); ?>

<main role="main" id="maincontent" class="our-services py-4 px-0">
    <div class="container">
        <?php
        $advance_fitness_gym_left_right = get_theme_mod( 'advance_fitness_gym_single_page_sidebar_layout','One Column');
        if($advance_fitness_gym_left_right == 'Left Sidebar'){ ?>
            <div class="row">
                <div id="sidebar" class="col-lg-4 col-md-4">
                    <?php dynamic_sidebar('sidebar-1'); ?>
                </div>
                <div class="col-lg-8 col-md-8 left-sidebar-page background-img-skin">
                    <?php while ( $teachers->have_posts() ) : $teachers->the_post(); ?>
                        <?php the_post_thumbnail(); ?>
                        <h1><?php the_title(); ?></h1>
                        <div class="entry-content"><?php the_content();?></div>
                    <?php endwhile; // end of the loop. ?>
                    <?php
                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;
                    ?>
                    <div class="clear"></div>
                </div>
            </div>
        <?php }else if($advance_fitness_gym_left_right == 'Right Sidebar'){ ?>
            <div class="row">
                <div class="col-lg-8 col-md-8 right-sidebar-page background-img-skin">
                    <?php while ( $teachers->have_posts() ) : $teachers->the_post(); ?>
                        <?php the_post_thumbnail(); ?>
                        <h1><?php the_title(); ?></h1>
                        <div class="entry-content"><?php the_content();?></div>
                    <?php endwhile; // end of the loop. ?>
                    <?php
                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;
                    ?>
                    <div class="clear"></div>
                </div>
                <div id="sidebar" class="col-lg-4 col-md-4">
                    <?php dynamic_sidebar('sidebar-1'); ?>
                </div>
            </div>
        <?php }else if($advance_fitness_gym_left_right == 'One Column'){ ?>
            <div class="container background-img-skin">
                <?php while ( $teachers->have_posts() ) : $teachers->the_post(); ?>
                    <?php the_post_thumbnail(); ?>
                    <h1><?php the_title(); ?></h1>
                    <div class="entry-content"><?php the_content();?></div>
                <?php endwhile; // end of the loop. ?>
                <?php
                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
                ?>
                <div class="clear"></div>
            </div>
        <?php }?>
    </div>
</main>

<?php do_action( 'advance_fitness_gym_page_footer' ); ?>

<?php get_footer(); ?>
