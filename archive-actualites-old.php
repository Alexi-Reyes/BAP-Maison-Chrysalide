<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package my_theme
 */

get_header();
$carousel_image_counter = 0;
?>

	<main id="primary" class="site-main">
  
		<h2 class="title-photos">Galerie photos</h2>

		<div class="carousel-wrapper">
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<div id="carouselExample" class="carousel slide">
				<div class="carousel-inner">

					<?php 
					$args1 = array(
						'post_type' => 'galerie'
					);
					
					$query1 = new WP_Query($args1); ?>

					<?php if ($query1->have_posts()) {
						while ($query1->have_posts()) {
							$query1->the_post(); ?>

							<?php if ($carousel_image_counter == 0) { ?>

								<div class="carousel-item active">
									<?php the_post_thumbnail(); ?>
								</div>
							
								<?php $carousel_image_counter += 1; 
					
							} else { ?>
								<div class="carousel-item">
									<?php the_post_thumbnail(); ?>
								</div>
							<?php }
						} 
					} else {
						echo 'No posts found for custom post type 1.';
					}
			
					wp_reset_postdata(); ?> 
				</div>
			</div>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>

		<h2 class="title-actus">Galerie des actualités</h2>



			<?php
			$args2 = array(
				'post_type' => 'actualites'
			);
			
			$query2 = new WP_Query($args2);
			
			if ($query2->have_posts()) { ?>
				<section class="actus-wrapper"> <?php
				while ($query2->have_posts()) {
				$query2->the_post();
			
				?><div class="actu">
					<?php if (has_post_thumbnail()) {
						the_post_thumbnail();
					} else {
						?> <img src="/chrysalide/wp-content/themes/my_theme/icons/image-default.svg" alt=""> <?php
					} ?>
				  	<h3><?php the_title(); ?></h3>
				  	<?php the_excerpt(); ?>
					<div class="button-wrapper">
						<a href="<?php the_permalink() ?>">
							<button>Découvrir</button>
						</a>
					</div>
			  	</div>
				<?php } ?>
		  	</section> <?php
			} else {
				echo 'No posts found for custom post type 2.';
			}
			
			wp_reset_postdata(); // Reset the post data for custom post type 2
  
			
			the_posts_navigation();
  
		?>
	</main><!-- #main -->
	<script src="/chrysalide/wp-content/themes/my_theme/js/carousel.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<?php
  
  