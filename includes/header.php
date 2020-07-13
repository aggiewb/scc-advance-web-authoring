<?php include "portal-config.php"?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?=$title?></title>
        <link href="css/portal.css" rel="stylesheet">
        <link href="css/nav.css" rel="stylesheet">
        <link href="css/form.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lilita+One%7COpen+Sans&display=swap" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="noindex, nofollow">
    </head>
    <body>
        <header>
            <h1><a href="index.php">Aggie Wheeler Bateman IT162 Portal</a></h1>
            <nav>
                <ul class="not-responsive">
                    <?=createLinks($navMain)?>
                    <li class="icon"><a>&#9776;</a></li>
                </ul>
            </nav>
        </header>