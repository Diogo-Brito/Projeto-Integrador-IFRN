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
        <title>Cardápio IFRN - Tela de login</title>
        </head>
    <body>

        <div id="containerMain" class="containerMain justify-content-center align-itens-center mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 bg-success ">
                        <h1 class="text-center text-danger display-4 pt-5 pb-5">Cardápio IFRN</h1>
                        <div class="row">
                            <div class="m-auto">
                                <img src="imgs/icon.png" class="">
                            </div>
                        </div>
                        <form action="homeAlunos.php" method="POST">
                        <div class="col-md-12">
                            <p for="matricula" class="text-dark text-center  pt-3 pb-3">Matrícula:</p>
                            <input type="text" class="form-control" required placeholder="Matrícula">
                            <p for="senha" class="text-dark text-center">Senha:</p>
                            <input type="password" class="form-control  pt-3 pb-3 mb-3" required placeholder="Senha">
                        </div>
                        <div class="text-center">
                            <input type="submit" class="btn btn-primary btn-lg mt-3 mb-3" value="Entrar">
                            <input type="reset" class="btn btn-danger btn-lg mt-3 mb-3" value="Limpar">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <a href="indexServidor.php"><button>Servidor</button></a>
        


    </body>
</html>