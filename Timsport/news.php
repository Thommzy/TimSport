<?php  
  include_once('includes/connection.php');
  include_once('includes/article.php');

  $article = new Article;
  $articles = $article->fetch_all();



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Timsport|News</title>
	<meta name="description" content="Timsport ">
	<link rel="stylesheet" type="text/css" href="css/news.css">
	<link rel="stylesheet" href="css/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
  	<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.css">
    <link href="css/navbar-fixed-side.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/font/font.css">
    <link rel="shortcut icon" href="images/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="images/favicon/apple-touch-icon.png">
    
    <!-- All CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="css/plugin.css">
    
    <!-- Main CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
</head>
<body>

<!-- Preloader Start -->
     <div class="preloader">
     <div class="rounder"></div>
      </div>
      <!-- Preloader End -->

		<!-- Navbar -->
<nav class="navbar">
			<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="Timsport.html" class="navbar-brand">FANSPORT</a>
		</div>

		<div class="collapse navbar-collapse" id="mainNavbar" >
			<ul class="nav navbar-nav">
				<li><a href="Timsport.html">Home</a></li>
				<li class="active"><a href="news.html">News</a></li>
				<li><a href="predictions.html">Predictions</a></li>
				<li><a href="transfer.html">Transfer</a></li>
			</ul>

				<a href="#"><i class="fa fa-twitter  fa-pull-right " style="color: #1DA1F2; font-size: 30px; " aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-facebook fa-pull-right" style="color: #3B5998; font-size: 30px; " aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-instagram  fa-pull-right" style="color: #F28F4C; font-size: 30px; "  aria-hidden="true"></i></a>
		</div>

</nav> <!-- Navbar Ends -->

