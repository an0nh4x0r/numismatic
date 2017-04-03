<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,">
    <title>Numismatic</title>
    <link rel="stylesheet" type="text/css" href="http://bootswatch.com/darkly/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/fullscreen-search.css">
    <link rel="stylesheet" href="node_modules/bootstrap-slider/dist/css/bootstrap-slider.css">
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Numismatic</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="<?php if($current_page =='home'){echo 'active';}?>"><a href="/">Home</a></li>
                <li><a href="#">All Products</a></li>
                <li><a href="#">My Account</a></li>
                <li><a href="#">Shopping Cart <span class="badge">3</span></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#search">Search</a></li>
                <li class="<?php if($current_page =='login'){echo 'active';}?>"><a href="login.php">Login</a></li>
                <li class="<?php if($current_page =='signup'){echo 'active';}?>"><a href="signup.php">Sign Up</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>

    <div id="search">
        <button type="button" class="close">X</button>
        <form>
            <input type="search" value="" placeholder="Search anything here ... " />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>

</nav>

