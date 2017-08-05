# Site da Modeon Devhouse

> [http://www.modeon.co](http://www.modeon.co)

## Instalação

#### 1. Dependências

Instale todas as dependências necessárias para instalar o site da Modeon Devhouse.

    $ sudo apt-get update && sudo apt-get install curl git php7.0 php7.0-mcrypt yarn
    $ sudo a2enmod rewrite && sudo php5nmod mcrypt && sudo service apache2 restart

#### 2. Baixe o projeto

    $ git clone https://github.com/modeon-co/site.git

#### 3. Instale o composer:

    $ php -r "readfile('https://getcomposer.org/installer');" | php
    $ sudo cp composer.phar /bin/composer

#### 4. Execute o composer na raiz do projeto para instalar as dependências necessárias:

    $ cd site && composer install

#### 5. Execute o yarn e o gulp

    $ yarn && gulp

## Desenvolvendo

Comente a task `default` e descomente a task `dev` no `gulpfile.js`. Ao executar o gulp o projeto irá rodar em uma instância. Isso facilitará o desenvolvimento.

## Contribuindo

Agradecemos caso deseje contribuir com o projeto!
