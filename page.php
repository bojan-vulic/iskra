<?php
/*
Template name: Glavni sablon teme
*/


?>
   <?php get_header(); ?>
   
   <?php get_template_part('slikaZaNaslove'); ?>
    
    <!-- blog -->

    <section class="container py-5">
       
    <div class="row">
        <div class="col-md-10 offset-1">
            <div class="content">
            
                 <?php the_content(); ?>
               
            </div>
                
        </div>
    </div>
    </section>
    
   
  
     <?php get_footer(); ?>