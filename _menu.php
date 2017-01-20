<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Bazar AliBaba</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav ">
                   
                    <li>
                        <a href="_RechProd.php"  > Recherche Produit</a>
                    </li>
                                    
                    <li>            
                       
                             <a href="#" data-toggle="dropdown" onclick="sousMenu()">administration</a>
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                              <li><a href="_adminCat.php">Catégories</a></li>
                              <li><a href="#">Produits</a></li>
                              <li><a href="#">Clients</a></li>
                            </ul>                              
                         
                    </li>
                     <li>
                        <a href="#">A propos</a>
                    </li>
                </ul>
                
                <?php
                if (isset($_SESSION["util_connecte"]) && ($_SESSION["util_connecte"] != NULL)) { ?>
                    
                    <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a> <span class="glyphicon glyphicon-user"></span> Bienvenue <?php echo ($_SESSION["util_connecte"]) ?></a>
                    </li>
                    <li>
                        <a href="deconnexion.php"> <span class="glyphicon glyphicon-user"></span> Déconnexion </a>
                    </li>
                    
                </ul>                                   
                <?php } else { ?>
                  <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="inscription.html"  ><span class="glyphicon glyphicon-user"></span> S'inscrire</a>
                    </li>
                    <li>
                        <a href="#" onclick="document.getElementById('id01').style.display='block'"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                    </li>
                </ul> 
                <?php 
                }                                          
                ?>
                
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>