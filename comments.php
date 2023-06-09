<?php
    if (isset($_POST['name']) && isset($_POST['comment'])) {
        $name = get_post($pdo, 'name');
        $comment = get_post($pdo, 'comment');
                
        $query = "INSERT INTO $table (Name, Comment) VALUES ($name, $comment)";
        $result = $pdo->query($query);
    }

    function get_post($pdo, $var) {
        return $pdo->quote($_POST[$var]);
    }

    echo <<<_FORM
        <div id="form" class="col-lg-4">
            <h4>JOIN THE CONVERSATION</h4>
            <form action=$action method="post" name="form">
                <div class="mb-3">
                    <input type="text" class="form-control" id="FormControlInput" name="name" placeholder="Enter your name" aria-describedby="name" required>
                    <div style="color: white" id="name" class="form-text">We'll never share your name with anyone else.</div>
                </div>
                <div class="mb-3">
                    <textarea class="form-control" id="FormControlTextarea" rows="7" name="comment" placeholder="Leave your comment" required></textarea>
                </div>
                <button type="submit" id="button_post" class="button">post</button>
            </form>
        </div>
    _FORM;

    $query  = "SELECT * FROM $table";
    $result = $pdo->query($query);

    echo <<<_TITLE
        <h4 id="title">ALL COMMENTS</h4>
    _TITLE;

    while ($row = $result->fetch()) {
        $r0 = htmlspecialchars($row['Name']);
        $r1 = htmlspecialchars($row['Comment']);
                    
        echo <<<_COMMENTS
            <div id="block">
                <img src="images/chat.png" alt="chat">
                <div>
                    <p id="commenter"><b>$r0</b></p>
                    <div>$r1</div>
                </div>
            </div>
        _COMMENTS;
    }

    echo <<<_END
        </main>
    _END;
?>