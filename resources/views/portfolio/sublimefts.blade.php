@extends('master')

@section('og')
   <meta property="og:title" content="Sua marca é sua presença web">
    <meta property="og:description" content="SublimeFts - Serviço desenvolvido pela Modeon Devhouse de criação de marca, site e impressos.">
    <meta property="og:url" content="http://www.modeon.co/portfolio/sublimefts">
    <meta property="og:site_name" content="Modeon Devhouse">
    <meta property='og:image' content="http://www.modeon.co/img/portfolio_01.jpg">
    <meta property="og:type" content="website">
@endsection

@section('title', 'Modeon Devhouse - SublimeFts')

@section('menu-links')
    <li><a href="/">Início</a></li>
    <li><a href="/#slider">Portfólio</a></li>
    <li><a href="/#address-dark">Endereço</a></li>
@endsection

@section('content')

    <div id="slider">
        <div class="container">
            <div class="row">

                <div class="col-lg-8">
                    <div id="carousel" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="#carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel" data-slide-to="1"></li>
                        <li data-target="#carousel" data-slide-to="2"></li>
                      </ol>

                      <!-- Wrapper for slides -->
                      <div class="carousel-inner" role="listbox">
                        <div class="item active">
                          <img src="/img/portfolio/sublimefts/01.jpg" alt="SublimeFts">
                        </div>
                        <div class="item">
                          <img src="/img/portfolio/sublimefts/02.jpg" alt="SublimeFts">
                        </div>
                        <div class="item">
                          <img src="/img/portfolio/sublimefts/03.jpg" alt="SublimeFts">
                        </div>
                      </div>

                      <!-- Controls -->
                      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <h3>SublimeFts</h3>
                    <p>
                      <a href="http://www.sublimefts.com/" target="_blank"><i class="fa fa-globe" aria-hidden="true"></i> http://www.sublimefts.com/</a>
                    </p>
                    <p>
                        A fotografia é apaixonante. Ter um olhar poético para eternizar os momentos mais sublimes da vida é o que faz toda a diferença a cada clique.
                    </p>
                    <p>
                        Criamos a marca e o site da SublimeFts. Levamos em consideração seu público alvo e leque de serviços. Toda a identidade visual foi pensada e acentuada para a percepção do público diante do posicionamento da empresa.
                    </p>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('footer_id', 'address-dark')