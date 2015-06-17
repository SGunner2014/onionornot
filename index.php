<!DOCTYPE html>

<?php

  require_once("main.php");

?>

<html>
  <head>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
      <script src="scripts/oornot.js"></script>
        <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/font-awesome.css" rel="stylesheet">
        <link href="bootstrap/font-awesome.min.css" rel="stylesheet">
        <link rel="icon" 
      type="image/ico" 
      href="bootstrap/favicon.ico">
  </head>
    <body>
    <div class="container">
    <nav class="navbar navbar-inverse" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">OnionOrNot?</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex8-collapse">
          <ul class="nav navbar-nav">
            <li><a href="credits.html">About</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav> 
        <h1 style="text-align:center;">Onion or Not?</h1>
        <hr/>
        <h3 style="text-align:center;">Score Goes Here</h3>
        <div class="well">
            <?php $tmpArr = printSub($array);
              $title = $tmpArr['title'];
              $link = $tmpArr['link'];
            ?>
        <div>
    </div class="container">

    <div class="container">

        <button type="button" id="true" class="btn btn-success btn-lg btn-block">            
            <i class="fa fa-check fa-2x pull-left"></i>Onion!</a>
        </button>
        <button type="button" id="false" class="btn btn-danger btn-lg btn-block">            
            <i class="fa fa-times fa-2x pull-left"></i>NOnion!</a>
        </button>
     </div>

     <br/>

     <!-- The alerts !-->
    <div class="container" id="correctAnswer" style="display:none;">
      <div class="alert alert-dismissable alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <b>Correct!</b>
        <div class="media">
          <a class="pull-left" href="#"></a>
          <div class="media-body">
            <a href="<?php echo $link; ?>"><h4 class="media-heading"><?php echo $title; ?></h4></a>
            <button type="button" onclick="location.reload()" class="btn btn-primary btn-lg btn-block">Play Again!</button>
          </div>
        </div>
      </div>
    </div>
     <div class="container" id="wrongAnswer" style="display:none;">
      <div class="alert alert-dismissable alert-danger">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <b>Incorrect!</b>
        <div class="media">
          <a class="pull-left" href="#"></a>
          <div class="media-body">
            <a href="<?php echo $link; ?>"><h4 class="media-heading"><?php echo $title; ?></h4></a>
            <button type="button" class="btn btn-primary btn-lg btn-block" onclick="location.reload()">Play Again!</button>
          </div>
        </div>
      </div>
    </div>
    <footer><a href="/credits"</a></footer>
    </body>
</html>
