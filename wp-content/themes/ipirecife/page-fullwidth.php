<?php
/*
Template Name: Fullwidth
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
            <h1><?php the_title(); ?></h1>
          </div>
          
        </div>

        <div class="menu-page">
            <div class="container">
              <span>Conheça-nos ></span>
              <ul class="navbar-right">
                <li><a href="">Histórico</a></li>
                <li><a href="">Nossa Crença</a></li>
                <li><a href="#equipe">Equipe</a></li>
                <li><a href="#localizacao">Localização</a></li>
              </ul>
            </div>
        </div>
        
      </div>

      
  </header>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="container">
				<div class="row">
			        <?php the_content(''); ?>
	          	</div>
			</div>

		<?php endwhile; ?>



		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
