<?php get_header(); ?>

<!-- header -->
<header class="text-center">
    <h1><?php the_field('glavni_naslov'); ?></h1>
    <h3><?php the_field('glavni_podnaslov'); ?></h3>
</header>

<!-- misijaVizija -->
<section class="container misijaVizija py-5">
    <div class="row">
        <div class="col-md-6 text-center">
            <h2><?php the_field('naslov_prve_sekcije_levo'); ?></h2>
            <h4><?php the_field('podnaslov_prve_sekcije_levo'); ?></h4>
            <p class="lead"><?php the_field('tekst_prve_sekcije_levo'); ?></p>
        </div>

        <div class="col-md-6 text-center">
            <h2><?php the_field('naslov_prve_sekcije_desno'); ?></h2>
            <h4><?php the_field('prvi_podnaslov_prve_sekcije_desno'); ?></h4>
            <h4><?php the_field('drugi_podnaslov_prve_sekcije_desno'); ?></h4>
            <h4><?php the_field('treci_podnaslov_prve_sekcije_desno'); ?> </h4>
        </div>
    </div>

    <div class="col-md-12 text-center py-5">
        <h2><?php the_field('naslov_prve_sekcije_centar'); ?></h2>
        <p class="lead"><?php the_field('tekst_prve_sekcije_centar'); ?></p>
    </div>
    
</section>

<!-- cetiriSlike -->
<section class="container cetiriSlike text-center mb-5">
    <img src="<?php the_field('velika_slika'); ?>" alt="">
    
    <h2 class="mt-5"><?php the_field('naslov_sekcije_ispod_velike_slike'); ?></h2>
    <hr>
    <p><?php the_field('tekst_sekcije_ispod_velike_slike'); ?></p>
    <a href="" class="btn mb-4">Procitaj vise</a>
</section>

<!-- zastoMi -->
<section class="container zastoMi py-5">
    <h2 class="text-center mb-5"><?php the_field('naslov_sekcije_iznad_cetiri_ikonice'); ?></h2>
    <div class="row">
        <div class="col-md-3 text-center">
            <i class="fas fa-users fa-2x"></i>
            <p><?php the_field('tekst_ispod_prve_ikonice'); ?></p>
        </div>

        <div class="col-md-3 text-center">
            <i class="fas fa-users fa-2x"></i>
            <p><?php the_field('tekst_ispod_druge_ikonice'); ?></p>
        </div>

        <div class="col-md-3 text-center">
            <i class="fas fa-users fa-2x"></i>
            <p><?php the_field('tekst_ispod_trece_ikonice_'); ?></p>
        </div>

        <div class="col-md-3 text-center">
            <i class="fas fa-users fa-2x"></i>
            <p><?php the_field('tekst_ispod_cetvrte_ikonice'); ?></p>
        </div>
    </div>
</section>

<!-- blog -->
<section class="container py-5">
    <h2 class="text-center mb-5">Poslednje sa bloga</h2>
    <div class="blog">


        <?php
        // the query
        $the_query = new WP_Query(array(
            'post_type' => 'post'
        )); ?>

        <?php if ($the_query->have_posts()) : ?>


            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                <article>
                    <div class="featured-image">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="content">
                        <h4><?php the_title(); ?></h4>
                        <?php the_excerpt(); ?>
                        <a href="<?php echo get_the_permalink(); ?>" class="btn">Procitaj vise</a>
                    </div>
                </article>

            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>

        <?php else : ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>

    </div>

</section>


<?php get_template_part('trislike'); ?>

<?php get_footer(); ?>