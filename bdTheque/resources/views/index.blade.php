<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Page d'accueil</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">   
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">logo</a>
            <a class="navbar-brand" href="#">Ma collection</a>
            <a class="navbar-brand" href="#">Ma liste de souhaits</a>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Chercher une bd" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
            </form>
        </nav> 
        <h1 class="textCentered">Nouveautés</h1>
        <table id="newComics"></table>


        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                            <div class="col-md-4" id="comic_name"></div>
                            <div class="col-md-4 ml-auto">.col-md-4 .ml-auto</div>
                            </div>
                            <div class="row">
                            <div class="col-md-3 ml-auto">.col-md-3 .ml-auto</div>
                            <div class="col-md-2 ml-auto">.col-md-2 .ml-auto</div>
                            </div>
                            <div class="row">
                            <div class="col-md-6 ml-auto">.col-md-6 .ml-auto</div>
                            </div>
                            <div class="row">
                            <div class="col-sm-9">
                                Level 1: .col-sm-9
                                <div class="row">
                                <div class="col-8 col-sm-6">
                                    Level 2: .col-8 .col-sm-6
                                </div>
                                <div class="col-4 col-sm-6">
                                    Level 2: .col-4 .col-sm-6
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    !</div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>        
        <script type="text/javascript" src="js/function.js"></script>
        <script type="text/javascript" src="js/app.js"></script>
    </body>
</html>