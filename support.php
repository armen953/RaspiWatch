<?php
session_start();
require 'php/connexion.php';
$bdd = new connexion();

if (isset($_GET['id']) AND $_GET['id'] > 0)  // verfier si la variable id existe si elle exite alros cela affiche la page
{  // ouverture de if numero 1
    $getId = intval($_GET['id']);   // transformer le id en int
    $reqUser = $bdd->getConnexion()->prepare('SELECT * FROM membre WHERE id = ?');
    $reqUser->execute(array($_GET['id']));
    $userInfo = $reqUser->fetch();
?>


    <!DOCTYPE html>
    <html lang="fr">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="images/favicon.ico" />
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Contrôler les différentes caméras</title>

        <!-- Bootstrap Core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="assets/css/sb-admin.css" rel="stylesheet">
        <!-- Morris Charts CSS -->
        <link href="assets/css/plugins/morris.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
        <!-- File JavaScript contenant function pour controler motion -->
        <script language="javascript" type="text/javascript" src="assets/js/popupConfigMotion.js"></script>
        <!-- CSS button -->
        <link href="assets/css/buttonOnOffMotion.css" rel="stylesheet" type="text/css">

    </head>

    <body>


        <?php  // affiche du contenu propre a l'utlisateur (si l'ulisateur connecté veux visiter le profil d'un autre cela va afficher ce qu'il y a dans le else
		if (isset($_SESSION['id']) AND $userInfo['id'] == $_SESSION['id'])    // on verfie si l'id du user est le meme que celui de la session
		{     // ouverture de if numero 2
?>



            <div id="wrapper">

                <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

                    <div class="navbar-header">

                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <a class="navbar-brand" href="#">RaspiWatch</a>
                    </div>

                    <ul class="nav navbar-right top-nav">
                        <!-- le menu profil  -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $userInfo['pseudo'] ?> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <?php echo "<a href="."profile.php?id=".$userInfo['id']?> "><i class="glyphicon glyphicon-user"></i> Profile</a>
                                </li>
                                <li>
                                    <?php echo "<a href="."support.php?id=".$userInfo['id']?> "><i class="glyphicon glyphicon-question-sign"></i> Support</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="php/deconnexion.php"><i class="glyphicon glyphicon-off"></i> Déconnexion</a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <!-- Menu a gauche  -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav side-nav">
                            <li>
                                <?php echo "<a href="."dashboard.php?id=".$userInfo['id']?> "><i class="glyphicon glyphicon-facetime-video"></i> Caméra en Direct </a>
                            </li>
                            <li class="active">
                                <?php echo "<a href="."controlMotion.php?id=".$userInfo['id']?> "><i class="fa fa-fw fa-wrench"></i> Configuration des Caméras </a>
                            </li>
                            <li>
                                <?php echo "<a href="."images.php?id=".$userInfo['id']?> "><i class="fa fa-fw fa-picture-o"></i> Visualisation des Images </a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <div id="page-wrapper">

                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <div class="row">
                            <div class="col-lg-12">
                                <h1 class="page-header">
                            Support <small>Contactez-nous</small>
                        </h1>

                            </div>

                            <form class="form-horizontal" role="form" method="post" action="support.php">
                                <div class="form-group">
                                    <label for="name" class="col-sm-2 control-label">Nom</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Nom Prénom" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="message" class="col-sm-2 control-label">Message</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" rows="4" name="message"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-10 col-sm-offset-2">
                                        <input id="submit" name="submit" type="submit" value="Envoyé" class="btn btn-primary">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-10 col-sm-offset-2">
                                        <! Will be used to display an alert to the user>
                                    </div>
                                </div>
                            </form>



                            <!-- jQuery -->
                            <script src="assets/js/jquery.js"></script>

                            <!-- Bootstrap Core JavaScript -->
                            <script src="assets/js/bootstrap.min.js"></script>

                            <!-- Morris Charts JavaScript -->
                            <script src="assets/js/plugins/morris/raphael.min.js"></script>
                            <script src="assets/js/plugins/morris/morris.min.js"></script>
                            <script src="assets/js/plugins/morris/morris-data.js"></script>


                            <?php
			}   // fermeture  de if numero 2
	        else{
	            echo '<img class="pasdispo" src="images/pagePasDispo.png" alt="" > ';
	        }
	        ?>
    </body>

    </html>

    <?php
 }    // fermeture  de if numero 1

	 ?>