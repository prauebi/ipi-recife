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

    <div class="row">

      <div class="col-xs-12 col-sm-12 col-md-8">
        <?php while ( have_posts() ) : the_post(); ?>

          <?php include "post-navigation.php" ?>


          <article class="<?php post_class(); ?>" id="post-<?php the_ID(); ?>">

            <div class="entry-title">
              <h2><?php the_title(); ?></h2>
              <i class="fa fa-user" aria-hidden="true"></i>Autor: <?php the_author(); ?> | Data: <?php the_date(); ?>
            </div>

            <div class="entry-thumb">
              <?php if ( has_post_thumbnail() ) {the_post_thumbnail();} ?>
            </div>

            <div class="read-ctrl row">

              <div class="col-md-4">
                Aumentar tamanho da letra: <span class="plus">+</span>  <span class="minus">-</span>
              </div>

              <div class="col-md-4">
                Alterar fonte do texto: <span class="plus"><</span>  <span class="minus">></span>
              </div>

              <div class="col-md-4">
                <span class="read-mode ">MODO LEITURA</span>
              </div>
            
            </div>

            <section class="entry-content"><?php the_content(); ?></section><!-- .entry-content -->
            <section class="entry-meta"><?php if ( count( get_the_category() ) ) : ?>
              <span class="cat-links">
                  Categorias: <?php echo get_the_category_list( ', ' ); ?>
              </span>
            <?php endif; ?></section><!-- .entry-meta -->
          </article>

          <?php include "post-navigation.php" ?>

        <?php endwhile; ?>
      </div>

      <aside class="col-xs-12 col-md-4">
        <?php get_sidebar(); ?>
      </aside>

    </div> <!-- END ROW -->

  </div>
</content>

<?php get_footer(); ?>