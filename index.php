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
                </p>
                <hr />
                <p>
                    I understand areas to develop and work hard on completion of the MSc Computer Science online part-time programme at Abertay University. 
                    This degree is a modern course, consisting of up-to-date content covering the full spectrum of the computer science discipline 
                    to give you a thorough grounding of networking, databases, and web development, whilst introducing you to growing trends in the field 
                    such as the Internet of Things (IoT), wearable technology, and smart devices.
                </p>
                <hr />
                <p>
                    Besides my professional interests I am enjoying <dfn>yoga</dfn>, <dfn>reading</dfn>, and <dfn>outdoor activities</dfn>. I also like and spend 
                    much time <dfn>educating and communicating with my kids</dfn>. I find it exciting to help the young person to grow. <br/>
                </p>
            </div>
            <div>
            <img src="images/abertay-logo.jpg" id="abertay" name="abertay" alt="abertay">
            </div>
        </section> 
    _MAIN;       
    
    require_once 'footer.php';
?>