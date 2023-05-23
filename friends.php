<?php
    require_once 'header.php';

    require_once 'login.php';
    try {
        $pdo = new PDO($attr, $user, $pass, $opts);
    }
    catch (PDOException $e) {
        throw new PDOException($e->getMessage(), (int)$e->getCode());
    }

    if (isset($_POST['delete']) && isset($_POST['email'])) {
        $isbn   = get_post($pdo, 'email');
        $query  = "DELETE FROM users_data WHERE Email=$isbn";
        $result = $pdo->query($query);
    }

    function get_post($pdo, $var) {
        return $pdo->quote($_POST[$var]);
    }
    
    $query  = "SELECT * FROM users_data";
    $result = $pdo->query($query);
    
    echo <<<_TITLE
        <h4 id="title">MY CONNECTIONS</h4>
    _TITLE;

    while ($row = $result->fetch()) {
        $r0 = htmlspecialchars($row['FirstName']);
        $r1 = htmlspecialchars($row['SecondName']);
        $r2 = htmlspecialchars($row['Email']);
                    
        echo <<<_FORM
            <div id="form_delete">
                <pre id="data">
                    First Name:  $r0
                    Second Name: $r1
                    Email:       $r2
                </pre>
                <form action='friends.php' method='post'>
                    <input type='hidden' name='delete' value='yes'>
                    <input type='hidden' name='email' value='$r2'>
                    <input type='submit' class="button" id="button_delete" value='delete'>
                </form>
            </div>
        _FORM;
    }

    require_once 'footer.php';
?>