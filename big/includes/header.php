<?php include "big-config.php"?>
<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset='utf-8'>
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title><?=$title?></title>
            
            <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
            <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
            <script src="./scripts/big-nav.js"></script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
            
            <link rel="stylesheet" href="./css/big-nav.css">
            <link rel="stylesheet" href="./css/big.css">
            <link rel="stylesheet" href="./css/form.css">
            <link href="https://fonts.googleapis.com/css2?family=Alata&family=Open+Sans&display=swap" rel="stylesheet"> 
        </head>
        <body>
            <header>
                <h1><a href="index.php">Aggie Wheeler's Bateman Web Dev Examples</a></h1>
                <nav>
                    <ul>
                        <li><a href="https://www.aggiewheelerbateman.com/it162/"><span><i class="fa fa-fw fa-bank"></i> IT162</span></a></li>
                        <li><a href="index.php"><span><i class="fa fa-fw fa-home"></i> BIG</span></a></li>
                        <li><a href="flexbox.php"><span><i class="fa fa-fw fa-cube"></i> Flexbox</span></a></li>
                        <li><a href="galleries.php"><span><i class="fa fa-fw fa-camera-retro"></i> Galleries</span></a></li>
                        <li><a href="shopping-carts.php"><span><i class="fa fa-fw fa-shopping-basket"></i> Shopping Carts</span></a></li>
                        <li><a href="site-app.php"><span><i class="fa fa-fw fa-html5"></i> Site vs App</span></a></li>
                        <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i> Google</span></a>
                        <ul>
                            <li><a href="calendar.php"><span><i class="fa fa-fw fa-calendar"></i> Calendar</span></a></li>
                            <li><a href="map.php"><span><i class="fa fa-fw fa-map-o"></i> Map</span></a></li>
                            <li><a href="youtube.php"><span><i class="fa fa-fw fa-youtube-square"></i> YouTube</span></a></li>
                        </ul>
                        </li>
                        <li><a href="webcam.php"><span><i class="fa fa-fw fa-eye"></i> Web Cam</span></a></li>
                    </ul>
                </nav>
            </header>