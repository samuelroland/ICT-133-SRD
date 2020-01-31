<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?=$title;?></title>

  <!-- Bootstrap -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/animate.css">
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/jquery.bxslider.css">
  <link rel="stylesheet" type="text/css" href="../css/normalize.css" />
  <link rel="stylesheet" type="text/css" href="../css/demo.css" />
  <link rel="stylesheet" type="text/css" href="../css/set1.css" />
  <link href="../css/overwrite.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: eNno
    Theme URL: https://bootstrapmade.com/enno-free-simple-bootstrap-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
        <a class="navbar-brand" href="index.php"><span>SchoolBook2Sell</span></a>
      </div>
      <div class="navbar-collapse collapse">
        <div class="menu">
          <ul class="nav nav-tabs" role="tablist">
            <?php if ((@$_GET['action']=="home") || (!isset($_GET['action']))) : ?>
                <li role="presentation" class="active"><a href="index.php?action=home">Home</a></li>
            <?php else : ?>
                <li role="presentation"><a href="index.php?action=home">Home</a></li>
            <?php endif; ?>

            <?php if (@$_GET['action']=="login") : ?>
                <li role="presentation" class="active">
                <?php if (isset($_SESSION['login'])) : ?>
                    <a href="index.php?action=logout"><?=$_SESSION['login']; ?> - Logout</a></li>
                <?php else: ?>
                    <a href="index.php?action=login">Login</a></li>
                <?php endif;?>
            <?php else : ?>
              <li role="presentation">
                <?php if (isset($_SESSION['login'])) : ?>
                    <a href="index.php?action=logout"><?=$_SESSION['login']; ?> - Logout</a></li>
                <?php else: ?>
                    <a href="index.php?action=login">Login</a></li>
                <?php endif;?>
            <?php endif; ?>

            <?php if (@$_GET['action']=="books") : ?>
                <li role="presentation" class="active"><a href="index.php?action=books">My Books</a></li>
            <?php else : ?>
                <li role="presentation"><a href="index.php?action=books">My Books</a></li>
            <?php endif;?>
            <li role="presentation"><a href="contact.html">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <!-- contents -->

  <?=$content; ?>

  <!-- end contents -->

  <footer>
    <div class="inner-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4 f-about">
            <a href="index.php"><h1>SchoolBook2Sell</h1></a>
            <p>Le site idéal pour vendre tous vos vieux livres d'école que vous n'utilisez plus et si vous poursuivez vos études vous pouvez trouver des livres d'occasion à bon prix</p>
          </div>
          <div class="col-md-4 l-posts">
            <h3 class="widgetheading">Dernières nouvelles</h3>
            <ul>
              <li><a href="#">2020/01 : 2646 livres vendus en 2019</a></li>
              <li><a href="#">2019/11 : Possibilité de payer par Twint</a></li>
              <li><a href="#">2019/09 :Nouveau design</a></li>
              <li><a href="#">2019/02 :Ouverture du site</a></li>
            </ul>
          </div>
          <div class="col-md-4 f-contact">
            <h3 class="widgetheading">Nous contacter</h3>
            <a href="#">,
              <p><i class="fa fa-envelope"></i> schoolbook2sell@gmail.com</p>
            </a>
            <p><i class="fa fa-phone"></i> +41 21 659 45 67</p>
            <p><i class="fa fa-home"></i> SchoolBook2Sell | Rue de la gare 14<br> 1002 Lausanne | Suisse</p>
          </div>
        </div>
      </div>
    </div>


    <div class="last-div">
      <div class="container">
        <div class="row">
          <div class="copyright">
            &copy; eNno Theme. All Rights Reserved
            <div class="credits">
              <!--
                All the links in the footer should remain intact. 
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eNno
              -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <ul class="social-network">
            <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-1x"></i></a></li>
            <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter fa-1x"></i></a></li>
            <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin fa-1x"></i></a></li>
            <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest fa-1x"></i></a></li>
            <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus fa-1x"></i></a></li>
          </ul>
        </div>
      </div>

      <a href="" class="scrollup"><i class="fa fa-chevron-up"></i></a>


    </div>
  </footer>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="../js/jquery-2.1.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/wow.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/jquery.isotope.min.js"></script>
  <script src="../js/jquery.bxslider.min.js"></script>
  <script type="text/javascript" src="../js/fliplightbox.min.js"></script>
  <script src="../js/functions.js"></script>
  <script type="text/javascript">
    $('.portfolio').flipLightBox()
  </script>

</body>

</html>
