<?php
    echo <<<_INIT
        <!DOCTYPE html> 
        <html lang="en">
            <head>
                <meta charset='utf-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1'> 
                <link rel="stylesheet" type="text/css" href="style.css" />
                <title>Tech News</title>
                <script>
                    if ( window.history.replaceState ) {
                        window.history.replaceState( null, null, window.location.href );
                    }
                </script>
            </head>

            <body>
                <header id="header">
                    <img src="images/icon-globe.png" id="logo" alt="logo">
                    <h2>Tech News</h2>
    _INIT;

    $day = date("l");
    date_default_timezone_set("Europe/London");
    $time = date("h:i:sa");

    echo <<<_HEADER
                    <nav id="nav">
                        <a href="index.php" class="button">Home</a>
                    </nav>
                    <div id="quote">It is $day , $time</div>
                    <div id="images">
                        <img src="images/learning.png" alt="learning">
                        <img src="images/nature.png" alt="nature">
                        <img src="images/home.png" alt="home">
                    </div>
                </header> 
    _HEADER;
?>