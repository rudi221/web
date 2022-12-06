
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> <?php echo $title; ?></title>
        <meta name="description" content="<?php echo $description;?>">
        <meta name="keywords" content="<?php echo $keywords;?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo Public_PATH ?>/lib/bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo Public_PATH ?>/lib/fontawesome/css/all.css">
        <link rel="stylesheet" href="<?php echo Public_PATH ?>/css/style.css">
    </head>
    <body>
  
<div class="class"></div>

      
    <?php echo $content;?>
        
    <script src="<?php echo Public_PATH ?>/js/site.js"></script>
    <script src="<?php echo Public_PATH ?>/lib/bootstrap/dist/js/bootstrap.bundle.js"></script>
    </body>
</html>
