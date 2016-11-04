<div id="mais-lidos">

	<h3>Mais lidos</h3>

	<?php while ( have_posts() ) : the_post(); ?>
		<div class="last-posts">
			<div class="<?php post_class(); ?>" id="post-<?php the_ID(); ?>" style="width: 100%;">
		        <a title="<?php printf( esc_attr__( '%s', 'compass' ), the_title_attribute( 'echo=0' ) ); ?>" href="<?php the_permalink(); ?>" rel="bookmark">
		        <?php
			        if ( has_post_thumbnail() ) {
			          the_post_thumbnail();
			        } 
		        	else {
		        		echo '<div class="box" style="width:100px;height:80px;display:inline-block;float: left;margin-right: 15px;margin-top:-10px;"></div>';
		        	}
		        ?>

		        <h5 class="entry-title">
	                <?php the_title(); ?>
	            </h5>
		        </a>
	            Autor: <?php the_author(); ?> | Data: <?php the_date(); ?>
		    </div>
		</div>
	<?php endwhile; ?>

</div>

<div id="ultimos-posts">

	<h3>Ultimos Posts</h3>

	<?php while ( have_posts() ) : the_post(); ?>
		<div class="last-posts">
			<div class="<?php post_class(); ?>" id="post-<?php the_ID(); ?>" style="width: 100%;>
		        <a title="<?php printf( esc_attr__( '%s', 'compass' ), the_title_attribute( 'echo=0' ) ); ?>" href="<?php the_permalink(); ?>" rel="bookmark">
		        <?php
			        if ( has_post_thumbnail() ) {
			          the_post_thumbnail();
			        } 
			        else {
		        		echo '<div class="box" style="width:100px;height:80px;display:inline-block;float: left;margin-right: 15px;margin-top:-10px;"></div>';
		        	}
		        ?>

		        <h5 class="entry-title">
	                <?php the_title(); ?>
	            </h5>
		        </a>
	            Autor: <?php the_author(); ?> | Data: <?php the_date(); ?>
		    </div>
		</div>
	<?php endwhile; ?>

</div>