<?php
    require_once 'header.php';

    require_once 'login.php';
    try {
        $pdo = new PDO($attr, $user, $pass, $opts);
    }
    catch (PDOException $e) {
        throw new PDOException($e->getMessage(), (int)$e->getCode());
    }

    $table = "article1";
    $action = "article1.php";

    echo <<<_ARTICLE
        <main class="main">
            <h3>Malicious Chrome extensions with 75M installs removed from Web Store</h3>
            <p>
                <b>Google</b> has removed from the Chrome Web Store 32 malicious extensions that could alter search results and push spam or unwanted ads. 
                Collectively, they come with a download count of 75 million. The extensions featured legitimate functionality to keep users unaware 
                of the malicious behavior that came in obfuscated code to deliver the payloads.
            </p>
            <div class="hr"></div>
            <section class="section">
                <article class="article">
                    <p>
                        Cybersecurity researcher Wladimir Palant analyzed the PDF Toolbox extension (2 million downloads) available from Chrome Web Store and found that 
                        it included code that was disguised as a legitimate extension API wrapper. In a write-up in mid-May, the researcher explains that the code allowed 
                        the “serasearchtop[.]com” domain to inject arbitrary JavaScript code into any website the user visited.
                    </p>
                    <p>
                        The potential for abuse ranges from inserting ads into webpages to stealing sensitive information. However, Palant didn't observe any malicious 
                        activity, so the code's purpose remained unclear. The researcher also noticed that the code was set to activate 24 hours after installing the extension, 
                        a behavior that is typically associated with malicious intentions.
                    </p>
                    <p>
                        A few days ago, Palant published a follow-up post on the case to alert that he had discovered the same suspicious code in another 18 Chrome 
                        extensions with a total download count of 55 million. Some examples include:
                    <p>
                    <ul>
                        <li>Autoskip for Youtube - 9 million active users</li>
                        <li>Soundboost - 6.9 million active users</li>
                        <li>Crystal Ad block - 6.8 million active users</li>
                        <li>Brisk VPN - 5.6 million active users</li>
                        <li>Clipboard Helper - 3.5 million active users</li>
                        <li>Maxi Refresher - 3.5 million active users</li>
                    </ul>
                    <p>
                        At the time of Palant publishing the second post, all of the extensions were still available in the Chrome Web Store.
                    </p>
                    <img src="images/autoskip.jpg" id="autoskip" alt="autoskip">
                    <p>
                        Continuing his investigation, Palant found two variants of the code: one masquerading as Mozilla's WebExtension browser API Polyfill, and another 
                        posing as the Day.js library. However, both versions featured the same arbitrary JS code injection mechanism involving serasearchtop[.]com.
                    </p>
                    <p>
                        Although the researcher did not observe any clear malicious activity, he noted that there are numerous user reports and reviews on the Web Store 
                        indicating that the extensions were performing redirections and search result hijacking. Despite his attempts to report the suspicious extensions to Google, 
                        they continued to be available to users from the Chrom Web Store.
                    </p>
                    <p>
                        Earlier today, though, cybersecurity company Avast said that it reported the extensions to Google after confirming their malicious nature, and 
                        expanded the list to 32 entries. Collectively, these boasted 75 million installs. Avast says that while the extensions appear harmless to unsuspecting users, 
                        they are adware that hijacks search results to display sponsored links and paid results, sometimes even serving malicious links.
                    </p>
                    <p>
                        Responding to a request for comment from BleepingComputer before Avast published its findings, a Google spokesperson said that the "reported 
                        extensions have been removed from the Chrome Web Store."
                    </p>
                    <pre>
                    “We take security and privacy claims against extensions seriously, 
                    and when we find extensions that violate our policies, we take appropriate action.”
                    “The Chrome Web Store has policies in place to keep users safe that all developers must adhere to," 
                    the Google representative told BleepingComputer”
                    </pre>
                    <p>
                        Avast highlights the significant impact of the extensions, which targeted tens of thousands of its customers, and potentially millions worldwide. 
                        For its customers, Avast selectively neutralized only the malicious elements within the extensions, letting the legitimate features continue operating 
                        without disruption.
                    </p>   
                    <p>
                        While the 75 million downloads looks worrying, the company suspects that the count was "artificially inflated." A complete list of the malicious extensions 
                        (IDs) can be found on Avast's report. Users should note that the removal of the extensions from the Chrome Web Store does not automatically deactivate or 
                        uninstall them from their browsers, so manual action is required to eliminate the risk.
                    </p>     
                </article>
    _ARTICLE;

    require_once 'sidebar.php';

    echo <<<_END
            </section>
    _END;

    require_once 'comments.php';
    
    require_once 'footer.php';

?>