<div class="container-fluid">

    <!-- Left Column -->
    <div class="col-sm-3">

      <!-- Text Panel -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <h1 class="panel-title"><span class="glyphicon glyphicon-ok"></span>Latest</h1>
        </div>

        <div class="panel-body">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p><button class="btn btn-default">Engage</button></p>
        </div>
      </div>

      <!-- Text Panel -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">
            <span class="glyphicon glyphicon-bullhorn"></span> 
            Talks
          </h3>
        </div>
        <div class="panel-body">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <div class="btn-group" role="group">
            <button type="button" class="btn btn-default">Resource</button>
            <button type="button" class="btn btn-default">Envision</button>
            <button type="button" class="btn btn-default">Niche</button>
          </div>
        </div>
      </div>  
        
    </div><!--/Left Column-->
  <ol>
    <?php foreach ($articles as $article) { ?>
    <li>
      <a href="article.php?id=<?php echo $article['article_id'];?>">
        <?php echo $article['article_title']; ?>
      </a>
      -<small>
        posted <?php echo date(' l <b> ,</b> jS F Y', $article['article_timestamp']) ?>
      </small>
    </li>
    <?php } ?>
  </ol>
  
    <!-- Center Column -->
    <div class="col-sm-6">
    
      <!-- Alert -->
      <!-- <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Synergize:</strong> Seamlessly visualize quality intellectual capital!
      </div> -->    
    
      <!-- Articles -->
      <div class="row">
        <article class="col-xs-12">
          <?php foreach ($articles as $article) { ?>
          <h2>
            <a href="article.php?id=<?php echo $article['article_id'];?>">
              <?php echo $article['article_title'];?>
            </a>
          </h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p><button class="btn btn-default">-<small>
        posted <?php echo date(' l <b> ,</b> jS F Y', $article['article_timestamp']) ?>
      </small></button></p>
      <?php } ?>
          <p class="pull-right"><span class="label label-default">keyword</span> <span class="label label-default">tag</span> <span class="label label-default">post</span></p>
          <ul class="list-inline">
            <li><a href="#">Today</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-comment"></span> 2 Comments</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-share"></span> 8 Shares</a></li>
          </ul>
        </article>
      </div>
      <hr>
      <div class="row">
        <article class="col-xs-12">
          <h2>Germany Bundesliga</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p><button class="btn btn-default">Read More</button></p>
          <p class="pull-right"><span class="label label-default">keyword</span> <span class="label label-default">tag</span> <span class="label label-default">post</span></p>
          <ul class="list-inline">
            <li><a href="#">Yesterday</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-comment"></span> 21 Comments</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-share"></span> 36 Shares</a></li>
          </ul>
        </article>
      </div>
      <hr>      
      <div class="row">
        <article class="col-xs-12">
          <h2>Spanish La liga</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p><button class="btn btn-default">Read More</button></p>
          <p class="pull-right"><span class="label label-default">keyword</span> <span class="label label-default">tag</span> <span class="label label-default">post</span></p>
          <ul class="list-inline">
            <li><a href="#">2 Days Ago</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-comment"></span> 12 Comments</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-share"></span> 18 Shares</a></li>
          </ul>
        </article>
      </div>
      <hr>
    </div><!--/Center Column-->


    <!-- Right Column -->
    <div class="col-sm-3">

 
      <!-- Progress Bars -->
      <!-- <div class="panel panel-default anim" >
        <div class="panel-heading">
          <h3 class="panel-title">
            <span class="glyphicon glyphicon-align-left"></span> 
            Transfer Graph
          </h3>
        </div>
        <div class="panel-body">
          <div class="progress">
            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100"
            aria-valuemin="0" aria-valuemax="100" style="width:100%">
              100% England
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80"
            aria-valuemin="0" aria-valuemax="100" style="width:80%">
              80% Germany
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45"
            aria-valuemin="0" aria-valuemax="100" style="width:45%">
              45% Italy
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="35"
            aria-valuemin="0" aria-valuemax="100" style="width:35%">
              35% Spain
            </div>
          </div>
        </div>
      </div> -->
        <div class="panel panel-default">
        <div class="panel-heading">
          <h1 class="panel-title"><span class="glyphicon glyphicon-refresh"></span> Recent Posts</h1>
        </div>
        <div class="list-group">
          <a href="#" class="list-group-item">Mancity Wins In an Emphatic Manner</a>
          <a href="#" class="list-group-item"></a>
          <a href="#" class="list-group-item"></a>
          <a href="#" class="list-group-item"></a>
          <a href="#" class="list-group-item"></a>
          <a href="#" class="list-group-item"></a>
          <a href="#" class="list-group-item"></a>
          <a href="#" class="list-group-item"></a>
          <a href="#" class="list-group-item"></a>
          <a href="#" class="list-group-item"></a>
        </div>
      </div>

      <!-- Carousel --> 
      <h3><span class="glyphicon glyphicon-resize-horizontal"></span> Transfer</h3>
      <div id="side-carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#side-carousel" data-slide-to="0" class="active"></li>
          <li data-target="#side-carousel" data-slide-to="1"></li>
          <li data-target="#side-carousel" data-slide-to="2"></li>
          <li data-target="#side-carousel" data-slide-to="3"></li>
          <li data-target="#side-carousel" data-slide-to="4"></li>
          <li data-target="#side-carousel" data-slide-to="5"></li>
          <li data-target="#side-carousel" data-slide-to="6"></li>
          <li data-target="#side-carousel" data-slide-to="7"></li>
          <li data-target="#side-carousel" data-slide-to="8"></li>
          <li data-target="#side-carousel" data-slide-to="9"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <a href="#">
            <img src="images/spain_1.jpg" class="img-responsive" alt="spain_1">
            </a>
            <div class="carousel-caption">
              
            </div>
          </div>
          <div class="item">
            <a href="#">
              <img src="images/england_1.jpg" class="img-responsive" alt="germany_2">
            </a>
            <div class="carousel-caption">
              
            </div>
          </div>
          <div class="item">
            <a href="#">
              <img src="images/germany_1.jpg" class="img-responsive" alt="spain_3">
            </a>
            <div class="carousel-caption">
              
            </div>
          </div>
          <div class="item">
            <a href="#">
              <img src="images/italy_1.jpg" class="img-responsive" alt="spain_3">
            </a>
            <div class="carousel-caption">
              
            </div>
          </div>
          <div class="item">
            <a href="#">
              <img src="images/spain_2.jpg" class="img-responsive" alt="spain_3">
            </a>
            <div class="carousel-caption">
              
            </div>
          </div>
          <div class="item">
            <a href="#">
              <img src="images/england_2.jpg" class="img-responsive" alt="spain_3">
            </a>
            <div class="carousel-caption">
              
            </div>
          </div>
          <div class="item">
            <a href="#">
              <img src="images/germany_2.jpg" class="img-responsive" alt="spain_3">
            </a>
            <div class="carousel-caption">
              
            </div>
          </div>
          <div class="item">
            <a href="#">
              <img src="images/italy_2.jpg" class="img-responsive" alt="spain_3">
            </a>
            <div class="carousel-caption">
              
            </div>
          </div>
          <div class="item">
            <a href="#">
              <img src="images/spain_3.jpg" class="img-responsive" alt="spain_3">
            </a>
            <div class="carousel-caption">
              
            </div>
          </div>
          <div class="item">
            <a href="#">
              <img src="images/england_3.jpg" class="img-responsive" alt="spain_3">
            </a>
            <div class="carousel-caption">
              
            </div>
          </div>
          <div class="item">
            <a href="#">
              <img src="images/germany_3.jpg" class="img-responsive" alt="spain_3">
            </a>
            <div class="carousel-caption">
              
            </div>
          </div>
          <div class="item">
            <a href="#">
              <img src="images/italy_3.jpg" class="img-responsive" alt="spain_3">
            </a>
            <div class="carousel-caption">
              
            </div>
          </div>        
        </div>
        <a class="left carousel-control" href="#side-carousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#side-carousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        </div>

        <div class="panel panel-default">
        <div class="panel-heading">
          <h1 class="panel-title"><span class="glyphicon glyphicon-random"></span> Related Posts</h1>
        </div>
        <div class="list-group">
          <a href="#" class="list-group-item">Mancity Wins In an Emphatic Manner</a>
          <a href="#" class="list-group-item"></a>
          <a href="#" class="list-group-item"></a>
          <a href="#" class="list-group-item"></a>
          <a href="#" class="list-group-item"></a>
          <a href="#" class="list-group-item"></a>
          <a href="#" class="list-group-item"></a>
          <a href="#" class="list-group-item"></a>
          <a href="#" class="list-group-item"></a>
          <a href="#" class="list-group-item"></a>
          <a href="#" class="list-group-item"></a>
        </div>
      </div>

    </div><!--/Right Column -->

  </div><!--/container-fluid-->



<footer>Copyright &copy; 2017 <a href="#">Fansport.com</a></footer>

    <script type="text/javascript" src="js/plugin.js"></script>
    
    <!-- Main Javascript File  -->
    <script type="text/javascript" src="js/scripts.js"></script>

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>