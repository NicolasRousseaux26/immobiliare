<?php
// Require du fichier header.php
get_header(); ?>

    <div class="container">
    	<?php
    		if (have_posts()) : ?>
    			<div class="row">
	    			<?php while (have_posts()) : the_post(); ?>
	    				<div class="col-lg-12">
    						<?php
    							// Récupère l'url de l'image
    							$image_url = wp_get_attachment_image_src(
    								get_post_thumbnail_id( $post->ID ), 'large'
    							);
    							// On veut le chemin de l'image
    							$image_url = $image_url[0];
    						?>
						    <img class="card-img-top" src="<?= $image_url; ?>" alt="<?php the_title(); ?>">
						    <?php // the_post_thumbnail( [100, 100] ); ?>
						    <div class="card-body">
						        <h5 class="card-title"><?php the_title(); ?></h5>
						        <p class="card-text"><?php the_content(); ?></p>
						        <a href="<?php the_permalink(); ?>" class="btn btn-primary">
						        	Voir l'article
						        </a>
						    </div>
	    				</div>
	    			<?php endwhile; ?>
    			</div>
    		<?php else :
    			echo '<h2>Pas d\'article</h2>';
    		endif;
    	?>
    	
    </div>

<?php get_footer(); ?>
