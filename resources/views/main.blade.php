@extends('master')

@section('og')
   @parent
@endsection

@section('title', 'Modeon Devhouse')

@section('menu-links')
    @parent
@endsection

@section('content')

    <div id="headerwrap">
        <div class="container">
            <div class="row">
                <h1>Seu empreendimento conectado!</h1>
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="spacer"></div>
                    <hr>
                    <div class="spacer"></div>
                    <h2>Esteja a um clique de seu cliente</h2>
                    <div class="spacer"></div>
                        <button type="button" class="btn btn-primary btn-lg">Entre em contato</button>
                    <div class="spacer"></div>
                    <a href="#about"><i class="fa fa-angle-down"></i></a>
                    <div class="spacer"></div>
                </div>
            </div>
        </div>
    </div>

    <div id="about">
        <div class="container">
            <div class="row">
                <h1>Sobre nós</h1>
                <div class="col-lg-8 col-lg-offset-2">
                    <p>
                        Somos uma empresa de desenvolvimento de software, gestão de marca e <i>social media</i>. Acreditamos que uma empresa que não se encontra na internet, na verdade não existe.
                    </p>
                    <hr>
                    <p>
                        Nos importamos com a sua <b>presença</b> na internet.
                    </p>
                    <p>
                        Gostamos daquilo que é <b>comunicável</b>.
                    </p>
                    <p>
                        Acreditamos que a <b>tecnologia</b> é uma forte aliada.
                    </p>
                    <p>
                        Sabemos que o <b>relacionamento</b> é extremamente importante.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div id="services">
        <div class="container">
            <div class="row">
                <h1>Serviços</h1>
                <div>
                    <div class="col-sm-4">
                        <img src="/img/services_01.jpg" alt="Services">
                        <h4>Gestão de Marca</h4>
                        <p>Criamos sua identidade visual, que inclui nome, slogan, logotipo, cartões de visita, entre outros materiais para escritório.</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="/img/services_02.jpg" alt="Services">
                        <h4>Desenvolvimento</h4>
                        <p>Desenvolvemos sites, softwares e aplicativos intuitivos para que os seus clientes possam interagir com o seu negócio.</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="/img/services_03.jpg" alt="Services">
                        <h4>Marketing de Conteúdo</h4>
                        <p>Criamos estratégias de publicações, peças publicitárias e ainda acompanhamos os resultados para garantir sua presença na web.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="portfolio">
        <div class="container">
            <h1>Portfólio</h1>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="/portfolio/feiradenoivas">
                        <img src="/img/portfolio_06.jpg" alt="Services">
                        <div class="overlay"></div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="/portfolio/klicia">
                        <img src="/img/portfolio_02.jpg" alt="Services">
                        <div class="overlay"></div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="/portfolio/comodoro">
                        <img src="/img/portfolio_03.jpg" alt="Services">
                        <div class="overlay"></div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="/portfolio/sublimefts">
                        <img src="/img/portfolio_01.jpg" alt="Services">
                        <div class="overlay"></div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="/portfolio/barbizan">
                        <img src="/img/portfolio_04.jpg" alt="Services">
                        <div class="overlay"></div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="/portfolio/vivaleve">
                        <img src="/img/portfolio_05.jpg" alt="Services">
                        <div class="overlay"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="team">
        <div class="container">
            <div class="row">
                <h1>Equipe</h1>
                <div>
                    <div class="col-sm-4 col-sm-offset-2">
                        <img src="/img/profile_caio_ladislau.jpg" alt="Services">
                        <h4>Caio Ladislau</h4>
                        <p>Empreendedor, desenvolvedor, artesão de softwares e administrador da Modeon.</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="/img/profile_anderson_oliveira.jpg" alt="Services">
                        <h4>Anderson Oliveira</h4>
                        <p>Cinéfilo, chocólatra e designer nas horas vagas. <br>Ahh, também sou sócio da Modeon!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="contact">
        <div class="container">
            <div class="row">
                <h1>Contato</h1>
                <div>
                  <form id="form_contact">
                    <div class="form-group col-xs-12 col-lg-6 col-lg-offset-3">
                      <label for="nome">Nome</label>
                      <input type="text" class="form-control" id="nome" name="name" placeholder="Nome">
                    </div>
                    <div class="form-group col-xs-12 col-lg-6 col-lg-offset-3">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group col-xs-12 col-lg-3 col-lg-offset-3">
                      <label for="phone">Telefone/WhatsApp</label>
                      <input type="tel" class="form-control" id="phone" name="phone" placeholder="Telefone">
                    </div>
                    <div class="form-group col-xs-12 col-lg-3">
                      <label for="demand">Solicitacao</label>
                      <select class="form-control" id="demand" name="demand">
                        <option value="Consultoria" selected>Consultoria</option>
                        <option value="Orçamento">Orçamento</option>
                        <option value="Sugestão">Sugestão</option>
                        <option value="Outro">Outro</option>
                      </select>
                    </div>
                    <div class="form-group col-xs-12 col-lg-6 col-lg-offset-3">
                      <label for="observation">Observação</label>
                      <textarea class="form-control" id="observation" name="observation" rows="2"></textarea>
                    </div>
                    <div class="col-xs-12 col-lg-6 col-lg-offset-3">
                      <button type="submit" class="btn btn-green btn-lg">Enviar</button>
                      <b class="waiting-text">Enviando contato</b>
                      <b class="success-text">Contato realizado com sucesso!</b>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('footer_id', 'address')