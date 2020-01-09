<!doctype html>
<html class="no-js" lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> <?php if(is_front_page() || is_home()){} elseif (function_exists('is_tag') && is_tag()) { echo 'Posts com a tag &quot;' . $tag . '&quot; - ';}elseif (is_archive()) { wp_title(''); echo ' | ';}elseif (is_search()) { echo 'Procurar por &quot;' . wp_specialchars($s) . '&quot; - ';}elseif (!(is_404()) && (is_single()) || (is_page())) { wp_title(''); echo ' | ';}elseif (is_404()) { echo 'Não encontrado - '; } bloginfo('name'); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta property="og:url" content="Link do site online">
        <meta property="og:site_name" content="Vila Rica">
        <meta property="og:type" content="websites" />
        <meta property="og:locale" content="pt_BR" />
        <meta property="og:title" content="Vila Rica">
        <meta property="og:description" content="">
        <meta property="og:image" content="<?php bloginfo('template_url')?>/assets/img/logotipo.png">
        <meta property="og:image:type" content="image/jpeg" />
        <meta name="twitter:title" content="Vila Rica">
        <meta name="twitter:description" content="">
        <meta name="twitter:image" content="<?php bloginfo('template_url')?>/assets/img/logotipo.png">
        <meta name="msapplication-TileImage" content="<?php bloginfo('template_url')?>/assets/img/logotipo.png">
        <link rel="shortcut icon" href="<?php bloginfo('template_url')?>/assets/img/favicon/favicon.ico">
        <link rel="apple-touch-icon" href="<?php bloginfo('template_url')?>/assets/img/favicon/icon.png">
        <link rel="author" type="text/plain" href="humans.txt" />
        <link rel="stylesheet" href="<?php bloginfo('template_url')?>/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url')?>/assets/css/swiper.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url')?>/assets/css/fancybox.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url')?>/assets/css/normalize.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url')?>/assets/css/style-custom-scss.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url')?>/assets/css/style.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url')?>/assets/css/style-midia.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
        <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
        <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
        <header id="topo">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <a href="index.php" class="navbar-brand" title="Vila Rica">
                            <img src="<?php bloginfo('template_url')?>/assets/img/midia/img-logo-vilarica.png" alt="Vila Rica">
                        </a>
                    </div>
                </div>
                <nav class="navbar navbar-expand-md navbar-light">
                 <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                 </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="row">
                            <div class="col col-md-10">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a href="<?php bloginfo('url') ?>" class="nav-link" title="Home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php bloginfo('url') ?>/a-fazenda" class="nav-link" title="A Fazenda">A Fazenda</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="eventos" class="nav-link" title="Eventos">Eventos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php bloginfo('url') ?>/blog" class="nav-link page-scroll" title="Blog">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php bloginfo('url') ?>/contato" class="nav-link page-scroll" title="Contato">Contato</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-2">
                                <div class="btn-social">
                                    <a href="" target="_blank" title="Instagram">
                                            <span class="fa-stack fa-1x">
                                                <i class="fas fa-stack-2x"></i>
                                                <i class="fab fa-instagram fa-stack-2x"></i>
                                            </span>
                                        </a>    
                                    
                                    <a href="" target="_blank" title="Facebook">
                                        <span class="fa-stack fa-1x">
                                            <i class="fas fa-stack-2x"></i>
                                            <i class="fab fa-facebook-f fa-stack-2x "></i>
                                        </span>
                                    </a>
                                   
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

        </header><!-- /topo //-->

        <div id="conteudo" role="main">