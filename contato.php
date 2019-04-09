<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative|Lato:100|Quicksand:300" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body>

    <nav class="navbar navbar-light" style="background-color: #efefef;">
        <div class="container">
            <div class="row py-3 px-5">
                <div class="pr-5">
                    <p class="font3 h3"> Julio Carlos</p>
                    <p class="font3 h6 middle"> Advogados </p>
                </div>
                <table>
                    <tbody>
                        <tr>
                            <td class="align-bottom">
                                <a class="negrito h6 px-4" href="/">Home</a> 
                                <a class="negrito h6 px-4" href="/areas.php">Areas de atuacao</a>
                                <a class="negrito h6 px-4" href="/contato.php">Contato</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class=" row pad ">
                    <form class="form-inline my-2 my-lg-0" style="display: inline;">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid my-5">
        <div class="row">
            <div class="col-6">
                <form action="">
                    <h1 class="middle">
                        Mande-nos um email.
                    </h1>
                    <div class="form-row my-3">
                        <div class="col-sm-6">
                            <input type="text" name="nome" id="" class="form-control" placeholder="Nome">  
                        </div>
                        <div class="col-sm-6">
                            <input type="email" name="emailfield" id="email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <textarea name="mensagem" id="" cols="100" rows="10" placeholder="Mensagem"></textarea>
                    <button type="submit" class="btn btn-primary"> enviar </button>
                </form>
            </div>

            <div class="col-6" >
                <h1 class="mx-auto" style="width: 50%;">
                    Formas de contato
                </h1>
                <div class="my-3">
                    <h3 class="row mx-auto" style="width: 50%;">telefones</h3>
                    <h5 class="font2 row mx-auto" style="width: 50%;">
                        <ul>
                            <li>Agencia 1 : (89)98102-3246</li>
                            <li>Agencia 2 : (88)98603-8732</li>
                        </ul>
                    </h5>
                </div>
                <div class="my-3">
                    <h3 class="row mx-auto" style="width: 50%;">localizacoes</h3>
                    <h5 class="font2 row">
                        <ul class="init mx-auto" style="width: 50%;">
                            <li>Endereco: Rua Dom Lino, Russas-CE               </li> 
                            <li>Endereco: Rua Conego Augustino, Russas-Ce       </li>
                            <li>Endereco: Rua Marcos finos, Francisco Santos-PI </li>
                            <li>Endereco: Rua carlos magalhoes, Sao Paulo-SP    </li>
                        </ul>
        
                    </h5>
                </div>
                <div class="my-3">
                    <h3 class="row mx-auto" style="width: 50%;">celular pessoal</h3>
                    <h5 class="font2 row">
                        <ul class="init mx-auto" style="width: 50%;">
                            <li>Joao carlos: (89)98543-3421</li>
                            <li>Sergio vinicius: (89)893243-1248</li>
                        </ul>
                    </h5>
                </div>
            </div>
        </div>
        
    
    </div>

    <div class="container-fluid">
        <div class="row " style="background-color: #efefef;" >
            <div class="col col-12">
                <h1 class="font2 pt-4 display-2 col-6">Julio Carlos advogados</h1>
                <div class="fa-pull-right">
                    <i class=" icons fab fa-facebook-square"></i>
                    <i class=" icons fab fa-whatsapp-square"></i>
                    <i class=" icons fas fa-envelope-square"></i>                
                </div>
            </div>  
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>