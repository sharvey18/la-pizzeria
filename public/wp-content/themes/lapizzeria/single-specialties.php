<?php get_header(); ?>

    <!-- wordpress loop -->
    <?php while(have_posts()) : the_post(); ?>

        <div class="hero" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
            <div class="hero-content">
                <div class="hero-text">
                    <h2><?php the_title(); ?></h2>
                </div>
            </div>
        </div>

        <div class="main-content container">
            <main class='text-center content-text'>
                <p class='ingrediants'>Ingrediants:</p>
                <?php the_content(); ?>
                <p class='price'>Price: <span> $<?php the_field('price'); ?> </span></p>
            </main>
        </div>

    <?php endwhile; ?>

<?php get_footer(); ?>
