<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package my_theme
 */

get_header();
?>
 
	<main id="primary" class="site-main">
 
		<h1>Actualité</h1>
 
		 <?php
		 while ( have_posts() ) : 
			the_post();
			 
			the_post_thumbnail(); ?>
			<h2><?php the_title(); ?></h2>
			<p><?php the_excerpt(); ?></p>
		
 
		 <?php endwhile; // End of the loop.
		 ?>
 
	 </main><!-- #main -->
 
 <?php
 
 