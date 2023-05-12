<?php

echo <<<_INIT
<!DOCTYPE html> 
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'> 
        <link rel="stylesheet" type="text/css" href="style.css" />
        <script type="text/javascript" src="test.js"></script>
        <title>HomePage</title>
    </head>

    <body>
        <header>
            <h2 id="header">Nadiia Voloshyna</h2>
            <img src="image.jpg" name="image" alt="image" onmouseover="onMouseOver()" onmouseout="onMouseOut()">
        </header>
_INIT;

echo "Hello, today is " . date("l") . ". ";





?>