<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">

</head>

<body>
<div class="container-fluid">

  <!-- HEADER -->
  <header>

<nav class="navbar navbar-fixed-top navbar-default" style="background-color: white;">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php" style="padding-top:10px;">
                <img src="imagens/logo_sense_2.png" alt="logo" width=120px
                >
              </a>
            </div>

            <!-- MENU PRINCIPAL-->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav col-md-6">

                <!-- COSMÉTICOS -->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                  aria-haspopup="true" aria-expanded="false" style="">
                  Cosméticos <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Cuidado facial</a></li>
                    <li><a href="#">Cuidado corporal</a></li>
                    <li><a href="#">Cuidado capilar</a></li>
                    <li><a href="#">Kits</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#"><img src="imagens/cosmetico_menu.jpg" alt="maquiagem" width= 150px>Conheça nossa linha completa de cosméticos!</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#"><strong>NEW! &nbsp &nbsp ASSINE "Sense Sempre Comigo". CLIQUE AQUI!</strong></a></li>
                  </ul>
                </li>

                <!-- PERFUMARIA -->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                  aria-haspopup="true" aria-expanded="false">
                  Perfumaria <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Feminimo</a></li>
                    <li><a href="#">Masculino</a></li>
                    <li><a href="#">Para presente</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#"><img src="imagens/perfumaria_menu.jpg" alt="maquiagem" width= 150px>Conheça nossa linha completa de perfumes!</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#"><strong>NEW! &nbsp &nbsp ASSINE "Sense Sempre Comigo". CLIQUE AQUI!</strong></a></li>
                  </ul>
                </li>
                <!-- MAQUIAGEM -->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                  aria-haspopup="true" aria-expanded="false">
                  Maquiagem <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Rosto</a></li>
                    <li><a href="#">Olhos</a></li>
                    <li><a href="#">Boca</a></li>
                    <li><a href="#">Paletas</a></li>
                    <li><a href="#">Kits</a></li>
                    <li><a href="#">Acessórios</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#"><img src="imagens/maquiagem2_menu.jpg" alt="maquiagem" width= 150px><p>Conheça nossa linha completa de maquiagens!</p></a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#"><strong>NEW! &nbsp &nbsp ASSINE "Sense Sempre Comigo". CLIQUE AQUI!</strong></a></li>
                  </ul>
                </li>
              </ul>


              <!-- lOGIN e CART -->


              <div class="col-md-3 pull-right text-right">
                <?php if(!isset($_SESSION['logado'])){ ?>
                      <div class="bt_login">
                        <a href="login.php">Login</a>
                      </div>
                      <div class="bt_cadastro">
                        <a href="cadastro.php">Cadastro</a>
                      </div>
                      <div class="compras">
                        <a class="carrinho" href="carrinho.html">
                            <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                        </a>
                      </div>
                <?php } ?>

                <?php  if(isset($_SESSION['logado'])){ ?>

                    <div class="logado">
                      <p>Olá, <a href="meuPerfil.php" class="navbar-link"><b><?php echo $_SESSION['nome']; ?></b></a></p>
                      <a href="logout.php" id="sair">Sair</a>

                    </div>

                    <div class="compras">
                      <a class="carrinho" href="carrinho.html">
                        <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                      </a>
                    </div>
                  </div>
                <?php } ?>

            </div><!-- /.navbar-collapse -->


            <!-- BUSCA -->
            <div class="busca col-xs-12">
              <form class="navbar-form navbar-right">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Digite aqui...">
                  <span class=input-group-btn>
                    <button type="submit" class="btn btn-default btn-lg">
                      <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    </button>
                  </span>
                </div>
              </form>
            </div>

        </nav>
      </header>
