<!-- Document template made in VSCode 
[accessed 03/05/2023] -->
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>test page</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <script type="text/javascript" src="test.js"></script>
    </head>

    <body>
        <header>
            <h2 id="header">Test page</h2>
            <img src="image.jpg" name="image" alt="image" onmouseover="onMouseOver()" onmouseout="onMouseOut()">
        </header>
        <?php
            echo " Today is " . date("l") . ". ";
        ?>
        <section>
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

        <form method="post" id="feedback">
            Username: <input type="text" id="name" placeholder="Enter your name"> </form><br>
            <button type="submit" id="submit" onclick="handleFormSubmit()">Click</button>
        </form>

        <footer id="footer">
            <a href="https://www.linkedin.com/in/nadiia-voloshyna/" target="_blank">Click here to visit Nadiia Voloshyna Website.</a>
        </footer>
    </body>
</html>