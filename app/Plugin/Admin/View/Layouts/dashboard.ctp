<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title><?php echo $title_for_layout; ?></title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

	<?php
		echo $this->Html->charset();
		echo $this->Html->meta('icon');
		echo $this->Html->css('bootstrap-responsive.min');
		echo $this->Html->css('bootstrap.min');
		echo $this->fetch('meta');
		echo $this->fetch('vendor/modernizr-2.6.2-respond-1.1.0.min.js');
	?>

</head>
<body>


    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Admin Area</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
              Logged in as <a href="#" class="navbar-link">Username</a>
            </p>
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <hr style="height:30px;" />

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Posts</li>
              <li class="active"><a href="/admin/posts/add">Create a new post</a></li>
              <li><a href="/admin/posts/index">List all posts</a></li>
              <li class="nav-header">Authors</li>
              <li><a href="/admin/authors/add">Create a new author</a></li>
              <li><a href="/admin/authors/index">List all authors</a></li>
              <li class="nav-header">Sidebar</li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->


        <div class="span9">
            <h1><?php echo $title_for_page; ?></h1>
            <ul class="breadcrumb" style="margin-bottom: 5px;">
              <li><a href="#">Home</a> <span class="divider">/</span></li>
              <li><a href="#">Library</a> <span class="divider">/</span></li>
              <li class="active">Data</li>
            </ul>

            <?php // echo $this->Session->flash(); ?>
            <?php echo $this->fetch('content'); ?>
            
        </div><!--/span-->

      </div><!--/row-fluid -->


      
    <?php
    /**
     * SQL Debugger
     */

    

        if (strlen($this->element('sql_dump'))>0): ?>
            <footer>
                <?php echo "<pre>". $this->element('sql_dump') ."</pre>";  ?>
            </footer>
    <?php endif; ?>

    </div><!--/.fluid-container-->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

  </body>
</html>
