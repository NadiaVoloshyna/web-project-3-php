<?php
    echo <<<_INIT
        <!DOCTYPE html> 
        <html lang="en">
            <head>
                <meta charset='utf-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1'> 
                <title>Tech News</title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
                    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
                <link rel="stylesheet" type="text/css" href="style.css" />
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
                    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" 
                    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" 
                    integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
                <script>
                    if ( window.history.replaceState ) {
                        window.history.replaceState( null, null, window.location.href );
                    }
                </script>
            </head>

            <body>
                <header id="header">
                    <img src="images/icon-globe.png" id="logo" alt="logo">
                    <h2>Cyber Security News</h2>
    _INIT;

    $day = date("l");
    date_default_timezone_set("Europe/London");
    $time = date("h:i:sa");

    echo <<<_HEADER
                    <nav>
                        <a href="index.php" class="button">Home</a>
                    </nav>
                    <div id="quote">$day , $time</div>
                    <div id="images">
                        <img src="images/learning.png" alt="learning">
                        <img src="images/nature.png" alt="nature">
                        <img src="images/home.png" alt="home">
                    </div>
                </header> 
    _HEADER;
?>