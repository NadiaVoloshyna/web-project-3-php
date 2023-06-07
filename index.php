<?php
    require_once 'header.php';

    ini_set("display_errors", 1);
        error_reporting(E_ALL); 
                
    echo <<<_MAIN
        <section class="section">
            <p>
                <i><b>Cyber Security News</b></i> is an independent online news journal launched in 2022 to cover key technical stories. Today we have readers from around the world.
                We bring you the future as it happens. <i><b>Cyber Security News</b></i> is the ultimate resource for the latest cyber security news, views, information, data and events.
                We now cover developments in the tech industry across the globe. We believe that everyone has the right to cybersecurity, privacy and a thriving future.
            </p>
            <div class="hr"></div>
            <p>
                Whether you're an entrepreneur with a bright idea, a scaleup about to raise your Series D funding or a fully-fledged tech unicorn, we stand shoulder to shoulder
                with startups and scaleups to provide the latest news, expert advice, inspiring stories and networking opportunities to help you grow and succeed. Our vision is 
                for the <i><b>Cyber Security News</b></i> name to become synonymous with tech. We will continue to provide world-class content to become fully embedded in the scaleup journey. 
                As part of our mission, we're increasing the amount of industry expert-led content we produce. Poor cyber security is increasingly affecting all levels of society, 
                whether it is national, local, or personal. With a few strokes of a keyboard, nation states, terrorist groups, stateless organizations, and rogue individuals can 
                launch a cyber-attack from anywhere, at any time, disrupting and damaging our democracy and way of life. <i><b>Cyber Security News</b></i> is a trusted partner to educate, 
                inform and inspire the next generation of tech titans. Our goal is to empower industry experts to find viable solutions to urgent cybersecurity challenges. Together, we aim to widen our collective knowledge, and to develop our public trust.
                </p>
         
            <div id="gallery">
                <div class="gallery">
                    <a target="_blank" href="article1.php">
                        <span id="span"></span>
                        <img src="images/malware.jpg" alt="malware">
                    </a>
                    <div class="desc">
                        <h4>Malicious Chrome extensions with 75M installs removed from Web Store</h4>
                        Google has removed from the Chrome Web Store 32 malicious extensions that could alter search results and push spam or unwanted ads. Collectively, 
                        they come with a download count of 75 million. The extensions featured legitimate functionality to keep users unaware of the malicious behavior that 
                        came in obfuscated code to deliver the payloads.
                        <span id="more">...read more</span>
                    </div>
                </div>

                <div class="gallery">
                    <a target="_blank" href="article2.php">
                        <span id="span"></span>
                        <img src="images/ransomware.png" alt="ransomware">
                    </a>
                    <div class="desc">
                        <h4>The 2023 State of Ransomware in Education: 84% increase in attacks over 6-month period</h4>
                        This article is based on research by Marcelo Rivero, Malwarebytes' ransomware specialist, who monitors information published by ransomware gangs 
                        on their Dark Web sites. In this report, "known attacks" are those where the victim didn't pay a ransom. This provides the best overall picture of 
                        ransomware activity, but the true number of attacks is far higher.
                        <span id="more">...read more</span>
                    </div>
                </div>

                <div class="gallery">
                    <a target="_blank" href="article3.php">
                        <span id="span"></span>
                        <img src="images/passwords.jpg" alt="passwords">
                    </a>
                    <div class="desc">
                        <h4>Top 5 Password Cracking Techniques Used by Hackers</h4>
                        One of the biggest security threats is password cracking. Are you an IT system administrator concerned about the security of your 
                        organization's data? In this article, we'll provide an overview of password cracking, discuss the importance of strong passwords, and detail 
                        the top 5 password cracking techniques hackers use. We'll also provide real-world examples of password-cracking attacks and their impact 
                        and recommendations for enhancing password security. Whether you're a seasoned IT professional or just getting started, you need to understand 
                        these password cracking techniques to help better secure your organization's data.
                        <span id="more">...read more</span>
                    </div>
                </div>
            </div>
        </section> 
    _MAIN;       
    
    require_once 'footer.php';
?>