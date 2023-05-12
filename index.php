<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>test page</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <script type="text/javascript" src="test.js"></script>
        <script>
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
        </script>
    </head>

    <body>
        <header id="header">
            <img src="image.jpg" name="image" alt="image" onmouseover="onMouseOver()" onmouseout="onMouseOut()">
            <h2>Nadiia Voloshyna</h2>
            <div id="quote">
               <?php
                echo " Today is " . date("l") . " ... Hold the vision, trust the process ";
                ?> 
            </div>
        </header> 

        <?php
            require_once 'login.php';
            try
            {
                $pdo = new PDO($attr, $user, $pass, $opts);
            }
            catch (PDOException $e)
            {
                throw new PDOException($e->getMessage(), (int)$e->getCode());
            }
        ?>
       
        <section id="s1">
            <p id="p1" onmouseover="handleMouseOver()" onmouseout="handleMouseOut()">
                <b>Lorem ipsum dolor</b> sit amet, consectetur adipiscing elit. Donec venenatis, 
                risus a molestie tempus, sem augue rhoncus ligula, sed pharetra tortor mauris in orci. 
                Maecenas vulputate elementum nibh, non pretium turpis ornare id. Quisque aliquam vel 
                dolor quis ultrices. Praesent posuere pharetra elementum. Sed lacinia, ante eleifend 
                iaculis ultrices, tellus est egestas massa, ac eleifend arcu dui vel libero. Aliquam ac 
                diam quis est commodo iaculis eu ac risus. Aliquam eget bibendum ex. Nam tincidunt 
                pulvinar elit, ac porta lectus ultrices vel. Phasellus et posuere augue. Suspendisse 
                porttitor, nisl ac porttitor feugiat, purus neque rutrum metus, placerat convallis 
                augue nisl at ligula. Nunc blandit tortor at est congue, eu placerat dui viverra. <acronym title="Hypertext Markup Language">HTML</acronym>
            </p>
            <hr />
            <p>
                <dfn>Lorem</dfn> ipsum dolor sit amet, consectetur adipiscing elit. Donec venenatis, 
                risus a molestie tempus, <abbr title="semuel">sem</abbr> augue rhoncus ligula, sed pharetra tortor mauris in orci. 
                Maecenas vulputate elementum nibh, non pretium turpis ornare id. Quisque aliquam vel 
                <blockquote cite="http://www.w3.org/markup/">quis ultrices. Praesent posuere pharetra elementum. Sed lacinia,</blockquote> ante eleifend 
                iaculis ultrices, tellus est egestas massa, ac eleifend arcu dui vel libero. Aliquam ac 
                diam quis est commodo iaculis eu ac risus. Aliquam eget bibendum ex. 
                tincidunt pulvinar elit, ac porta lectus ultrices vel. Phasellus et posuere augue. 
                <pre>
                Suspendisse 
                    porttitor, nisl ac porttitor feugiat, purus neque rutrum metus, placerat convallis 
                        augue nisl at ligula. Nunc blandit tortor at est congue, eu placerat dui viverra. 
                </pre>
            </p>
        </section>        
        
        <section>
            <ol>
                <li>&#060 Lorem ipsum dolor &#062</li>
                <li>Lorem ipsum dolor</li>
                <li>Lorem ipsum dolor</li>
            </ol>
            <dl>
                <dt>Lorem ipsum</dt>
                <dd>Sit amet, consectetur adipiscing elit.</dd>
                <dt>Lorem ipsum</dt>
                <dd>Maecenas vulputate elementum nibh.</dd>
                <dt>Lorem ipsum</dt>
                <dd>Tincidunt pulvinar elit, ac porta lectus ultrices vel.</dd>
            </dl>
        </section>

        <?php
            if (isset($_POST['delete']) && isset($_POST['email']))
            {
              $isbn   = get_post($pdo, 'email');
              $query  = "DELETE FROM users_data WHERE Email=$isbn";
              $result = $pdo->query($query);
            }

            if (isset($_POST['firstname']) && isset($_POST['secondname']) && isset($_POST['email']))
            {
                $firstname = get_post($pdo, 'firstname');
                $secondname = get_post($pdo, 'secondname');
                $email = get_post($pdo, 'email');
                
                $query = "INSERT INTO users_data (FirstName, SecondName, Email) VALUES ($firstname, $secondname, $email)";
                $result = $pdo->query($query);
            }
            function get_post($pdo, $var)
            {
                return $pdo->quote($_POST[$var]);
            }
        ?>

        <form action="index.php" method="post" name="form" id="feedback"><pre>
            First Name  <input type="text" id="name" name="firstname" placeholder="Enter your first name" required><br/>
            Second Name <input type="text" id="name" name="secondname" placeholder="Enter your second name" required><br/>
            Email       <input type="email" id="name" name="email" placeholder="Enter your email" required><br/>
            <button type="submit" id="submit">Click</button>
        </pre></form>
        
        <?php
            $query  = "SELECT * FROM users_data";
            $result = $pdo->query($query);
            
            while ($row = $result->fetch())
            {
                $r0 = htmlspecialchars($row['FirstName']);
                $r1 = htmlspecialchars($row['SecondName']);
                $r2 = htmlspecialchars($row['Email']);
                
                echo <<<_END
            <pre>
                First Name:  $r0
                Second Name: $r1
                Email:       $r2
            </pre>
            <form action='index.php' method='post'>
                <input type='hidden' name='delete' value='yes'>
                <input type='hidden' name='email' value='$r2'>
                <input type='submit' id="submit" value='delete'>
            </form>
            _END;
            }
        ?>

        <footer id="footer">
            <a href="https://www.linkedin.com/in/nadiia-voloshyna/" target="_blank">Click here to visit Nadiia Voloshyna Website.</a>
        </footer>
    </body>
</html>