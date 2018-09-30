# LivrosYan

Como abrir o projeto corretamente (no windows):
  - Instale o Git Bash (gitforwindows.org);
  - Ecolha uma pasta que você gostaria de ter o projeto, abra um terminal nela;
  - Clone o repositório com "git clone https://github.com/YanGameiro/Mini-CRM-Yan.git";
  - Instale o xampp (www.apachefriends.org);
  - Instale o composer (www.getcomposer.org);
  - Vá com um terminal para a pasta \xampp\htdocs;
  - Execute "composer create-project laravel/laravel=5.7.0 name --prefer-dist";
  - Vá com um terminal na pasta do projeto clonado;
  - Execute "composer install";
  - Abra o painel de controle do XAMPP e clique no Start do Apache e do MySQL;
  - Crie um novo banco de dados chamado "homestead" (pode ser pelo http://localhost/phpmyadmin);
  - Tenha certeza que você possui um usuário root sem senha (Se você está seguindo os passos, você provavelmente tem!);
  - Execute "php artisan migrate --seed";
  - Execute "php artisan key:generate";
  - Execute "php artisan serve";
  - Abra localhost:8000 no seu navegador;
