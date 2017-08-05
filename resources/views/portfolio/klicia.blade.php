@extends('master')

@section('og')
   <meta property="og:title" content="Sua marca é sua presença web">
    <meta property="og:description" content="Klícia Pires - Assessoria e Cerimonial - Serviço de criação de marca, site e impressos desenvolvido pela Modeon Devhouse.">
    <meta property="og:url" content="http://www.modeon.co/portfolio/klicia">
    <meta property="og:site_name" content="Modeon Devhouse">
    <meta property='og:image' content="http://www.modeon.co/img/portfolio_02.jpg">
    <meta property="og:type" content="website">
@endsection

@section('title', 'Modeon Devhouse - Klícia Pires - Assessoria e Cerimonial')

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
                          <img src="/img/portfolio/klicia/01.jpg" alt="Klícia Pires">
                        </div>
                        <div class="item">
                          <img src="/img/portfolio/klicia/02.jpg" alt="Klícia Pires">
                        </div>
                        <div class="item">
                          <img src="/img/portfolio/klicia/03.jpg" alt="Klícia Pires">
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
                    <h3>Klícia Pires - Assessoria e Cerimonial</h3>
                    <p>
                      <a href="http://www.kliciapires.com/" target="_blank"><i class="fa fa-globe" aria-hidden="true"></i> http://www.kliciapires.com/</a>
                    </p>
                    <p>
                        Empreendedora, Engenheira de Produção e romântica assumida, a Klícia pires nos procurou para criarmos sua marca e site.
                    </p>
                    <p>
                        O resultado não poderia ser diferente, pois cumpre o objetivo de comunicar as qualidades de uma profissional competente, caprichosa e detalhista.
                    </p>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('footer_id', 'address-dark')