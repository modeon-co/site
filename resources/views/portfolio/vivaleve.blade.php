@extends('master')

@section('og')
   <meta property="og:title" content="Sua marca é sua presença web">
    <meta property="og:description" content="Viva Leve - Serviço desenvolvido pela Modeon Devhouse de criação de marca.">
    <meta property="og:url" content="http://www.modeon.co/portfolio/vivaleve">
    <meta property="og:site_name" content="Modeon Devhouse">
    <meta property='og:image' content="http://www.modeon.co/img/portfolio_06.jpg">
    <meta property="og:type" content="website">
@endsection

@section('title', 'Modeon Devhouse - Viva Leve')

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
                          <img src="/img/portfolio/vivaleve/01.jpg" alt="Viva Leve">
                        </div>
                        <div class="item">
                          <img src="/img/portfolio/vivaleve/02.jpg" alt="Viva Leve">
                        </div>
                        <div class="item">
                          <img src="/img/portfolio/vivaleve/03.jpg" alt="Viva Leve">
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
                    <h3>Viva Leve</h3>
                    <p>
                      <a href="https://www.instagram.com/vivaleve_karin/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i> https://www.instagram.com/vivaleve_karin/</a>
                    </p>
                    <p>
                        Saúde é vital e está fortemente ligada à alimentação. Karin Joana , ao pensar nisso, decidiu criar uma empresa especializada em alimentação saudável.
                    </p>
                    <p>
                        Fomos responsáveis pelo nome, o logotipo e o posicionamento da marca.
                    </p>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('footer_id', 'address-dark')