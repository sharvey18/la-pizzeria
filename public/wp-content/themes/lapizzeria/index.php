<?php get_header(); ?>

<?php
    $blog_page = get_option('page_for_posts');
    $image = get_post_thumbnail_id($blog_page);
    $image = wp_get_attachment_image_src($image, 'full');
 ?>

    <!-- blog is different from other pages -->
        <div class="hero" style="background-image: url(<?php echo $image[0]; ?>)">
            <div class="hero-content">
                <div class="hero-text">
                    <h2><?php echo get_the_title(); ?></h2>
                </div>
            </div>
        </div>

        <div class="main-content container">
            <div class="row">
                <main class='content-text col col-8'>
                    <?php while(have_posts()) : the_post(); ?>
                        <article class="entry">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('specialties'); ?>
                            </a>

                            <header class='entry-header clear'>
                                <div class="date">
                                    <time>
                                        <?php echo the_time('d'); ?>
                                        <span><?php echo the_time('M'); ?></span>
                                    </time>
                                </div><!-- .date -->
                                <div class="entry-title">
                                    <?php the_title('<h2>', '</h2>'); ?>

                                    <p class='author'>
                                        <i class='fa fa-user' aira-hidden='true'></i>
                                        <?php the_author(); ?>
                                    </p><!-- .author -->
                                </div>
                            </header>
                            <div class="entry-content">
                                <?php the_excerpt(); ?> <!-- this function only prints small portion of content -->
                                <a href="<?php the_permalink(); ?>" class='btn btn-primary'>Read More</a>
                            </div>

                        </article>
                    <?php endwhile; ?>
                </main>
                <?php get_sidebar(); ?>
            </div><!-- .row -->


        </div>

<?php get_footer(); ?>
