<?php get_header(); ?>

<section class="slikaZaNaslove d-flex align-items-center text-center">
    <div class="container">
        <h1>Blog</h1>
    </div>
</section>

<!-- blog -->

<section class="container py-5">

    <h2 class="text-center mb-5">Poslednje sa bloga</h2>
    <div class="blog">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

        <article>
            <div class="featured-image">
                <?php echo the_post_thumbnail(); ?>
            </div>
            <div class="content">
                <h4><?php the_title(); ?></h4>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="btn">Procitaj vise</a>
            </div>
        </article>
        
        <?php endwhile; ?>

        <?php else : ?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>

    </div>
    
     <div class="pagination">
         <?php the_posts_pagination(); ?>
     </div>
      
</section>
<?php get_footer(); ?>
