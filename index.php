<?php
    require_once 'header.php';

    ini_set("display_errors", 1);
        error_reporting(E_ALL); 
                
    require_once 'login.php';
    try {
        $pdo = new PDO($attr, $user, $pass, $opts);
    }
    catch (PDOException $e) {
        throw new PDOException($e->getMessage(), (int)$e->getCode());
    }
    echo <<<_MAIN
        <section id="s1">
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
        </section> 
    _MAIN;       

    if (isset($_POST['delete']) && isset($_POST['email'])) {
        $isbn   = get_post($pdo, 'email');
        $query  = "DELETE FROM users_data WHERE Email=$isbn";
        $result = $pdo->query($query);
        }

    if (isset($_POST['firstname']) && isset($_POST['secondname']) && isset($_POST['email'])) {
        $firstname = get_post($pdo, 'firstname');
        $secondname = get_post($pdo, 'secondname');
        $email = get_post($pdo, 'email');
                
        $query = "INSERT INTO users_data (FirstName, SecondName, Email) VALUES ($firstname, $secondname, $email)";
        $result = $pdo->query($query);
        }

    function get_post($pdo, $var) {
        return $pdo->quote($_POST[$var]);
        }
    
        echo <<<_FORM
        <div id="form">
        <h4>LET'S STAY CONNECTED</h4>
        <form action="index.php" method="post" name="form"><pre>
            First Name  <input type="text" class="input" name="firstname" placeholder="Enter your first name" required><br/>
            Second Name <input type="text" class="input" name="secondname" placeholder="Enter your second name" required><br/>
            Email       <input type="email" class="input" name="email" placeholder="Enter your email" required><br/>
            <button type="submit" id="button">click</button>
        </pre></form>
        </div>
        <h5>MY CONNECTIONS</h5>
        _FORM;
        
    $query  = "SELECT * FROM users_data";
    $result = $pdo->query($query);
            
    while ($row = $result->fetch()) {
        $r0 = htmlspecialchars($row['FirstName']);
        $r1 = htmlspecialchars($row['SecondName']);
        $r2 = htmlspecialchars($row['Email']);
                
    echo <<<_END
        <div id="form_delete">
            <pre id="pre">
                First Name:  $r0
                Second Name: $r1
                Email:       $r2
            </pre>
            <form action='index.php' method='post'>
                <input type='hidden' name='delete' value='yes'>
                <input type='hidden' name='email' value='$r2'>
                <input type='submit' id="button_delete" value='delete'>
            </form>
        </div>
    _END;
    }
    
    echo <<<_FOOTER
            <footer id="footer">
                <a href="https://www.linkedin.com/in/nadiia-voloshyna/" target="_blank">Click here to visit Nadiia Voloshyna Website.</a>
            </footer>
        </body>
    </html>
    _FOOTER;

?>