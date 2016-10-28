<?php get_header(); ?>
  <body>

    <div class="header-full">

      <!-- Fixed navbar -->
      <nav class="navbar navbar-default navbar-fixed-top nav-home">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
    		      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo_ipi_recife.png" alt="Logo Ipi" id="logo-bw">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo-menu-colorida.png" id="logo-color" alt="Logo Ipi">
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
              <li class="active"><a href="./" id="btn-fixed">QUERO CONTRIBUIR<span class="sr-only">(current)</span></a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>
      
    </div>


    <div class="container">

  		<div class="row top-buffer" id="focus">

  			<div class="col-md-4">
          <div class="card" id="sou-novo">

            <div class="card-content center-block" id="content-novo">  
              <div class="card-icon">
                  <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon-home01.png" class="center-block" id="sou-novo-icon"alt="icone">
              </div>  

              <div class="card-caption" id="caption-novo">
                <ul>
                  <li><a href="#">Conheça a 1ª IPI Recife</a></li>
                  <li><a href="#">Nossa Crença</a></li>
                  <li><a href="#">Nossos Encontros</a></li>
                </ul>
              </div>
            </div>
            <div class="card-footer text-center sou-novo">
            SOU NOVO AQUI
            </div>
          </div>
        </div> <!-- card 1 -->

        <div class="col-md-4 active">
          <div class="card" id="sou-membro">
            <div class="card-content center-block text-center" id="content-membro">  
              <div class="card-icon">
                  <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon-home02.png" class="center-block" id="sou-membro-icon" alt="icone 2">
              </div>  

              <div class="card-caption" id="caption-membro">
                <ul>
                  <li>Link 01</li>
                  <li>Link 02</li>
                  <li>Link 03</li>
                </ul>
              </div>
            </div> 
            <div class="card-footer text-center sou-membro">
            SOU MEMBRO
            </div>
          </div>
        </div> <!-- card 2 -->

        <div class="col-md-4">
          <div class="card" id="mensagens">
            <div class="card-content" id="content-mensagens">  
              <div class="card-icon">
                  <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon-home03.png" class="center-block" id="mensagens-icon" alt="icone 3">
              </div>  

              <div class="card-caption" id="caption-mensagens">
                <ul>
                  <li>Link 01</li>
                  <li>Link 02</li>
                  <li>Link 03</li>
                </ul>
              </div>
            </div> 
            <div class="card-footer text-center mensagens">
            MENSAGENS
            </div>
          </div>
        </div> <!-- card 3 -->

  		</div> <!-- END CARDS -->


    </div> <!-- /container -->

    <!-- <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/arrow.png" class="center-block" alt="arrow" id="lvlp"> -->

    <div class="nav-bottom">
      <div class="lava-ipi"></div>
    </div>

    <div class="container">

    <section id="eventos">
      <div class="row top-buffer">
        <h2>próximos eventos</h2>

        <section class="responsive slider">

            <?php while ( have_posts() ) : the_post(); ?>

            <div class="col-md-3 <?php post_class(); ?>" id="post-<?php the_ID(); ?>">

              <div class="box">
                <a title="<?php printf( esc_attr__( '%s', 'compass' ), the_title_attribute( 'echo=0' ) ); ?>" href="<?php the_permalink(); ?>" rel="bookmark">
                <?php
                  if ( has_post_thumbnail() ) {
                  the_post_thumbnail();
                } ?>
                </a>
              </div>

            </div>

            <?php endwhile; ?>

        </section>

      </div>

      </div>
    </section>

    </div><!--  END CONTAINER EVENTOS -->

    <div class="container">
      <section id="blog">
        <div class="row">
          <h2>blog</h2>
          
          <section class="responsive slider">
            
            <?php while ( have_posts() ) : the_post(); ?>

            <div class="col-md-3 <?php post_class(); ?>" id="post-<?php the_ID(); ?>">

              <div class="box">
                <?php
                  if ( has_post_thumbnail() ) {
                  the_post_thumbnail();
                } ?>
              </div>

            </div>

            <?php endwhile; ?>


          </section>
        </div>

      </section> <!-- END SECTION BLOG -->
    </div> <!-- END CONTAINER BLOG -->

    <section class="container">
      
      <div class="row">
        <h2 class="titulo-mapa">onde estamos</h2>
      </div>

    </section> <!-- TITULO MAPA -->

    <?php include "map.php" ?>

    <footer class="container">
      <div class="row">
        <section id="footer">
          <div class="col-md-4">
            <h2>nossos encontros</h2>
            <b>Domingos:</b><br>
            18:30 - Culto de Louvor e Adoração<br><br>
            
            <b>Quartas-feiras:</b><br>
            20:00 Culto da Esperança<br><br>


            <b>Escola Bíblica:</b><br>
            Domingo às 17h
          </div>

          <div class="col-md-4">

            <h2>localização</h2>
            Estr. do Arraial, 4362<br>
            Casa Amarela,<br>
            Recife - PE,<br>
            52070-230<br>
            
          </div>

          <div class="col-md-4">
            <h2>contato</h2>
            <b>Email:</b><br>
            contato@primeiraipirecife.com.br<br><br>
            <b>Telefone:</b><br>
            (81) 3441-1537
            
          </div>
        </section>
      </div>
    </footer>
<?php get_footer(); ?>   