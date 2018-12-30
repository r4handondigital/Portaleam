<!DOCTYPE html>
<html lang="pt_BR">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<?php if (is_home()): ?>
         	<meta name="description" content="Todo mundo está ligado!">
        <?php else: ?>
           
            
        <?php endif ?>

	
		<meta name="author" content="Theu Maia">
		<link rel="icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">
		<meta name="theme-color" content="#2c4190">
		<title>PORTAL EAM - Todo mundo está ligado!</title>

		<!-- FONTES -->


		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  		<link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,700,800,900" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link href="<?php bloginfo('template_url'); ?>/lib/materialize/css/materialize.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/lib/owl-carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/lib/owl-carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/lib/owl-carousel/assets/owl.theme.green.min.css">
		<!-- Custom styles for this template -->
		<link href="<?php bloginfo('template_url'); ?>/lib/css/principal.css?date=<? echo date ("Ymdhis")?>" rel="stylesheet">

	<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
  var OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "2a63ad6d-06ea-4a42-a922-018d44b58460",
    });
  });
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-39838331-17"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-39838331-17');
</script>

<meta property="og:type" content="article" />
		
				<meta property="og:title" content="<?php echo strip_tags(get_the_title()); ?>">

				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
							 
<meta property="og:description" content="<?php the_excerpt(); ?>">

						<?php endwhile; endif; ?> 
         				<?php wp_reset_query(); ?> 
				</div>
				
				<meta property="og:image" content="<?php echo catch_that_image() ?>" />
				<meta property="og:site_name" content="PORTAL EAM">
		        <meta itemprop="thumbnailUrl" content="<?php echo catch_that_image() ?>">


 <script type="text/javascript">

        function fechar(){
            document.getElementById('popup').style.display = 'none';
            document.getElementById('bg-rich').style.display = 'none';
        }

        function abrir(){
            document.getElementById('popup').style.display = 'block';
        }

    </script>
<?php wp_head(); ?> 

<? /*php if (is_home()): ?>
        
<a id="bg-rich" href="javascript: fechar();"></a>
                    <div align="center" id="popup">

                        <div class="loop-img">

                            <div class="fechar-mobile" >
                                <a href="javascript: fechar();"><img src="<?php bloginfo('template_url'); ?>/imgs/fechar-novo.png" border="0" /></a>
                            </div>
 
                       
                             <p align="center">
                                
                               <div class="fb-page" data-href="https://www.facebook.com/portaleam/" data-tabs="timeline" data-width="500" data-height="70" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/portaleam/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/portaleam/">Portal Eu Amo Macau</a></blockquote></div>
                               
                            </p>
                        </div>
                    </div>
        <?php else: ?>
           
            
        <?php endif */ ?>





	</head>
        <body>
       
        <header>
        	<nav>
			    <div class="nav-wrapper container">
			      
			      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
			      <ul class="left hide-on-med-and-down">
			        <li><a href="<?php bloginfo('url'); ?>/">HOME</a></li>
			        <li><a href="<?php bloginfo('url'); ?>/quem-sou-eu">QUEM SOU EU</a></li>
			        <li><a href="<?php bloginfo('url'); ?>/nav/noticias">NOTÍCIAS</a></li>
			        <li><a href="<?php bloginfo('url'); ?>/nav/eventos">EVENTOS</a></li>
			        <li><a href="<?php bloginfo('url'); ?>/nav/materias-entrevistas">MATÉRIAS & ENTREVISTAS</a></li>
			      </ul>
			      <ul class="side-nav" id="mobile-demo">
			        <li><a href="<?php bloginfo('url'); ?>/">HOME</a></li>
			        <li><a href="<?php bloginfo('url'); ?>/quem-sou-eu">QUEM SOU EU</a></li>
			        <li><a href="<?php bloginfo('url'); ?>/nav/noticias">NOTÍCIAS</a></li>
			        <li><a href="<?php bloginfo('url'); ?>/nav/eventos">EVENTOS</a></li>
			        <li><a href="<?php bloginfo('url'); ?>/nav/materias-entrevistas">MATÉRIAS & ENTREVISTAS</a></li>
			      </ul>

			      <ul class="redes-sociais">
						<li><a href="https://www.youtube.com/portaleam?gl=BR&hl=pt" target="_blank"><i class="fab fa-youtube-square"></i></a></li>
						<li><a href="https://twitter.com/portaleam" target="_blank"><i class="fab fa-twitter-square"></i></a></li>
						<li><a href="https://www.facebook.com/portaleam" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
			      </ul>
			    </div>
			  </nav>
			 
			  <div class="container">
			  	  
				  <div class="row top-im">
						<div class="col s12 m12 l4">
							<a href="<?php bloginfo('url'); ?>/" class="brand-logo"></a>
							<a href="<?php bloginfo('url'); ?>/" class="brand-logo-x"><img src="<?php bloginfo('template_url'); ?>/imgs/LOGO-desktop.png" class="responsive-img"></a>
						</div>
						<div class="col s12 m12 l4">
							<form class="form-inline widget search" method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
				              <div class="form-group">
				                <input type="text" class="form-control" name="s" id="s" placeholder="Faça sua pesquisa">
				                  <button type="button" class="btn btn-default grey lighten-3 black-text">
				                  <i class="fas fa-search"></i>
				                </button>
				              </div>
				              
				            </form>
						</div>

						<div class="col s12 m12 l4 ">
							<img src="<?php bloginfo('template_url'); ?>/imgs/foto-theu-maial.png" class="img-theu">
						</div>
				  </div>
			  </div><!--row-->

			 
        </header>
