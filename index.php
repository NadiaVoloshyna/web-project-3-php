<?php
    require_once 'header.php';

    ini_set("display_errors", 1);
        error_reporting(E_ALL); 
                
    echo <<<_MAIN
        <section id="section">
            <div>
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
            </div>

            <div class="gallery">
                <a target="_blank" href="article1.php">
                    <span id="span"></span>
                    <img src="images/G7.png" name="G7" alt="G7">
                </a>
                <div class="desc">
                    <h3>IBM unveiled a major long-term partnership at the G7 summit</h3>
                    Quantum technology is rapidly advancing, bringing us closer to solving previously unsolvable problems. And at IBM, 
                    we're laser-focused on bringing useful quantum computing to the world. </br>
                    Yesterday, at the G7 Summit, we took a big step forward towards this new era with the announcement of our 10-year, 
                    $100 million partnership with the University of Tokyo and University of Chicago to develop a 100,000-qubit quantum system by the year 2033.
                    <span id="more">...read more</span>
                </div>
            </div>

            <div class="gallery">
                <a target="_blank" href="article2.php">
                    <span id="span"></span>
                    <img src="images/watsonx.png" name="watsonx" alt="watsonx">
                </a>
                <div class="desc">
                    <h3>IBM has officially entered the generative AI arena</h3>
                    More than a decade after debuting Watson — a literal question-answering machine designed to beat humans at “Jeopardy” — 
                    IBM is renewing its push into artificial intelligence. The company has brought back the brand in the form of Watsonx, 
                    a platform that aims to help companies create and integrate custom AI capabilities into their operations. CEO Arvind Krishna says 
                    the new data and AI platform could replace between 30% and 50% of “repetitive, back-office processes” in coming years and has repeatedly 
                    emphasized its accuracy compared with rival AI products. <span id="more">...read more</span>
                </div>
            </div>

            <div class="gallery">
                <a target="_blank" href="article3.php">
                    <span id="span"></span>
                    <img src="images/AI.png" name="AI" alt="AI">
                </a>
                <div class="desc">
                    <h3>IBM's CEO says nearly 8,000 jobs at the company could be replaced by AI</h3>
                    IBM will wait and see which jobs can be replaced by artificial intelligence before hiring for more back-office roles. 
                    Roughly 7,800 jobs in departments such as human resources could be done with AI and automation, CEO Arvind Krishna says. 
                    The century-old company, which has about 260,000 employees, continues to hire for customer-facing roles and software development. 
                    Still, Krishna's announcement is one of the most sweeping by a major corporation on the impact of the new technology on its workforce, Bloomberg notes.
                    <span id="more">...read more</span>
                </div>
            </div>
        </section> 
    _MAIN;       
    
    require_once 'footer.php';
?>