<?php
    require_once 'header.php';

    require_once 'login.php';
    try {
        $pdo = new PDO($attr, $user, $pass, $opts);
    }
    catch (PDOException $e) {
        throw new PDOException($e->getMessage(), (int)$e->getCode());
    }

    $table = "article2";
    $action = "article2.php";

    echo <<<_ARTICLE
        <main class="main">
            <h3>The 2023 State of Ransomware in Education: 84% increase in attacks over 6-month period</h3>
            <p>
                This article is based on research by Marcelo Rivero, Malwarebytes' ransomware specialist, who monitors information published by ransomware gangs on 
                their Dark Web sites. In this report, "known attacks" are those where the victim didn't pay a ransom. This provides the best overall picture of ransomware 
                activity, but the true number of attacks is far higher. 
            </p>
            <div class="hr"></div>
            <article class="article">
                <p>
                    Ransomware gangs have made the past year a hard one for the education sector.
                </p>
                <p>
                    Between June 2022 and May 2023, there were 190 known ransomware attacks against educational institutions, and many more that went unreported and unrecorded. 
                    Between the first and second six months of that period, education experienced an 84% increase in attacks.
                </p>
                <figure>
                    <img src="images/graph1.jpg" class="graph" alt="graph">
                    <figcaption class="figcaption">Known ransomware attacks against education, June 2022-May 2023</figcaption>
                </figure>
                <p>
                    Although the attacks were carried out by a large number of different ransomware gangs, one in particular was responsible for the lion's share (23%). 
                    Vice Society is a gang that specializes in attacking education, and almost half of its activity (43%) is directed against the sector.
                </p>
                <figure>
                    <img src="images/graph2.jpg" class="graph" alt="graph">
                    <figcaption class="figcaption">Distribution of Vice Society attacks vs other ransomware gangs, June 2022-May 2023</figcaption>
                </figure>
                <p>
                    Further findings from the data show that, while ransomware attacks against education are a global phenomenon, the USA (with 56% of known attacks) 
                    and the UK (with 15%) were hit the most frequently attacked countries between June 2022 and May 2023.
                </p>
                <h4>The Threat Landscape</h4>
                <p>
                    The leading gangs that targeted the education sector between June 2022 and May 2023 include Vice Society with 43 attacks, LockBit with 33, 
                    BianLian (18), Royal (16), and AvosLocker (15).
                </p>
                <p>
                    A few of the educational institutions attacked in the last year include De Montfort School, Cincinnati State, and one that made national headlines 
                    in September: Los Angeles Unified, the second largest school district in the US. The stakes are no joke: schools and colleges have suffered 
                    an estimated 1,600 days of downtime due to ransomware attacks, and the average cost of a ransomware breach was $4.54 million in 2022.
                </p>
                <figure>
                    <img src="images/graph3.jpg" class="graph" alt="graph">
                    <figcaption class="figcaption">Top ten ransomware used in attacks against education, June 2022-May 2023</figcaption>
                </figure>
                <p>
                    In total, 26 separate ransomware-as-a-service gangs contributed to the onslaught on education.
                </p>
                <h4>How to avoid ransomware</h4>
                <p>
                <ul>
                    <li>
                        <b>Block common forms of entry.</b> Create a plan for patching vulnerabilities in internet-facing systems quickly; and disable or harden remote access 
                        like RDP and VPNs.
                    </li>
                    <li>
                        <b>Prevent intrusions.</b> Stop threats early before they can even infiltrate or infect your endpoints. Use endpoint security software that can prevent 
                        exploits and malware used to deliver ransomware.
                    </li>
                    <li>
                        <b>Detect intrusions.</b> Make it harder for intruders to operate inside your organization by segmenting networks and assigning access rights prudently. 
                        Use EDR or MDR to detect unusual activity before an attack occurs.
                    </li>
                    <li>
                        <b>Stop malicious encryption.</b> Deploy Endpoint Detection and Response software like Malwarebytes EDR that uses multiple different detection techniques 
                        to identify ransomware, and ransomware rollback to restore damaged system files.
                    </li>
                    <li>
                        <b>Create offsite, offline backups.</b> Keep backups offsite and offline, beyond the reach of attackers. Test them regularly to make sure you can restore 
                        essential business functions swiftly.
                    </li>
                    <li>
                        <b>Don't get attacked twice.</b> Once you've isolated the outbreak and stopped the first attack, you must remove every trace of the attackers, their malware, 
                        their tools, and their methods of entry, to avoid being attacked again.
                    </li>
                </ul>
                
            </article>
    _ARTICLE;

    require_once 'comments.php';
    
    require_once 'footer.php';

?>
               