<?php
/*
Template Name: Padrão
*/
?>

<?php get_header(); ?>

	<header>

      <!-- Fixed navbar -->
      <nav class="navbar navbar-default navbar-fixed-top navbar-white">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo-menu-colorida.png"alt="Logo Ipi">
            </a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="menu-topo"><a href="<?php echo get_home_url(); ?>">INICIAL</a></li>
              <li class="menu-topo"><a href="<?php echo get_home_url(); ?>/conheca-nos/">CONHEÇA-NOS</a></li>
              <li class="menu-topo"><a href="<?php echo get_home_url(); ?>/nossos-encontros/">NOSSOS ENCONTROS</a></li>
              <li class="menu-topo"><a href="<?php echo get_home_url(); ?>/blog/">BLOG</a></li>
              <li class="menu-topo"><a href="<?php echo get_home_url(); ?>/contato/">CONTATO</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="./" id="btn-fixed-page" class="btn-fixed">QUERO CONTRIBUIR<span class="sr-only">(current)</span></a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>

      <div class="header-page">

        <div class="content-header-page">

          <div class="container">
            <h1>Blog</h1>
          </div>
          
        </div>
        
      </div>

      
  </header>

<content>
	<div class="container">

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="col-md-4 post-navi" id="prev-post">
				TITULO DO POST<br>
				<small>Autor: Lorem Ipsum | Data: 10/02/2016</small>
			</div>

			<div class="col-md-4 post-navi" id="next-post">
				TITULO DO POST<br>
				<small>Autor: Lorem Ipsum | Data: 10/02/2016</small>
			</div>


			<article class="col-md-8 <?php post_class(); ?>" id="post-<?php the_ID(); ?>">

				<h2 class="entry-title"><a title="<?php printf( esc_attr__( 'Permalink to %s', 'compass' ), the_title_attribute( 'echo=0' ) ); ?>" href="<?php the_permalink(); ?>" rel="bookmark">
				    <?php the_title(); ?>
				</a></h2>
				<i class="fa fa-user" aria-hidden="true"></i> Postado em <?php the_date(); ?> por <?php the_author(); ?>

				<section class="entry-content"><?php the_content(); ?></section><!-- .entry-content -->
				<section class="entry-meta"><?php if ( count( get_the_category() ) ) : ?>
			    <span class="cat-links">
			        Categorias: <?php echo get_the_category_list( ', ' ); ?>
			    </span>
				<?php endif; ?></section><!-- .entry-meta -->
			</article>
		<?php endwhile; ?>
	</div>
</content>

<?php get_footer(); ?>