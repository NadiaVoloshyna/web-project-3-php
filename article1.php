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
        <section class="section">
            <article class="article">
                <p>
                    <b>Quantum technology</b> is rapidly advancing, bringing us closer to solving previously unsolvable problems. And at IBM, 
                    we're laser-focused on bringing useful quantum computing to the world. 
                    Yesterday, at the G7 Summit, we took a big step forward towards this new era with the announcement of our 10-year, $100 million partnership 
                    with the University of Tokyo and University of Chicago to develop a 100,000-qubit quantum system by the year 2033. Already, we've charted the path 
                    to scale quantum processors to thousands of qubits but we recognize we cannot usher in this new era of supercomputing alone. As ever, we see 
                    the potential and scale that comes from collaboration with like-minded, similarly ambitious institutions. Together, we will explore and advance 
                    four key areas required to realize a system as this scale: quantum communication, middleware for quantum, quantum algorithms and error correction, 
                    and components with the necessary supply chain. We do not underestimate the challenge before us, but we also see a clear path forward with 
                    the collective effort and resources IBM and our partners will bring to bear.
                </p>
                <hr>
                <h3>Charting the course to 100,000 qubits</h3>
                <p>
                    Our vision at IBM Quantum is to scale quantum processors to a size where they're capable of solving the world's most challenging problems.
                    In order to get there, we've set our sights on a key milestone: a 100,000-qubit system by 2033. And now, we're sponsoring and partnering on targeted 
                    research with the University of Tokyo and the University of Chicago to develop a system that would be capable of addressing some of the world's most 
                    pressing problems that even the most advanced supercomputers of today may never be able to solve.</p>
                <p>
                    But why 100,000? At last year's IBM Quantum Summit, we demonstrated that we'd charted the paths forward to scaling quantum processors to thousands 
                    of qubits — but beyond that, the path is less clear.
                </p>
                <p>
                    Why? It's a combination of footprint, cost, chip yield, energy, and supply chain challenges, to name a few. To ensure that these roadblocks don't 
                    stop our progress, we must collaborate to do fundamental research across physics, engineering, and computer science.
                </p>
                <p>
                    Just as no single company is responsible for the current era of computing, now the world's greatest institutions are coming together to tackle this 
                    problem to bring about this new era. We need the help of a broader quantum industry.
                </p>
                <h4>Scaling quantum computers</h4>
                <p>
                    Last year, we released our answer for how we plan to scale quantum computers to a level where they can perform useful tasks. With that foundation set, 
                    we now see four key areas requiring further advancement in order to realize the 100,000-qubit supercomputer: Quantum communication, middleware for quantum, 
                    quantum algorithms and error correction (capable of using multiple quantum processors and quantum communication), and components with the necessary supply chain.
                <p>
                <p>
                    We'll be sponsoring research at the University of Chicago and the University of Tokyo to advance each of these four areas.
                </p>
                <img src="images/supercomputer.jpg" alt="supercomputer">
                <p>
                    The University of Tokyo will lead efforts to identify, scale, and run end-to-end demonstrations of quantum algorithms. They will also begin to develop and 
                    build the supply chain around new components required for such a large system including cryogenics, control electronics, and more. The University of Tokyo, 
                    too, has demonstrated leadership in these spaces; they helm the Quantum Innovation Initiative Consortium (QIIC), bringing together academia, government, and 
                    industry to develop quantum computing technology and building an ecosystem around it.
                </p>
                <p>
                    Through the IBM-UTokyo Lab, the university has already begun researching and developing algorithms and applications related to quantum computing, while 
                    laying the groundwork for the hardware and supply chain necessary to realize a computer at this scale.
                </p>
                <p>
                    Meanwhile, the University of Chicago will be leading efforts in bringing quantum communication to quantum computation, with classical and quantum parallelization 
                    plus quantum networks. They will also lead efforts to improve middleware for quantum, adding serverless quantum execution, circuit knitting, and physics-informed 
                    error resilience so we can run programs across these systems.
                </p>
                <p>
                    The University of Chicago has already demonstrated a proven track record of leadership in quantum and quantum communication through the Chicago Quantum Exchange. 
                    The CQE operates a 124-mile quantum network over which to study long-range quantum communication. Additionally, many of the University of Chicago's software 
                    techniques have helped provide structure to quantum software and influenced IBM's and other industry middleware.
                </p>
                <p>
                    We recognize how challenging it will be to build a 100,000-qubit system. But we see the path before us — we have our list of known knowns and known unknowns. 
                    And if unforeseen challenges arise, we as an industry should be eager to take them on. We think that together with the University of Chicago and the University of Tokyo, 
                    100,000 connected qubits is an achievable goal by 2033.
                </p>
                <p>
                    At IBM, we'll continue following our development roadmap to realize quantum-centric supercomputing, while enabling the community to pursue progressive performance 
                    improvements. It means finding quantum advantages over classical processors, while treating quantum as one piece of a broader HPC paradigm with classical and quantum 
                    working as one computational unit. And with this holistic approach, plus our push toward the 100,000-qubit mark, we're going to bring useful quantum computing to the world, 
                    together.
                </p>       
            </article>
    _ARTICLE;

    require_once 'comments.php';
    
    require_once 'footer.php';

?>