<!doctype html>

<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="copyright" content="© 2021" />

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/css/style.css">
        <link rel="icon" href="imgs/icon.png">
        <title>Cardápio IFRN - Home alunos</title>
        </head>
    <body>

        <div id="containerMain" class="">
            <div id="navTop" class="bg-success expand-sm">
                <div class="container">
                    <div class="row">
                        <div id="logo" class="">
                            <a href="#" class="navbar-brand">
                                <img class="mt-3" src="imgs/icon.png ">
                            </a>
                        </div>
                        <div id="boxInput" class="mt-5 ml-5">
                            <input type="text" class="form-control" placeholder="Pesquisar">
                        </div>
                        <input type="submit" class="btn btn-primary mt-5" value="Pesquisar">
                        <div id="boxUser" class=" ml-auto">
                            <p class="text-center text-dark m-auto">Janaise</p>
                            <img src="imgs/pessoa.jpeg" class="img-fluid m-auto">
                        </div> 
                    </div>
                </div>
            </div>
            <div id="mainBody" class="mainBody col-12">
                <div class="row">
                    <div id="navleft" class="navLeft col-sm-4 col-md-4">
                        <nav class="navbar-nav expand-sm">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link texto_grande" href="homeAlunos.html">
                                        Home
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link texto_grande" href="cardapio.html"
                                    >Cardápio
                                  </a>
                                  </li>
                                <li class="nav-item">
                                    <a class="nav-link texto_grande" href="#">
                                        Achados e perdidos
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link texto_grande" href="#">
                                        Notícias
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link texto_grande" href="contato.html">
                                          Contato
                                      </a>
                                    </li>
                              </ul>
                        </nav>
                    </div>
                    <div id="homeServ" class="home col-sm-8 col-md-8">
                        <div class="container">
                            <div class="row">
                                <div id="top">
                                    <h2 class="display-1 text-center text-dark">Contato</h2>
                                    <h2 class="display-3 text-left text-danger">Diz aí!</h2>
                                    <form action="pvt/controller.php" method="POST">
                                    <p class="text-left text-danger display-5">Nome</p>
                                    <input type="text" placeholder="Nome" required class="form-control">
                                    <p class="text-left text-danger display-5">Assunto</p>
                                    <input type="text" placeholder="Assunto" required class="form-control">
                                    <p class="text-left text-danger display-5" >Email</p>
                                    <input type="email" placeholder="Email" required class="form-control">
                                    <p class="text-left text-danger display-5">Mensagem</p>
                                    <textarea placeholder="Texto" class="form-control"></textarea>
                                    
                                     </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <footer id="footer" class="footer bg-success">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 col-lg-4">
                            <ul class="">
                                <li>
                                    <a href="#">
                                        <i class="fab fa-facebook text-white"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-twitter text-white"></i>                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-instagram text-white"></i>                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-4 col-lg-4 text-center">
                            <h4 class="text-center text-danger">Todos os direitos reservados!</h4>
                        </div>
                        <div class="col-sm-4 col-lg-4">
                            <h6 class="text-center text-danger">Criado por:</h6>
                            <ul>
                                <li>
                                    <a href="#" class="text-white">X</a>
                                </li>
                                <li>
                                    <a href="#" class="text-white">Y</a>
                                </li>
                                <li>
                                    <a href="#" class="text-white">Z</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>




        </div>
        


    </body>
</html>