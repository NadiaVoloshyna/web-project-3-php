<?php
    require_once 'header.php';

    require_once 'login.php';
    try {
        $pdo = new PDO($attr, $user, $pass, $opts);
    }
    catch (PDOException $e) {
        throw new PDOException($e->getMessage(), (int)$e->getCode());
    }

    $table = "article3";
    $action = "article3.php";

    echo <<<_ARTICLE
        <section class="section">
            <article class="article">
                <p>
                    <b>Tech News</b> is an independent online news journal launched in 2022 to cover key technical stories. Today we have readers from around the world.
                    We bring you the future as it happens. <b>Tech News</b> is the ultimate resource for the latest tech news, views, information, data and events.
                    Originally just focusing on emerging technology companies, we now cover developments in the tech industry across the globe.
                </p>
                <hr>
                <p>
                    Whether you're an entrepreneur with a bright idea, a scaleup about to raise your Series D funding or a fully-fledged tech unicorn, we stand shoulder to shoulder
                    with startups and scaleups to provide the latest news, expert advice, inspiring stories and networking opportunities to help you grow and succeed. Our vision is 
                    for the <b>Tech News</b> name to become synonymous with tech. We will continue to provide world-class content to become fully embedded in the scaleup journey. 
                    As part of our mission, we're increasing the amount of industry expert-led content we produce. From tax to law and marketing to HR, <b>Tech News</b> is a trusted 
                    partner to educate, inform and inspire the next generation of tech titans.
                </p>
            </article>
    _ARTICLE;

    require_once 'comments.php';
    
    require_once 'footer.php';

?>