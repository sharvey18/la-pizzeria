<?php get_header(); ?>

    <!-- wordpress loop -->
    <?php while(have_posts()) : the_post(); ?>

        <div class="hero" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?> ">
            <div class="hero-content">
                <div class="hero-text container">
                    <h2><?php echo esc_html( get_option('blogdescription') ) ?></h2>
                    <?php the_content(); ?>
                    <?php $url = get_page_by_title('About Us'); ?>
                    <a class='btn btn-primary' href="<?php echo get_permalink($url->ID); ?>">More Info</a>
                </div>
            </div>
        </div>

    <?php endwhile; ?>

        <div class="main-content container">
            <main class='content-text row'>
                <h2 class='primary-text text-center col col-12'>Our Specialties</h2>

                <?php
                    $args = array(
                        'posts_per_page' => 3,
                        'post_type' => 'specialties',
                        'category_name' => 'pizzas',
                        'orderby' => 'rand' // if website gets a lot of traffic, don't use randome
                    );
                    $specialties = new WP_QUERY($args);
                    while($specialties->have_posts()): $specialties->the_post(); ?>

                    <div class="specialty col col-12 col-md-4">
                        <div class="specialty-content">
                            <?php the_post_thumbnail('specialty-portrait'); ?>
                            <div class="information">
                                <?php the_title('<h3>', '</h3>'); ?>
                                <?php the_content(); ?>
                                <p class='price'>$<?php the_field('price'); ?></p>
                                <a href="<?php the_permalink(); ?>" class='btn btn-primary'>Read More</a>
                            </div>
                        </div>
                    </div>

                    <?php endwhile; wp_reset_postdata(); ?>

            </main>
        </div>

        <section class='ingredients'>
            <div class="container">
                <div class="row">
                    <?php while(have_posts()): the_post(); ?>
                        <div class="col col-12 col-md-6">
                            <h3><?php the_field('ingredients_title'); ?></h3>
                            <?php the_field('ingredients'); ?>
                            <?php $url = get_page_by_title('About Us'); ?>
                            <a class='btn btn-primary' href="<?php echo get_permalink($url->ID); ?>">Read More</a>
                        </div>

                        <div class="col col-12 col-md-6 image">
                            <img src="<?php the_field('image'); ?>" alt="Fresh Ingredients">
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>

        <section class='container'>
            <h2 class='primary-text text-center'>Gallery</h2>
            <?php
                $url = get_page_by_title('Gallery');
                echo get_post_gallery($url->ID);
             ?>
        </section>

<?php get_footer(); ?>
