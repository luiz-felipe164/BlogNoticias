<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">

        <title>Blog Noticias - Editar</title>

        
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-light bg-light">
              <a class="navbar-brand" href="{{route('publicacao')}}">Blog Noticias</a>
            </nav>

                <div id="formulario_post">
                    <h2>Editar Publicação</h2>
                     <!-- Form com os dodos para atualização -->
                    <form action="{{ route('publicacao.update',$dado->id) }}" method="POST">
                      {{ csrf_field() }}
                      <input type="hidden" name="_method" value="put">
                      <div class="form-group">
                        <div class="col-md-8">
                           <input type="text" class="form-control" name="titulo" placeholder="Digite o titulo da publicação" value="{{isset($dado->titulo) ? $dado->titulo : ''}}">
              
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-md-11">
                           <textarea class="form-control" name="descricao" value="{{isset($dado->descricao) ? $dado->descricao : ''}}" placeholder="Digite o texto da sua publicação" rows="3">{{$dado->descricao}}</textarea>
                        </div>
                      </div>
                      <button class="btn btn-success" id="btn_atualizar">Atualizar</button>
                    </form>
                </div><!--Fomulario-->

                
        </div><!--/container -->

    </body>

    <script href="{{ asset('js/script.js') }}"type="text/javascript"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</html>
