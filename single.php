<?php get_header(); ?>

<?php get_template_part('slikaZaNaslove'); ?>


    <!-- blog -->
    <section class="container py-5 ">
      <div class=" singlePage">

     

        <article class="text-center">
          <div class="featured-image">
            <?php the_post_thumbnail(); ?>
          </div>
          <div class="content">
            
            <?php the_content(); ?>
           
          </div>
        </article>

     <?php get_header(); ?>







<?php get_footer(); ?>

 </div>
    
    </section>


       


<?php get_footer(); ?>