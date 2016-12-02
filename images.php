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

    <title>Dashboard</title>

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
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="php/deconnexion.php"><i class="fa fa-fw fa-power-off"></i> Déconnexion</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- Menu a gauche  -->
             <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <?php echo "<a href="."dashboard.php?id=".$userInfo['id']?> "><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <?php echo "<a href="."controlMotion.php?id=".$userInfo['id']?> "><i class="fa fa-fw fa-wrench"></i> Config Motion</a>
                    </li>
                    <li class="active">
                        <?php echo "<a href="."images.php?id=".$userInfo['id']?> "><i class="fa fa-fw fa-picture-o"></i> Images</a>
                    </li>
                </ul>
            </div>
		</nav>
		
		<div id="page-wrapper">    <!--   le bloc blanc   -->
		
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Images <small>Images prisent par la camera</small>
                        </h1>
						<ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>   <?php echo "<a href="."dashboard.php?id=".$userInfo['id']?> ">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-picture-o"></i> Config Motion
                            </li>
                        </ol>
                    </div>
                </div>
				
				<!--   CONTENU DE LA PAGE   -->
				
				<div class="page-header">
                    <h1>Image</h1>
                </div>
                <img class="img-thumbnail"  src="http://placehold.it/400x400" alt="...">
				<img class="img-thumbnail"  src="http://placehold.it/400x400" alt="...">
				<img class="img-thumbnail"  src="images/pic05.jpg"            alt="..." >
				<img class="img-rounded"    src="images/pic05.jpg"            alt="..." >
				<img class="img-circle"     src="images/pic05.jpg"            alt="...">
				<img class="img-responsive" src="images/pic05.jpg"            alt="...">
				
				
			</div>
		</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
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
		
		