@extends('master')

@section('og')
   <meta property="og:title" content="Sua marca é sua presença web">
    <meta property="og:description" content="Sublimefts - Serviço desenvolvido pela Modeon Devhouse de criação de marca, site e impressos.">
    <meta property="og:url" content="http://www.modeon.co/portfolio/sublimefts">
    <meta property="og:site_name" content="Modeon Devhouse">
    <meta property='og:image' content="http://www.modeon.co/img/portfolio_01.jpg">
    <meta property="og:type" content="website">
@endsection

@section('title', 'Modoen Devhouse - Sublimefts')

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
                          <img src="/img/portfolio/sublimefts/01.jpg" alt="Sublimefts">
                        </div>
                        <div class="item">
                          <img src="/img/portfolio/sublimefts/02.jpg" alt="Sublimefts">
                        </div>
                        <div class="item">
                          <img src="/img/portfolio/sublimefts/03.jpg" alt="Sublimefts">
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
                    <h3>Mussum</h3>
                    <p>
                        Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss deixa as pessoas mais interessantis. Quem num gosta di mé, boa gentis num é. Todo mundo vê os porris que eu tomo, mas ninguém vê os tombis que eu levo! Si num tem leite então bota uma pinga aí cumpadi!
                    </p>
                    <p>
                        Per aumento de cachacis, eu reclamis. Posuere libero varius. Nullam a nisl ut ante blandit hendrerit. Aenean sit amet nisi. Atirei o pau no gatis, per gatis num morreus. Nec orci ornare consequat. Praesent lacinia ultrices consectetur. Sed non ipsum felis.
                    </p>
                    <p>
                        Não sou faixa preta cumpadi, sou preto inteiris, inteiris. Paisis, filhis, espiritis santis. Manduma pindureta quium dia nois paga. Delegadis gente finis, bibendum egestas augue arcu ut est.
                    </p>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('footer_id', 'address-dark')