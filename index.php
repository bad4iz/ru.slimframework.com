<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
  <title>Documentation - Slim Framework</title>
  <meta name="description" content=""/>
  <meta name="robots" content="index, follow"/>
  <meta property="og:title" content="Documentation"/>
  <meta property="og:site_name" content="Slim Framework"/>
  <meta property="og:url" content="http://www.slimframework.com/docs/"/>
  <meta property="og:description" content=""/>
  <meta property="og:type" content="website"/>
  <link rel="stylesheet" href="./assets/css/all.css"/>
  <link rel="shortcut icon" href="./assets/images/favicon.png"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>
<body style="padding-top: 5em">


<div class="wrapper docs">
  <div class="container-fluid">
    <header class="site-header">
      <div class="site-title"><a href="/index.php">Slim</a></div>
      <div class="site-slogan">микро framework для PHP</div>
    </header>

    <div class="row">

      <div class="col-md-3">
        <? require_once "./sidebar.php" ?>
      </div>

      <div class="col-md-8 docs-content">
       <? include_once "./start/home.php" ?>
      </div>

    </div>

    <footer class="site-footer">
      <? require_once "./footer.php" ?>
    </footer>
  </div>
</div>

<script src="./assets/scripts/build/production.min.js"></script>
</body>
</html>

