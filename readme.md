<h2>Blog Noticias</h2>

<h3>Explicação de como testar a aplicação.</h3>

1. Baixe o Repositório com os arquivos do projeto, depois a pasta do projeto pelo terminal, quando estiver na raiz do projeto digite o seguinte comando para iniciar a aplicação:

<h4>php artisan serve</h4>

2. Quando a aplicação iniciar, minimize o terminal e abra o Xampp(se não tiver instale) e rode o Mysql na porta padrão: 3306. Abra o mysql workbench e crie um banco de dados chamando blog.

3. Abra outro terminal e acesse a pasta raiz do projeto Blog, depois digite o comando:

<h4>php artisan migrate</h4>
<strong>OBS: O comando acima migra uma tabela para o banco de dados automaticamente, pois essa migration ja foi criada.</strong>

4.abra a aplicação em um browser de internet por meio do endereço que está no terminal que roda a aplicação e crie sua primeira publicação!


<h2>Funcionalidades da Aplicação</h2>
<ul>
	<li>Criar publicações com titulo e descrição</li>
	<li>Editar publicação</li>
	<li>Excluir publicação</li>
	<li>Ver todas as publicações feitas por ordem de criação</li>
</ul>

<h3>Tecnologias utilizadas</h3>
<ul>
	<li>Linguagem de Programação PHP</li>
	<li>CSS</li>
	<li>HTML5</li>
	<li>Framework Laravel 5.7</li>
	<li>Framework Bootstrap 4</li>
	<li>JavaScript</li>
	<li>Banco de dados MySql</li>
	<li>Padrão MVC</li>
</ul>

