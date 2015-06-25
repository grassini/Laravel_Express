@extends('template')

@section('title')
    Bolg | LaravelExpress
@stop

@section('content')

    <div class="container">

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                <!-- Blog Post -->

                <!-- Title -->
                <h1>{{ $posts['titulo'] }}</h1>
                <!-- Author -->
                <p class="lead">
                    by <a href="#">{{ $posts['autor'] }}</a>
                </p>

                <hr>

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> Postado em {{ date("d/m/Y h:i:s A", strtotime($posts['data'])) }}

                </p>
                <hr>

                <!-- Preview Image -->
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">

                <hr>

                <!-- Post Content -->
                <p class="lead">{{ $posts['conteudo'] }}</p>

                <p>{{ $posts['conteudo'] }}</p>

                <p>{{ $posts['conteudo'] }}</p>


                <hr>

                <!-- Blog Comments -->

                <!-- Comments Form -->
                <div class="well">
                    <h4>Comentário:</h4>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Comentar</button>
                    </form>
                </div>

                <hr>

                <!-- Posted Comments -->

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">{{ $comentarios['autor'] }}
                            <small>{{ date("d/m/Y h:i:s A", strtotime($comentarios['data'])) }}</small>
                        </h4>
                        {{ $comentarios['conteudo'] }}
                    </div>
                </div>

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">{{ $comentarios['autor'] }}
                            <small>{{ date("d/m/Y h:i:s A", strtotime($comentarios['data'])) }}</small>
                        </h4>
                        {{ $comentarios['conteudo'] }}
                        <!-- Nested Comment -->
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="http://placehold.it/64x64" alt="">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">{{ $posts['autor'] }}
                                    <small>{{ date("d/m/Y h:i:s A", strtotime($posts['data'])) }}</small>
                                </h4>
                                {{ $posts['conteudo'] }}
                            </div>
                        </div>
                        <!-- End Nested Comment -->
                    </div>
                </div>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Pesquisar</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            @foreach($categories as $category)
                                <ul class="list-unstyled">
                                    <li><a href="#">{{ $category }}</a></li>
                                </ul>
                            @endforeach
                        </div>
                    </div>
                    <!-- /.row -->
                </div>


            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2015</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>

@stop
