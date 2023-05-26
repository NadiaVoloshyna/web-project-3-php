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
        <div id="form">
            <h4>JOIN THE CONVERSATION</h4>
            <form action=$action method="post" name="form">
                <input type="text" id="input" name="name" placeholder="Enter your name" required><br/>
                <textarea id="textarea" name="comment" rows="10" cols="80" placeholder="Leave your comment" required></textarea><br/>
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
                <img src="images/chat.png" name="earth" alt="earth">
                <div id="commenter">
                    <p><b>$r0</b></p>
                    <div>$r1</div>
                </div>
            </div>
        _COMMENTS;
    }
?>