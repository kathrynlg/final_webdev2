
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?php echo($page_title)?></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">
  
  <script src="<?php echo($root_dir);?>js/vendor/jquery-2.2.0.min.js"></script>
</head>
<body>
  <div id="banner">
    <h1>Recipes Page</h1>
    <php 
    $css = file_get_contents('CSS/style.css');
          echo $css;
    ?>
  </div>