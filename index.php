<?php
    require_once 'header.php';

    ini_set("display_errors", 1);
        error_reporting(E_ALL); 
                
    echo <<<_MAIN
        <div class="container-fluid main">
            <div class="row">
                <div class="col-sm-12 g-0 about">
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
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-sm-12 col-xxl-7 g-0 me-auto" id="items">             
                        <div class="gallery">
                            <a target="_blank" href="article1.php">
                                <span id="span"></span>
                                <img src="images/malware.jpg" alt="malware">
                            </a>
                            <div class="desc">
                                <h5><b>Malicious Chrome extensions with 75M installs removed from Web Store</b></h5>
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
                                <h5><b>The 2023 State of Ransomware in Education: 84% increase in attacks over 6-month period</b></h5>
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
                                <h5><b>Top 5 Password Cracking Techniques Used by Hackers</b></h5>
                                One of the biggest security threats is password cracking. Are you an IT system administrator concerned about the security of your 
                                organization's data? In this article, we'll provide an overview of password cracking, discuss the importance of strong passwords, and detail 
                                the top 5 password cracking techniques hackers use. We'll also provide real-world examples of password-cracking attacks and their impact 
                                and recommendations for enhancing password security. Whether you're a seasoned IT professional or just getting started, you need to understand 
                                these password cracking techniques to help better secure your organization's data.
                                <span id="more">...read more</span>
                            </div>
                        </div>
                </div>

                <div class="col-sm-8 col-xl-6 col-xxl-4 offset-xxl-0 offset-sm-2 offset-xl-3 g-0">
                    <div id="carouselIndicators" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/malware.jpg" class="d-block w-100" alt="malware">
                                <div class="carousel-caption d-none d-md-block">
                                    <p>Malicious Chrome extensions with 75M installs removed from Web Store</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/ransomware.png" class="d-block w-100" alt="ransomware">
                                <div class="carousel-caption d-none d-md-block">
                                    <p>The 2023 State of Ransomware in Education: 84% increase in attacks over 6-month period</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/passwords.jpg" class="d-block w-100" alt="passwords">
                                <div class="carousel-caption d-none d-md-block">
                                    <p>Top 5 Password Cracking Techniques Used by Hackers</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>       

        <div>
    _MAIN;       
    
    require_once 'footer.php';
?>