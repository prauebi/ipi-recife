<?php
/*
Template Name: Exemplo
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
              <li class="menu-topo"><a href="#">INICIAL</a></li>
              <li class="menu-topo"><a href="#about">CONHEÇA-NOS</a></li>
              <li class="menu-topo"><a href="#contact">NOSSOS ENCONTROS</a></li>
              <li class="menu-topo"><a href="#contact">BLOG</a></li>
              <li class="menu-topo"><a href="#contact">CONTATO</a></li>
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
            <h1>Conheça-nos</h1>
          </div>
          
        </div>

        <div class="menu-page">
            <div class="container">
              <span>Conheça-nos ></span>
              <ul class="navbar-right">
                <li><a href="">Histórico</a></li>
                <li><a href="">Nossa Crença</a></li>
                <li><a href="">Equipe</a></li>
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
		    <?php the_content(''); ?>

        <h2 id="equipe">equipe</h2>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4"></div>
          <div class="col-md-4"></div>
        </div>

        <h2 id="localizacao">localização</h2>
        <div class="row">

          <div class="col-md-6">
            Estr. do Arraial, 4362<br>
            Casa Amarela,<br>
            Recife - PE,<br>
            52070-230<br>
          </div>

          <div class="col-md-6">
            contato@primeiraipirecife.com.br<br><br>
            <b>Telefone:</b><br>
            (81) 3441-1537
          </div>

        </div>

      </div>

      <div class="mapa">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1661.0695596544308!2d-34.921634047790924!3d-8.02865544166888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab19a446397051%3A0x3b430bed6df3b7!2sPrimeira+Igreja+Presbiteriana+Independente+do+Recife!5e0!3m2!1spt-BR!2sbr!4v1476970852028" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

		<?php endwhile; ?>

		</main><!-- .site-main -->
  </div><!-- .content-area -->
  <div id="footer-bg"></div>  

<?php get_footer(); ?>
