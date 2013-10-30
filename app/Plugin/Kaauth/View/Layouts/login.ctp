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
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
</head>
  <body>

    <div class="container">
      <?php echo $this->fetch('content'); ?>
    </div> <!-- /container -->

  </body>
</html>
