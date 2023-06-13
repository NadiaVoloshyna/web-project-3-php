<?php
    require_once 'header.php';

    require_once 'login.php';
    try {
        $pdo = new PDO($attr, $user, $pass, $opts);
    }
    catch (PDOException $e) {
        throw new PDOException($e->getMessage(), (int)$e->getCode());
    }

    $table = "article3";
    $action = "article3.php";

    echo <<<_ARTICLE
        <div class="container-fluid main">
            <div class="row">
                <div class="col">
                    <h3>Top 5 Password Cracking Techniques Used by Hackers</h3>
                    <p>
                        One of the biggest security threats is password cracking. Are you an IT system administrator concerned about the security of your organization's data? 
                        In this article, we'll provide an overview of password cracking, discuss the importance of strong passwords, and detail the top 5 password cracking 
                        techniques hackers use. We'll also provide real-world examples of password-cracking attacks and their impact and recommendations for enhancing password security. 
                        Whether you're a seasoned IT professional or just getting started, you need to understand these password cracking techniques to help better secure your organization's data.
                    </p>
                    <div class="hr"></div>
                </div>
            </div>
            <div class="row section">
                <div class="col-xxl-7 col-xl-6 col-sm-12 article">
                    <h4>What Goes Into Cracking a Password</h4>
                    <p>
                        Many users may have seen password cracking portrayed in movies as a quick and impressive feat. But, it is far less flashy and potentially much more 
                        time-consuming, according to this 2022 Hive report. Password cracking typically involves brute-forcing a password using various methods. 
                    </p>
                    <p>
                        To understand password cracking, you must first understand how passwords are stored. There are two primary ways to store passwords: encryption and hashing. 
                        Encryption transforms plaintext into reversible ciphertext, which allows password managers to store and display the original plaintext password. 
                        On the other hand, hashing is the typical method used for storing passwords for online services. Since service operators don't need to reverse passwords, 
                        only to verify they are correct, passwords are hashed. Hash algorithms convert plaintext values into ciphertext in a one-way process.
                    </p>
                    <p>
                        Before attempting to crack a password, an attacker must retrieve the ciphertext value, often through man-in-the-middle attacks, hacked credential databases, 
                        or phishing attempts. Ultimately, the attacker can begin their work once the ciphertext value has been obtained, typically as a hash value.
                    </p>
                    <h4>Password Cracking Techniques & Tools of the Trade</h4>
                    <p>
                        Once an attacker has obtained the hash, the next step is to crack the password. Most password-cracking techniques involve brute-forcing the password,
                        but there are ways to make this process more efficient and straightforward.
                    </p>
                    <h5>Brute Forcing</h5>
                    <p>
                        Sometimes, the only way to find a password is to attempt every possible combination of letters, numbers, and symbols. If the password is random, 
                        many other techniques to make the job easier may not work. This approach is the least efficient, but it may be the only option when all else fails.
                    </p>
                    <p>
                        An attacker may use a computer or a cluster of computers to attempt every possible variation. The longer the password, the more difficult and 
                        time-consuming the cracking process becomes.
                    </p>
                    <p>
                        As an example of times, here are some recent findings from the 2023 Hive report on how long, passwords with lowercase and uppercase letters verses 
                        more complex passwords (i.e., numbers, upper and lowercase letters, and symbols in an MD5 hash) take to crack.
                    </p>
                    <div class="container-fluid" id="table">
                        <table class="table text-center">
                            <thead>
                                <tr class="d-flex">
                                    <th class="col-xl-3 col-lg-2 col-md-4 col-sm-4">Characters</th>
                                    <th class="col-lg-3 col-md-4 col-sm-4">Lower & Uppercase Letters</th>
                                    <th class="col-lg-3 col-md-4 col-sm-4">Complex Passwords</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="d-flex">
                                    <td class="col-xl-3 col-lg-2 col-md-4 col-sm-4">8 Characters</td>
                                    <td class="col-lg-3 col-md-4 col-sm-4">22 minutes</td>
                                    <td class="col-lg-3 col-md-4 col-sm-4">8 hours</td>
                                </tr>
                                <tr class="d-flex">
                                    <td class="col-xl-3 col-lg-2 col-md-4 col-sm-4">9 Characters</td>
                                    <td class="col-lg-3 col-md-4 col-sm-4">19 hours</td>
                                    <td class="col-lg-3 col-md-4 col-sm-4">3 weeks</td>
                                </tr>
                                <tr class="d-flex">
                                    <td class="col-xl-3 col-lg-2 col-md-4 col-sm-4">10 Characters</td>
                                    <td class="col-lg-3 col-md-4 col-sm-4">1 month</td>
                                    <td class="col-lg-3 col-md-4 col-sm-4">5 years</td>
                                </tr>
                                <tr class="d-flex">
                                    <td class="col-xl-3 col-lg-2 col-md-4 col-sm-4">11 Characters</td>
                                    <td class="col-lg-3 col-md-4 col-sm-4">5 years</td>
                                    <td class="col-lg-3 col-md-4 col-sm-4">500 years</td>
                                </tr>
                                <tr class="d-flex">
                                    <td class="col-xl-3 col-lg-2 col-md-4 col-sm-4">12 Characters</td>
                                    <td class="col-lg-3 col-md-4 col-sm-4">300 years</td>
                                    <td class="col-lg-3 col-md-4 col-sm-4">34k years</td>
                                </tr> 
                            </tbody>
                        </table>
                    </div>
                    <h5>Rainbow Table</h5>
                    <p>
                        Since hashing algorithms are publicly known, it is possible to create massive lists of pre-computed password hashes that a stolen hash can be 
                        compared against. Instead of generating a new hash for every variation, look up the stolen hash against a table to see if it matches.
                    </p>
                    <p>
                        There are many different hash methods and near-infinite password variations, which can quickly make managing and storing tables like this very difficult. 
                        There is another technique known as password salting that can also throw a wrench in this technique. If the server adds random values to the front and end 
                        of a hash (values known only to the server), then the resulting hashes won't match known values anymore.
                    </p>
                    <h5>Dictionary Attack</h5>
                    <div>
                        <figure id="float">
                            <img src="images/space.jpg" id="space" alt="space">
                            <figcaption class="figcaption">Top 5 Star Wars-themed passwords</figcaption>
                        </figure>
                            <p>
                                To make brute-forcing a password easier, attackers can use dictionaries of common words and phrases and company names, sports teams, etc. This narrows 
                                down the list of potential password choices.
                            </p>
                            <p>
                                In the past, users were recommended to change their password often (e.g., every 90 days) and to use complex passwords. But, this led to users choosing 
                                passwords like !yoda2023#, which makes the job of a password cracker easier. Once the base word, yoda, is guessed through a dictionary attack, 
                                trying a few different symbols and numbers can quickly crack the password. In the image below you can see the top 5 Star Wars themed base terms that 
                                are used in compromised passwords.
                            </p>
                            <p>
                                A more advanced form of a dictionary attack is the Markov chain attack. This involves a statistical analysis of a list of words stored in a table and 
                                used to calculate the probability of character placement in a brute-force attack.
                            </p>
                    </div>
                    <h5>Credential Stuffing</h5>
                    <p>
                        Users commonly use the same root password across multiple services. If one password is broken on a service, an attacker can quickly try that same 
                        password or variations on other services to which the user may have access.
                    </p>
                    <p>
                        Known as credential stuffing, attackers will try the cracked password on multiple services to try different passwords on the same service. This can result 
                        in all of the user's services being compromised.
                    </p>

                </div>
    _ARTICLE;

    require_once 'sidebar.php';

    echo <<<_END
            </div>
    _END;

    require_once 'comments.php';
    
    require_once 'footer.php';

?>