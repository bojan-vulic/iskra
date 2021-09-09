
  
<?php get_header(); ?>

<?php get_template_part('slikaZaNaslove'); ?>



    <!-- blog -->
    <section class="container py-5">
      
      <div class="blog">

      <?php
        // the query
        $the_query = new WP_Query(array(
            'post_type' => 'galerije'
        )); ?>

        <?php if ($the_query->have_posts()) : ?>


            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

        <article>
          <div class="featured-image">
            <?php the_post_thumbnail(); ?>
          </div>
          <div class="content">
            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
          </div>
        </article>

        <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>

        <?php else : ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>




      </div>
    
    </section>


       


<?php get_footer(); ?>