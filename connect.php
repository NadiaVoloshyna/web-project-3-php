<?php
    require_once 'header.php';

    require_once 'login.php';
    try {
        $pdo = new PDO($attr, $user, $pass, $opts);
    }
    catch (PDOException $e) {
        throw new PDOException($e->getMessage(), (int)$e->getCode());
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
        <div id="form_input">
            <h4>LET'S STAY CONNECTED</h4>
            <form action="connect.php" method="post" name="form">
                <pre>
                    First Name  <input type="text" class="input" name="firstname" placeholder="Enter your first name" required><br/>
                    Second Name <input type="text" class="input" name="secondname" placeholder="Enter your second name" required><br/>
                    Email       <input type="email" class="input" name="email" placeholder="Enter your email" required><br/>
                    <button type="submit" id="button_input" class="button">click</button>
                </pre>
            </form>
        </div>
    _FORM;

    require_once 'footer.php';

?>