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
                <script type="text/javascript" src="test.js"></script>
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
                    <div id="quote">$day , $time</div>
                    <a href="index.php" data-bs-toggle="tooltip" title="Home"><img src="images/home.png" class="home" alt="home"></a>
                    <a data-bs-toggle="offcanvas" href="#offcanvas" role="button" aria-controls="offcanvas"><img src="images/stack.png" class="home" alt="stack"></a>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasLabel">Recent Articles</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <a target="_blank" href="article1.php">
                                <figure class="aside">
                                    <img src="images/malware.jpg" class="menu" alt="malware">
                                    <figcaption class="figcaption">Malicious Chrome extensions with 75M installs removed from Web Store</figcaption>
                                </figure>
                            </a>
                            <hr class="line">
                            <a target="_blank" href="article2.php">
                                <figure class="aside">
                                    <img src="images/ransomware.png" class="menu" alt="ransomware">
                                    <figcaption class="figcaption">The 2023 State of Ransomware in Education: 84% increase in attacks over 6-month period</figcaption>
                                </figure>
                            </a>
                            <hr class="line">
                            <a target="_blank" href="article3.php">
                                <figure class="aside">
                                    <img src="images/passwords.jpg" class="menu" alt="passwords">
                                    <figcaption class="figcaption">Top 5 Password Cracking Techniques Used by Hackers</figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                </header> 
    _HEADER;
?>