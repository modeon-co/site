<!doctype html>

<html lang="{{ app()->getLocale() }}">

    <head>
        <meta charset="utf-8" />
        <meta name="format-detection" content="telephone=no" />
        <meta name="msapplication-tap-highlight" content="no" />
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta name="description" content="Uma empresa que não está na internet não existe. A Modeon Devhouse resolve esse problema! Somos uma empresa de desenvolvimento situada em Petrolina - PE." />

        <meta name="keywords" content="Desenvolvimento, Software, Sistema, Aplicativo, Marca, Logotipo, Marketing, Social, Media, Petrolina, Juazeiro, Vale do São Francisco" />

        <meta name="author" content="https://plus.google.com/u/0/108026992514718319934">

        @section('og')
        <meta property="og:title" content="Sua marca é sua presença web">
        <meta property="og:description" content="Uma empresa que não está na internet não existe. A Modeon Devhouse resolve esse problema! Somos uma empresa de desenvolvimento situada em Petrolina - PE.">
        <meta property="og:url" content="http://www.modeon.co">
        <meta property="og:site_name" content="Modeon Devhouse">
        <meta property='og:image' content="https://media.licdn.com/mpr/mpr/shrink_200_200/AAEAAQAAAAAAAAo8AAAAJDA5ZjEwYzYxLWYzMzYtNGFiZi05YzcwLTUwN2JhYWU0MTk5Mg.png">
        <meta property="og:type" content="website">
        @show

        <link rel="shortcut icon" href="/img/favicon.png">

        <title>@yield('title')</title>

       <!-- Bootstrap Core CSS -->
       <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

       <!-- Custom CSS -->
       <link href="/css/app.min.css" rel="stylesheet">

       <!-- Custom Fonts -->
       <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

       <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <!-- <script src="assets/js/modernizr.custom.js"></script> -->
    </head>

    <body data-spy="scroll" data-target="#nav-tabs">

        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="/img/modeon.svg" alt="Modeon Devhouse">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div id="nav-tabs" class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#about">Sobre</a></li>
                        <li><a href="#services">Serviços</a></li>
                        <li><a href="#portfolio">Portfólio</a></li>
                        <li><a href="#team">Equipe</a></li>
                        <li><a href="#contact">Contato</a></li>
                        <li><a href="#address">Endereço</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        @yield('content')

        <footer id="address">
            <div class="container section">
                <div class="row">
                    <div class="col-lg-6">
                        <div id="mapwrap">
                            <iframe height="400" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.es/maps?t=m&amp;ie=UTF8&amp;ll=-9.390401,-40.507554&amp;q=-9.3904010,-40.507554&amp;z=13&amp;output=embed"></iframe>
                        </div>
                    </div><!--col-lg-8-->
                    <div class="col-lg-6">
                        <h4>ENDEREÇO</h4>
                        <p>
                            Av. Barão do Rio Branco, nº 1310, Ap. B, 1º Andar - Centro, Petrolina-PE.<br>
                            <b>Venha tomar um café conosco!</b>
                        </p>
                        <br>
                        <h4>MAIS INFORMAÇÕES PARA CONTATO</h4>
                        <p>
                            WhatApp: +55 74 9 88464461<br/>
                            Email: <a href="mailto:contato@modeon.co">contato@modeon.co</a>
                        </p>
                        <br>
                        <p>
                            Modeon Devhouse - Empresa de desenvolvimento no Vale do São Francisco.
                        </p>
                    </div>
                </div>
            </div>
            <div class="spacer"></div>
            <div id="social" class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                        <img src="/img/social/linkedin-square.svg" alt="Social">
                        <img src="/img/social/facebook-square.svg" alt="Social">
                        <img src="/img/social/instagram.svg" alt="Social">
                        <img src="/img/social/twitter-square.svg" alt="Social">
                        <img src="/img/social/youtube-square.svg" alt="Social">
                        <img src="/img/social/google-plus-square.svg" alt="Social">
                    </div>
                </div>
            </div>
        </footer>

        <!-- jQuery -->
        <script src="/vendor/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>

        <!-- App js core -->
        <script src="/js/app.min.js"></script>

        <script type="text/javascript">
            // (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            // (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            // m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            // })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            // ga('create', 'UA-92163771-1', 'auto');

            // ga('send', 'pageview');
        </script>

        <script type="application/ld+json">
            {
                "@context": "http://schema.org",
                "@type": "Organization",
                "name": "Modeon",
                "alternateName": "Modeon Devhouse",
                "url": "http://www.modeon.co",
                "sameAs": [
                    "https://www.facebook.com/modeon.co",
                    "https://twitter.com/modeon_co",
                    "https://www.instagram.com/modeon.co/",
                    "https://plus.google.com/u/0/108026992514718319934"
                ],
                "logo": "http://www.modeon.co/img/modeon.png",
                "contactPoint": [{
                    "@type": "ContactPoint",
                    "telephone": "+5574988464461",
                    "contactType": "customer service",
                    "areaServed": "BR",
                    "availableLanguage": "Portuguese"
                }]
            }
        </script>
    </body>

</html>
