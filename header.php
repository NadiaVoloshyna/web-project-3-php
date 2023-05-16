<?php

echo <<<_INIT
<!DOCTYPE html> 
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'> 
        <link rel="stylesheet" type="text/css" href="style.css" />
        <script type="text/javascript" src="test.js"></script>
        <title>Home Page</title>
        <script>
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
        </script>
    </head>

    <body>
        <header id="header">
            <img src="icon-earth.gif" id="image" name="image" alt="image" onmouseover="onImageOver()" onclick="onImageClick()">
            <h2>Nadiia Voloshyna</h2>
_INIT;

$date = date("l");

echo <<<_END
<div id='quote'>Hello, today is $date ... Hold the vision, trust the process</div>
</header>
_END;

?>