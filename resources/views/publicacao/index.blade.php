<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">


        <title>Blog Noticias</title>

        
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-light bg-light">
              <a class="navbar-brand" href="{{route('publicacao')}}">Blog Noticias</a>
            </nav>

                <div id="formulario_post">
                    <h2 style="text-align: center;">Crie aqui sua publicação</h2>
                     <!-- Form de criação da noticia -->
                    <form action="{{route('publicacao.store')}}" method="POST">
                      {{ csrf_field() }}
                      <div class="form-group">
                        <div class="col-md-8">
                           <input type="text" class="form-control" name="titulo" placeholder="Digite o titulo da publicação" required="" value="{{isset($registro->titulo) ? $registro->titulo : ''}}">
              
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-11">
                           <textarea class="form-control" required="" name="descricao" value="{{isset($registro->descricao) ? $registro->descricao : ''}}" placeholder="Digite o texto da sua publicação" rows="3"></textarea>
                        </div>
                      </div>
                      <button class="btn btn-success" id="btn_form">Publicar</button>
                    </form>
                </div><!--Fomulario-->

                <div id="noticias">
                  <!--traz todas as publicações do banco de dados-->
                    @foreach($dados as $dado)
                        <div class="jumbotron">
                          <h1 class="display-4">{{$dado->titulo}}</h1>
                          <p class="lead">{{$dado->descricao}}</p>
                          <p style="text-align: right;">Postado em: {{ $dado->created_at }}</p>
                          <hr class="my-4">
                          <a href="{{route('publicacao.edit',$dado->id)}}" class="btn btn-warning">Editar</a>
                          <a href="{{route('publicacao.destroy',$dado->id)}}" class="btn btn-danger" onclick="return confirm('Confirma Exclusão do Registro?')" id="btn_excluir">Excluir</a>
                        </div>
                    @endforeach
                </div>

        </div><!--/container -->

    </body>

    <script href="{{ asset('js/script.js') }}"type="text/javascript"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</html>
