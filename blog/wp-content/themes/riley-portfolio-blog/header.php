<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Blog</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/blog-style.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    
<?php wp_head(); ?>
</head>

<body>

    <!-- nav bar start-->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark pl-5 navbar-top-info">
        <a class="navbar-brand" href="https://blog.riley.gg">Riley Brown</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"
            aria-expanded="false" aria-label="Toggle navigation">
            <span>
            <img src="<?php bloginfo('stylesheet_directory'); ?>/menu.svg" style="width: 20px;">
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"></li>
            </ul>
            <ul class="nav navbar-nav navbar-right pr-5">
                <li class="nav-item">
                    <a class="nav-link" id="about-me" href="https://riley.gg/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="about-me" href="https://riley.gg/#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-me-nav" href="https://riley.gg/#contact-me">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link my-work-nav" href="https://riley.gg/#myWork">My Work
                        <span class="sr-only">(current)</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="https://codepen.io/RileyB" target="_blank">CodePen</a>


                </li>

                <li class="nav-item">
                    <a class="nav-link" href="https://blog.riley.gg">Blog</a>


                </li>
            </ul>


        </div>
    </nav>
    <!-- nav bar end-->