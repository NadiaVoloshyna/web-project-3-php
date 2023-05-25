<?php
    require_once 'header.php';

    ini_set("display_errors", 1);
        error_reporting(E_ALL); 
                
    echo <<<_MAIN
        <section id="section">
            <div>
                <p>
                    Hi, I am <b>happy to be the Abertay student</b>. Getting the good education in Computer Science 
                    was on my mind for years as I am a self-taught programmer (my previous degree is in International Economics).
                    So far, I worked mainly with JavaScript and it's ecosystem. I have been developing user interfaces, 
                    participated in complex programs designing. Generally, I used a lot of instruments but there is a vital 
                    need for the systemic insight and structure. I enjoy learning <acronym title="Computer Science">CS</acronym> concepts, Python and PHP very much. 
                    That's just as putting all the pieces together, at last )

                    <b>Tech News</b> is an independent, online news journal launched in February 2022 to cover key technical stories. Today we have readers from around the world.
                    We bring you the future as it happens. From the latest in science and technology to the big stories in business and culture, we've got you covered.
                    Technology news is as fast-moving as it is captivating. To keep your audience up to date, discover in-depth coverage from Reuters:
                    Extensive coverage of tech products and events 
                    Technology news and innovation
                    Who we are 
                    Want the latest news and information on UK tech? WE GOT IT. Need advice on how to grow your company? 
                    LOOK NO FURTHER. Looking to meet key players in the industry? WE CAN HELP! 
                    About the tech industry, for the tech industry, UKTN is the ultimate resource for the latest UK tech news, views, information, data and events. 
                    Where we've come from 
                    UKTN started life as Tech City News, relaunching in 2017 with a fresh new look and a brand new name to better reflect and represent the market we cover and cater for.
                    Originally just focusing on emerging technology companies in London, we now cover developments in the tech industry across the whole of the UK.
                    Where we're going 
                    Whether you're an entrepreneur with a bright idea, a scaleup about to raise your Series D funding or a fully-fledged tech unicorn, we stand shoulder to shoulder
                    with startups and scaleups to provide the latest news, expert advice, inspiring stories and networking opportunities to help you grow and succeed. Our vision is 
                    for the UKTN name to become synonymous with UK tech. We will continue to provide world-class content to become fully embedded in the scaleup journey. 
                    As part of our mission, we're increasing the amount of industry expert-led content we produce. From tax to law and marketing to HR, UKTN is a trusted partner 
                    to educate, inform and inspire the next generation of tech titans.
                    
                </p>
                <hr />
                <p>
                    I understand areas to develop and work hard on completion of the MSc Computer Science online part-time programme at Abertay University. 
                    This degree is a modern course, consisting of up-to-date content covering the full spectrum of the computer science discipline 
                    to give you a thorough grounding of networking, databases, and web development, whilst introducing you to growing trends in the field 
                    such as the Internet of Things (IoT), wearable technology, and smart devices.
                </p>
            </div>

            <div class="gallery">
                <a target="_blank" href="article1.php">
                    <img src="images/G7.png" name="G7" alt="G7">
                </a>
                <div class="desc">
                    <b>IBM unveiled a major long-term partnership at the G7 summit</b></br>
                    Quantum technology is rapidly advancing, bringing us closer to solving previously unsolvable problems. And at IBM, 
                    we're laser-focused on bringing useful quantum computing to the world. </br>
                    Yesterday, at the G7 Summit, we took a big step forward towards this new era with the announcement of our 10-year, 
                    $100 million partnership with the University of Tokyo and University of Chicago to develop a 100,000-qubit quantum system by the year 2033.
                </div>
                <a target="_blank" href="article2.php">
                    <button class="button">read more</button>
                </a>
            </div>
            <div class="gallery">
                <a target="_blank" href="article2.php">
                    <img src="images/watsonx.png" name="watsonx" alt="watsonx">
                </a>
                <div class="desc">
                    <b>IBM has officially entered the generative AI arena</b></br>
                    More than a decade after debuting Watson — a literal question-answering machine designed to beat humans at “Jeopardy” — 
                    IBM is renewing its push into artificial intelligence. The company has brought back the brand in the form of Watsonx, 
                    a platform that aims to help companies create and integrate custom AI capabilities into their operations. CEO Arvind Krishna says 
                    the new data and AI platform could replace between 30% and 50% of “repetitive, back-office processes” in coming years and has repeatedly 
                    emphasized its accuracy compared with rival AI products.
                </div>
                <a target="_blank" href="article2.php">
                    <button class="button">read more</button>
                </a>
            </div>
            <div class="gallery">
                <a target="_blank" href="article3.php">
                    <img src="images/AI.png" name="AI" alt="AI">
                </a>
                <div class="desc">
                    <b>IBM's CEO says nearly 8,000 jobs at the company could be replaced by AI</b></br>
                    IBM will wait and see which jobs can be replaced by artificial intelligence before hiring for more back-office roles. 
                    Roughly 7,800 jobs in departments such as human resources could be done with AI and automation, CEO Arvind Krishna says. 
                    The century-old company, which has about 260,000 employees, continues to hire for customer-facing roles and software development. 
                    Still, Krishna's announcement is one of the most sweeping by a major corporation on the impact of the new technology on its workforce, Bloomberg notes.
                </div>
                <a target="_blank" href="article2.php">
                    <button class="button">read more</button>
                </a>
            </div>
        </section> 
    _MAIN;       
    
    require_once 'footer.php';
?>